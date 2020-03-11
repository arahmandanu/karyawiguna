<!--================Contact Area =================-->
<section class="contact_area p_100">
    <div class="container">
        <div class="contact_title">
            <h2><?php echo $data->row()->nama_pt; ?></h2>
            <img src="<?php echo base_url().'profil/'.$data->row()->gambar_profil; ?>">
        </div>

        <div class="row contact_details">

            <div class="col-lg-12 col-md-12">
                <div class="media">
                    <div class="media-body">
                        <?php echo $data->row()->deskripsi; ?>
                    </div>
                </div>
            </div>

        </div>
</section>
<!--================End Contact Area =================-->