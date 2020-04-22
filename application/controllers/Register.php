<?php

use PHPMailer\PHPMailer\PHPMailer;

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('myprofile');
        }
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('register_model');
    }

    function index()
    {
        $data = array(
            'title' => 'Register',
            'home' =>  '<a class="nav-item nav-link" style="color:white" href="' . base_url() . 'home">HOME</a>',
            'men' => '<a class="nav-item nav-link" href="' . base_url() . 'men">MEN</a>',
            'women' => '<a class="nav-item nav-link" href="' . base_url() . 'women">WOMEN</a>',
            'kids' => '<a class="nav-item nav-link" href="' . base_url() . 'kids">KIDS</a>',
            'news' => '<a class="nav-item nav-link" href="' . base_url() . 'news">NEWS</a>',
            'contact' => '<a class="nav-item nav-link" href="' . base_url() . 'contact">CONTACT</a>'
        );
        $this->load->view('register/register', $data);
    }

    function validation()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('country', 'Country', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|trim');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $verification_key = md5(rand());
            $encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
            $data = array(
                'first_name'  => $this->input->post('first_name'),
                'last_name'  => $this->input->post('last_name'),
                'country'  => $this->input->post('country'),
                'phone'  => $this->input->post('phone'),
                'email'  => $this->input->post('user_email'),
                'password' => $encrypted_password,
                'verification_key' => $verification_key
            );
            $id = $this->register_model->insert($data);
            if ($id > 0) {
                $subject = "Please verify email for login";
                $message = "
                    <p>Hi " . $this->input->post('user_name') . "</p>
                    <p>This is email verification mail from Codeigniter Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='" . base_url() . "register/verify_email/" . $verification_key . "'>link</a>.</p>
                    <p>Once you click this link your email will be verified and you can login into system.</p>
                    <p>Thanks,</p>
                    ";
                $this->load->library('phpmailer_lib');
                $mail = $this->phpmailer_lib->load();
                $mail->Mailer = 'smtp';
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->SMTPDebug = 3;
                $mail->Username = 'dinsp19oamk@gmail.com';
                $mail->Password = 'Sneaker135';
                $mail->SMTPSecure = 'ssl';
                $mail->Port     = 465;
                $mail->setFrom('sneakerheadinfo@gmail.com', 'SneakerHead Info');
                $mail->addAddress($this->input->post('user_email'));
                // Email subject
                $mail->Subject = $subject;
                // Set email format to HTML
                $mail->isHTML(true);
                // Email body content
                $mail->Body = $message;
                if ($mail->send()) {
                    $this->session->set_flashdata('message', 'Check in your email for email verification mail');
                    redirect('register');
                }
            }
        } else {
            $this->index();
        }
    }

    function verify_email()
    {
        if ($this->uri->segment(3)) {
            $verification_key = $this->uri->segment(3);
            if ($this->register_model->verify_email($verification_key)) {
                $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="' . base_url() . 'login">here</a></h1>';
            } else {
                $data['message'] = '<h1 align="center">Invalid Link</h1>';
            }
            $this->load->view('email_verification', $data);
        }
    }
}
