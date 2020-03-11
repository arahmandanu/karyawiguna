<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo site_url('vendors/img/fav-icon.png'); ?>" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Home</title>

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
        
        <link href="<?php echo base_url('vendors/css/style.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('vendors/css/responsive.css');?>" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        

    </head>

        <style type="text/css">

            div.loadingpage{
                margin-left: 45%;
            }

        </style>
    <body>
        <!--================Menu Area =================-->
        <header class="shop_header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">MegaJaya Teknik</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        
                        <ul class="navbar-nav" id="menu">
                            <li class="nav-item active" ><a href="<?php echo base_url('home/index');?>" class="nav-link">Home</a></li>
                            <li class="nav-item sr-only"><a class="nav-link">Foto dan Video</a></li>
                            <li class="nav-item" link="<?php echo base_url('home/profil') ?>"><a class="nav-link" >Profil</a></li>
                            <li class="nav-item" link="<?php echo base_url('home/contact');?>"><a class="nav-link" >Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================End Menu Area =================-->
      
        <div id="konten">
            <?php echo $content; ?>
        </div>  

        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="container">
                <div class="footer_widgets">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-6">
                            <aside class="f_widget f_about_widget">
                                <img src="<?php echo base_url().'profil/'.$data->row()->gambar_profil; ?>" alt="Megajaya Teknik">
                                <p>Perusahaan yang bergerak di bisang penyediaan alat-alat perbankan. Kami sudah menjalani penyediaan alat-alat perbankan sejak tahun 1999. </p>
                            </aside>
                        </div>

                        
                    </div>
                </div>

                <div class="footer_copyright">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</h5>
                </div>

            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('vendors/js/jquery-3.2.1.min.js');?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('vendors/js/popper.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/js/bootstrap.min.js');?>"></script>

        <script type="text/javascript">

            $(document).ready(function() {

                var pesan = "<?php echo $this->session->flashdata('pesan');?>";
                    modalpesan(pesan);

            });

          

                    var det = document.querySelectorAll("li[det]");

                    for(i=0; i<det.length ;i++){
                        det[i].onclick=function(){

                            var target = $(this).attr("det");

                            $("div#konten").html("<div class='loadingpage'><br><img src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");
                    
                            $("div#konten").load(target);

                            // $.post('<?php echo base_url('home/detailproduk')?>', {id:id}, function(data, textStatus, xhr) {
                            //     console.log(data);
                            // });
                        }
                    }
                    

            var menu = $("ul#menu").find("li");
                menu.each(function(index, el) {

                    menu[index].onclick =function(){

                        $("div#konten").html("<div class='loadingpage'><br><img src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");

                        var a = $("ul#menu").find("li.nav-item.active");
                        a.attr('class', 'nav-item');

                        this.setAttribute('class', 'nav-item active');

                        var target = this.getAttribute("link");   
                
                        $("div#konten").load(target);

                    };

                });

            function modalpesan(pesan){
                if(pesan == "sukses"){

                    $("div#success").modal("show");

                }else if (pesan == "gagal") {

                    $("div#error").modal("show");

                }

                

            }

        </script>

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


        
    </body>
</html>