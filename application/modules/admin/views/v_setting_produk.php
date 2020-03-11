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
    table#produk tbody tr:hover{
        background: #F0EAF3;

    }

</style>


<div class="lg-12">

    <table id="produk">

        <thead>
            <tr>
                <th>No</th>
                <th>Judul Produk</th>
                <th>Kategori Produk</th>
                <th>Pic Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $no = 1;
                foreach ($data->result() as $key => $value) {
            ?>

            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $value->judul; ?></td>
                <td><?php echo $value->kategori; ?></td>
                <td><div style="width: 270px;height: 300px;background: #eaeaea; margin-top: 10px; text-align: center;vertical-align: middle;align-items: center;display: flex;justify-content: center;">
                        <img src="<?php echo base_url().'produk/'.$value->pic; ?>" id="preview" alt="Preview Gambar di list produk" style="display: block;max-width: 230px;max-height: 300px;width: auto;height: auto;">
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-info" onclick="ubahproduk(this,'<?php echo $value->id; ?>')">Edit</button>
                    <button type="button" class="btn btn-danger" onclick="hapusproduk(this,'<?php echo $value->id; ?>')">Delete</button>
                </td>
            </tr>

            <?php  
                $no++;
                }
            ?>
        </tbody>
        
    </table>

</div>

<script type="text/javascript">
    $(document).ready(function() {

        
        $("#produk").DataTable();

    });

    function ubahproduk(obj, id){
        
        var loadhtml = "<?php echo base_url('admin/ubahproduk')?>/"+id;   

        $("#tempel").html("<div class='loadingpage'><br><img src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");

        $("#tempel").load(loadhtml);

    }

    function hapusproduk(obj, id){
        var cek = confirm("Semua Data dan Album Akan terhapus? Apa Anda Yakin")

            if(cek == true){
                $.post('<?php echo base_url('admin/hapusproduk') ?>', {id: id}, function(data, textStatus, xhr) {
                    var respond = JSON.parse(data);

                        console.log(respond);

                        if(respond.respond == true){
                              
                              alert("Data Berhasil di Hapus!!");
                            
                                 $("div#tempel").load("<?php echo base_url('admin/settingproduk'); ?>"); 
                        }
                });
            }

    }

</script>