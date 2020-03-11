<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Persuit</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url('vendors/css/font-awesome.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/vendors/line-icon/css/simple-line-icons.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/vendors/elegant-icon/style.css');?>" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url('vendors/css/bootstrap.min.css');?>" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php echo base_url('vendors/vendors/revolution/css/settings.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/vendors/revolution/css/layers.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/vendors/revolution/css/navigation.css');?>" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo base_url('vendors/vendors/owl-carousel/owl.carousel.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/vendors/bootstrap-selector/css/bootstrap-select.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/vendors/jquery-ui/jquery-ui.css');?>" rel="stylesheet">
        
        <link href="<?php echo base_url('vendors/css/style.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/css/responsive.css');?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>Login Halaman Admin Megajaya Teknik</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="track.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================login Area =================-->
        <section class="login_area p_100">
            <div class="container">
                <div class="login_inner">
                    <div class="row">

                        <div class="col-lg-4">

                            <?php if($this->session->flashdata('gagal_login') == TRUE){ ?>

                            <div class="alert alert-danger" role="alert">
                              <?php echo $this->session->flashdata('gagal_login'); ?>
                            </div>

                            <?php } ?>

                            <?php if($this->session->flashdata('sukses') == TRUE){ ?>

                            <div class="alert alert-success" role="alert">
                              <?php echo $this->session->flashdata('sukses'); ?>
                            </div>

                            <?php } ?>
                        </div>

                        <div class="col-lg-8">
                            <div class="login_title">
                                <h2>Login to your account</h2>
                                <p>Masukkan Username dan Password anda</p>
                            </div>
                            <form class="login_form" action="loginadmin/login" method="post" >

                                <div class="col-lg-6 form-group">
                                    <input required class="form-control" type="text" name="username" placeholder="User Name">
                                </div>

                                <div class="col-lg-6 form-group">
                                    <input required class="form-control" type="password" name="pass" placeholder="Password">
                                </div>

                                <div class="col-lg-6 form-group">
                                    <input required class="form-control" type="password" name="repass" placeholder="Re-Password">
                                </div>

                                <div class="col-lg-6 form-group">
                                    <button type="submit" value="submit" class="btn subs_btn form-control">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End login Area =================-->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('vendors/js/jquery-3.2.1.min.js'); ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('vendors/js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/js/bootstrap.min.js'); ?>"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url('vendors/vendors/revolution/js/jquery.themepunch.tools.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/jquery.themepunch.revolution.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.actions.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.video.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.navigation.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>"></script>
        <!-- Extra plugin css -->
        <script src="<?php echo base_url('vendors/vendors/counterup/jquery.waypoints.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/counterup/jquery.counterup.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/owl-carousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/bootstrap-selector/js/bootstrap-select.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/image-dropdown/jquery.dd.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/js/smoothscroll.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/isotope/imagesloaded.pkgd.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/isotope/isotope.pkgd.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/magnify-popup/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/vertical-slider/js/jQuery.verticalCarousel.js'); ?>"></script>
        <script src="<?php echo base_url('vendors/vendors/jquery-ui/jquery-ui.js'); ?>"></script>
        
        <script src="<?php echo base_url('vendors/js/theme.js'); ?>"></script>

        <script type="text/javascript">

            $("div[role=alert]").fadeTo(2000, 500).slideUp(500, function(){
                $("div[role=alert]").slideUp(500);
            });

        </script>

    </body>
    
</html>