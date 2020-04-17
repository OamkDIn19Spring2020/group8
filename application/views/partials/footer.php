<div class="subcribe">
    <div class="container">
        <div class="empty"></div>
        <div class="row">
            <div class="col-7 subcribe__text">
                <div class="empty"></div>
                <h2>Subcribe to our newsletters</h2>
                <form>
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-dark">SIGN UP</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    I would like to receive news and special offers.
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-5 subcribe__img">
                <figure>
                    <img src="assets/img/subcribe.png" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container footer">
        <div class="empty"></div>
        <div class="row text-white">
            <div class="col-6">
                <img src="assets/img/logo.jpg" height="150" width="150" alt="">
                <div class="my-5">
                    <p>SneakerHead <i class="far fa-registered"></i> is a project of Ha Quyen and Thinh Nguyen.</p>
                    <p>For feedback, please contact via email t9qutr00@studetns.oamk.fi or t9ngdu00@students.oamk.fi
                    </p>
                </div>
            </div>
            <div class="col-3 text-center">
                <h4>About us</h4>
                <div class="footer__aboutus">
                    <ul>
                        <li><a>About us</a></li>
                        <li><a>Our story</a></li>
                        <li><a>Careers</a></li>
                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3 text-center">
                <h4>We're social</h4>
                <div class="footer__icons">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    $('.loop').owlCarousel({
        center: true,
        items: 1,
        loop: true,
        margin: 100,
        responsive: {
            900: {
                items: 1
            }
        }
    });
</script>