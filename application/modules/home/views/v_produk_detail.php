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

<style type="text/css">
    img.detail {
      max-width: 100%;
      height: auto;
    }

    img.detail:hover {
      box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    div#deskripsi > p{
        border:none;
    }
    h3{
        border-bottom: 1px solid #d6d6d6;
       
    }

    .outer {
        padding-bottom: 10px;
        height: auto;
        white-space: nowrap;
        position: relative;
        overflow:hidden;
        overflow-x: scroll;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
    }
</style>
<!--================Product Details Area =================-->
<section class="product_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="product_details_slider" style="text-align: center;">
                    <div style="height: 500px; display: flex; justify-content: center;">

                        <a href="<?php echo $data->row()->link_pic; ?>" target="_blank">
                            <img class="detail" src="<?php echo base_url().'produk/'.$data->row()->pic; ?>" target="_blank" style="display: block;max-width:300px;max-height:500px;width: auto;height: auto;" alt="<?php echo $data->row()->pic; ?>">
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="product_details_text">
                    <h3><?php echo $data->row()->judul; ?></h3>
                    <div id="deskripsi">
                        <?php echo $data->row()->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Details Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">

        <nav class="tab_menu">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Foto</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Video</a>
            </div>
        </nav>

        <div class="tab-content" style="padding: 0px 0px !important;">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="outer" >

                    <?php if ($foto->num_rows() > 0 ){ foreach ($foto->result() as $key => $value) { ?>

                    <div style="display: inline-block;vertical-align: top; width:250px;">
                        <div class="fillter_product_item bags">

                            <div class="f_p_text">
                                <h5 style="padding-bottom: 0px;"><?php echo $value->judul_foto; ?></h5>
                                <hr>
                            </div>


                            <div style="height: 200px; display: flex; align-items: center;justify-content: center;">

                                <a href="<?php echo base_url().'album/'.$value->pic; ?>" target="_blank" style="padding-left: 50px;padding-right: 50px;">
                                    <img style="object-fit: cover;display: block;width: 200px;height: 200px;" src="<?php  echo base_url().'album/'.$value->pic; ?>" alt="">
                                </a>
                            </div>

                        </div>
                    </div>

                    <?php } } else { ?>
                        <label  style="font-size: 16; opacity: 0.6;padding:25px;">No Photos Found</label>
                    <?php } ?>
                    
                </div>
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="outer" >

                    <?php if ($video->num_rows() > 0 ){ foreach ($video->result() as $key => $value) { ?>

                    <div style="display: inline-block;vertical-align: top; width:250px;">
                        <div class="fillter_product_item bags">

                            <div class="f_p_text">
                                <h5 style="padding-bottom: 0px;"><?php echo $value->judul_video; ?></h5>
                                <hr>
                            </div>


                            <div style="height: 300px; display: flex; align-items: baseline;justify-content: center;">
                                 <video style="display: block;max-width:230px;max-height:300px;width: auto;height: auto;" src="<?php  echo base_url().'albumvideo/'.$value->video; ?>" controls>
                            </div>

                        </div>
                    </div>

                    <?php }

                     } else { ?>

                        <label  style="font-size: 16; opacity: 0.6;padding:25px;">No Videos Found</label>

                    <?php } ?>
                    
                </div>
            </div>

        </div>
    </div>
</section>
<!--================End Product Details Area =================-->

<!--================End Related Product Area =================-->
<section class="related_product_area sr-only">
    <div class="container">
        <div class="related_product_inner">
            <h2 class="single_c_title">Related Product</h2>

            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="img/product/related-product/r-product-1.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Run Tracksuit</h4>
                            <h5>$85.50</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="img/product/related-product/r-product-2.jpg" alt="">
                            <h5 class="new">New</h5>
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Nike Men Trouser</h4>
                            <h5><del>$130.50</del>  $110</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="img/product/related-product/r-product-3.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Nike Track Pants</h4>
                            <h5>$250.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="img/product/related-product/r-product-4.jpg" alt="">
                            <h5 class="sale">Sale</h5>
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Therma Pants</h4>
                            <h5>$45.50</h5>
                        </div>
                    </div>
                </div>

            </div>

            <nav aria-label="Page navigation example" class="pagination_area">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
              </ul>
            </nav>
        </div>
    </div>
</section>
<!--================End Related Product Area =================-->

 <!--================Featured Product Area =================-->
<section class="feature_product_area sr-only">
    <div class="container">
        <div class="f_p_inner">
            <div class="row">

                <div class="col-lg-12">
                    <div class="fillter_slider_inner">

                        <div class="fillter_slider owl-carousel" id="items">
                            <?php foreach ($foto->result() as $key => $value) { ?>

                            <div class="item shoes">
                                <div class="fillter_product_item bags">
                                    <div class="f_p_img">
                                        <img src="<?php  echo $value->link_pic; ?>" alt="">
                                    </div>
                                    <div class="f_p_text">
                                        <h5><?php echo $value->judul_foto; ?></h5>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--================End Featured Product Area =================-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('vendors/js/jquery-3.2.1.min.js');?>"></script>
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
    $('.items').owlCarousel({
        loop: false,
        rewind: true
    });
</script>