 <!-- TinyMCE -->
<script src="<?php echo base_url('vendors/js/tinymce/tinymce.min.js');?>" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector :'textarea'
    });
</script>

<style type="text/css">
    textarea{
        height: 500px;
    }
</style>


<div class="lg-12">

    <form class="row" id="formprofile" action="admin/simpanprofile" method="post" enctype="multipart/form-data">

        <div class="col-lg-6 form-group">
            <label>Nama PT / CV Anda :</label>
            <input required class="form-control" type="text" name="nama_pt" placeholder="Nama PT / CV" value="<?php echo $data->row()->nama_pt;?>" >
        </div>

        <div class="col-lg-6 form-group">
            <label>Gambar Logo Baru :</label> <sub style="color: red;">Ukuran 120 x 120px </sub>
            <input  class="form-control" id="imgInp" type="file" name="gambar" placeholder="Logo Perusahaan" accept="image/x-png,image/gif,image/jpeg">
        </div>

        <div class="col-lg-6 form-group">
            <label>Gambar Logo Lama (Tampilan Pada Web) :</label>

            <div style="width: 120px;height: 120px;">
                <img src="<?php echo base_url().'profil/'.$data->row()->gambar_profil; ?>" style="width: 120px;height: 120px;">
            </div>

            <label><?php echo $data->row()->gambar_profil; ?></label>

        </div>

        <div class="col-lg-6 form-group">
            <label>Gambar Logo Baru (Tampilan Pada Web) :</label>
            <div style="width: 120px;height: 120px;background: #eaeaea; text-align: center;vertical-align: center;align-items: center;display: flex;justify-content: center;">
                <img src="#" id="preview" alt="View Logo Baru" style="width: 120px;height: 120px;">
            </div>
        </div>

        <div class="col-lg-12 form-group">
            <label>Deskripsi Perusahaan</label>
            <textarea id="deskripsi" name="deskripsi"><?php echo $data->row()->deskripsi; ?></textarea> 
        </div>

        <div class="col-lg-12 form-group text-right">
            <button class="btn" type="submit">Update</button>
        </div>
    </form>

</div>

<script type="text/javascript">
    $(document).ready(function() {

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $('#preview').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#imgInp").change(function() {
          readURL(this);
        });

    });
    
</script>