<nav class="navbar navbar-default" style="background:rgba(207,201,191,0.4);">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>" id="home_content">
                <span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span>
            </a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>Documentation/" ><center>Documentation</center></a></li>
                <li><a href="<?php echo base_url();?>Community/" ><center>Community</center></a></li>
                <li><a href="<?php echo base_url();?>Help/" ><center>Help</center></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a class="cursor-pointer" data-toggle="modal" data-target="#loginModal"><center>Log-in</center></a></li>
                <?php $this->load->view('login.php');?>
                <li><a class="cursor-pointer" data-toggle="modal" data-target="#signupModal"><center>Sign-up</center></a></li>
                <?php $this->load->view('signup.php');?>
            </ul>
        </div><!-- /.navbar-collapse -->    
    </div><!-- /.container-fluid -->
</nav>