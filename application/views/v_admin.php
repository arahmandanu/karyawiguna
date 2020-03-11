<?php

if (empty($_SESSION['nama'])) {

    header('Location:'.base_url().'loginadmin');

}else{

    

?>

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
        <link href="<?php echo base_url('vendors/js/datatable/datatable.min.css');?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
        <style type="text/css">

            div.loadingpage{
                margin-left: 50%;
            }

        </style>
    </head>
    <body>
        
        <!--================Menu Area =================-->
        <header class="shop_header_area carousel_menu_area">
            <div class="carousel_menu_inner">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>

                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto" id="menu">

                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home Profile <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item" link="<?php echo base_url('admin/settingprofile');?>"><a class="nav-link">Setting Profile Web</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown submenu active">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Assets <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item" link="<?php echo base_url('admin/addproduk');?>"><a class="nav-link" >Tambah Produk</a></li>

                                        <li class="nav-item" link="<?php echo base_url('admin/settingproduk');?>"><a class="nav-link">Setting Produk</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item dropdown submenu active">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Galeri <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item" link="<?php echo base_url('admin/albumfoto') ?>"><a class="nav-link">Foto</a></li>

                                        <li class="nav-item" link="<?php echo base_url('admin/albumvideo') ?>"><a class="nav-link">Video</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item dropdown submenu">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    User<i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('loginadmin/logout') ?>">Log Out</a></li>
                                        <li class="nav-item" link="tes"><a class="nav-link">Edit Password</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner" style="padding: 20px !important;">
                    <h3>Selamat Datang <?php echo $_SESSION['nama']; ?> di Halaman Administrator</h3>
                    <p id='judulmenu'>Silahkan Pilih Menu di Atas</p>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================login Area =================-->
        <section class="login_area p_100">
            <div class="container">
                <div class="login_inner">
                    <div class="row">
                        <div class="col-lg-12" id="tempel">


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End login Area =================-->
      
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('vendors/js/jquery-3.2.1.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/js/datatable/datatable.min.js');?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('vendors/js/popper.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/js/bootstrap.min.js');?>"></script>
        
        <!-- Rev slider js -->
        <script src="<?php echo base_url('vendors/vendors/revolution/js/jquery.themepunch.tools.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/jquery.themepunch.revolution.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.actions.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.video.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.navigation.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
        <!-- Extra plugin css -->
        <script src="<?php echo base_url('vendors/vendors/counterup/jquery.waypoints.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/counterup/jquery.counterup.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/owl-carousel/owl.carousel.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/bootstrap-selector/js/bootstrap-select.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/image-dropdown/jquery.dd.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/js/smoothscroll.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/isotope/imagesloaded.pkgd.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/isotope/isotope.pkgd.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/magnify-popup/jquery.magnific-popup.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/vertical-slider/js/jQuery.verticalCarousel.js');?>"></script>
        <script src="<?php echo base_url('vendors/vendors/jquery-ui/jquery-ui.js');?>"></script>
        
        <script src="<?php echo base_url('vendors/js/theme.js');?>"></script>

        <script type="text/javascript">

            $(document).ready(function(e) {

                $("div[role=alert]").fadeTo(2000, 500).slideUp(500, function(){
                    $("div[role=alert]").slideUp(500);
                });


                var li = $("ul#menu").find("li[link]");

                li.each(function(index, el) {
                    
                    li[index].onclick = function(){

                        $("#tempel").html("<div class='loadingpage'><br><img src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");
                        var judulmenu = this.firstChild.innerHTML;
                        console.log(judulmenu);
                        $("p#judulmenu").html(judulmenu);
                        var target = this.getAttribute("link");                        
                
                        $("#tempel").load(target);

                    };

                });

            });

        </script>

    </body>
</html>

<?php }?>
