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

    <form id="formprofile" class="row" action="admin/simpanprodukbaru" method="post" enctype="multipart/form-data">

        <div class="col-lg-6 form-group">

            <label>Judul Produk : </label><br>
            <sub style="color:red;">Akan di tampilkan di web</sub>
            <input required class="form-control" type="text" name="judul_produk" placeholder="Judul Produk Anda">

        </div>

         <div class="col-lg-6 form-group">

            <label>Kategori Produk : <sub>contoh: antrian</sub></label><br>
            <sub>tidak ditampilkan di web</sub>
            <input required class="form-control" type="text" name="kategori" placeholder="Kategori Produk">

        </div>

        <div class="col-lg-6 form-group">

            <label>Tampilan Gambar Produk :</label><br>
            <sub style="color:red;">Akan di tampilkan di web</sub>

                <input required class="form-control" type="file" name="gambar" id="imgInp" accept="image/x-png,image/gif,image/jpeg">

            <div style="width: 270px;height: 300px;background: #eaeaea; margin-top: 10px; text-align: center;vertical-align: middle;align-items: center;display: flex;justify-content: center;">
                <img src="#" id="preview" alt="Preview Gambar di list produk" style="display: block;max-width: 230px;max-height: 300px;width: auto;height: auto;">
            </div>

        </div>

        <div class="col-lg-6 form-group">

            <label>Status Show(ingin ditampilkan di web / tidak)</label><br>
            <sub style="color:red;">Pilihan Untuk Akan di Tampilkan atau tidak</sub> <br>
            <input type="radio" name="show" value="yes" checked>Tampilkan
            <input type="radio" name="show" value="no" style="margin-left: 20px;">Tidak

        </div>

        <div class="col-lg-12 form-group">

            <label>Deskripsi Produk</label>
            <textarea id="deskripsi" name="deskripsi"></textarea> 

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