<?php echo validation_errors(); ?>
 
<?php echo form_open('subscriber/subscriber'); ?>
<p>
	<title>Subscribe</title>
</p>

    <!-- Main info -->
    <table>
        <div><h3>Subscribe for our latest newsletter</h3></div>
        <tr>
            <td><input type="text" name='email' required></td>
            <!-- Submit button -->
            <td><input style='float:right;' type="submit" value="Subscribe now"></td>
        </tr>
    </table>   

    <br>
    <head>
	<title>New subscriber</title>
</head>
<body>
<h1>Thanks for your subscribe!</h1>
<p><?php echo anchor('subscriber/subscribe', 'Back to menu'); ?></p>
</body>