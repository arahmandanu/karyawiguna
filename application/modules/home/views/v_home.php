<style type="text/css">
    div.l_p_img img:hover{
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }

    a{
        color:black;
    }
</style>

<section class="product_listing_area" style="margin-bottom: 20px !important;">
   <div class="container">
       <div class="row p_listing_inner" style="margin-top: 2%">

            <div class="col-lg-8" style="text-align: center;align-self: center;margin-bottom: 15px;">
                <h3>PT. Karya Wiguna Sukses Mandiri</h3>
                <p style="line-height: 1;opacity: 0.7;">Penyedia alat perbankan terpercaya sejak tahun 1999</p>
            </div>

            <div class="col-lg-4" style="line-height: 1.5;">
                <a href="#"><i class="fa fa-phone"></i> Call Us: <span>0812-2516900</span></a><br>
                <a href="#"><i class="fa fa-envelope"></i> Email: <span>megajayateknik@yahoo.com</span></a><br>
                <a href="https://api.whatsapp.com/send?phone=082271511514"><i class="fa fa-whatsapp"></i> WhatsApp: <span>082271511514</span></a>
            </div>

        </div>
   </div> 
</section>
    


<section class="our_latest_product">
    <div class="container">

        
            <div class="s_m_title text-center" style="padding-top: 20px !important; padding-bottom:20px !important;">
                <h2>Daftar Produk</h2>
            </div>
        

        <div class="l_product_slider owl-carousel">

            <?php foreach ($data->result() as $key => $value) { ?>

            <div class="item">
                <div class="l_product_item">

                    <div class="l_p_img" style="height: 300px; display: flex; align-items: center;justify-content: center;background: #EEECEC">

                        <a href="<?php echo $value->link_pic; ?>" id="thumnail-wrapper" target="_blank" style="padding-left: 50px;padding-right: 50px;"><img src="<?php echo base_url().'produk/'.$value->pic; ?>" style="object-fit: cover;display: block;width: 268px;height: 300px;" alt="<?php echo $value->pic; ?>"></a>

                    </div>

                    <div class="l_p_text">
                        <ul>
                            <!-- <li det="<?php echo $value->id;?>"><a class="add_cart_btn" href="#">Detail</a></li> -->
                            <li det="<?php echo base_url().'home/detailproduk/'.$value->id; ?>"><a class="add_cart_btn" href="#">Detail</a></li>

                        </ul>
                        <h4><?php echo $value->judul; ?></h4>
                    </div>

                </div>

            </div>
        <?php } ?>

        </div>
    </div>
</section>
<!--================End Our Latest Product Area =================-->
