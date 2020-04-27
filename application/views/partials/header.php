<header>
    <nav class="navbar">
        <a class="navbar-brand" href="#">
            <a href="<?php echo site_url('home/home'); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="150" height="100" alt="logo"></a>
        </a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="search..." aria-label="Search">
        </form>
        <div class="avatar">
            <img src="<?php echo base_url(); ?>assets/img/ava.jpg" alt="ava">
            <a href="<?php echo base_url(); ?>myprofile">My profile</a>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <div class="navbar-nav">
                <?php echo $home; ?>
                <?php echo $men; ?>
                <?php echo $women; ?>
                <?php echo $kids; ?>
                <?php echo $news; ?>
                <?php echo $contact; ?>
            </div>
        </div>
    </nav>
</header>