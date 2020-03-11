<style type="text/css">
	img {
	  border: 1px solid #ddd;
	  border-radius: 4px;
	  padding: 5px;
	  width: 150px;
	}

	img:hover {
	  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
	}
	#loading {
	   width: 100%;
	   height: 100%;
	   display: block;
	   opacity: 0.7;
	   background-color: #fff;
	   z-index: 99;
	   text-align: center;
	   /*padding: 150px;*/
	}

	#loading-image {
	  z-index: 100;
	}
</style>
<form method="post" enctype="multipart/form-data" action='admin/uploadfototoalbum'>

	<div class="lg-12">

		<div class="col-lg-6 form-group">
			<label>Kategori Album<br><sub style="color: red;">Harus Dipilih untuk Upload Foto</sub> : </label>

			<select class="form-control" onchange="kat(this)" name="kategori">

				<?php foreach ($data->result() as $key => $value) { ?>

				<option value="<?php echo $value->kategori ;?>" checked> <?php echo $value->kategori ;?> </option>
					
				<?php } ?>

			</select>
			<hr>	
		</div>
		
		<div class="col-lg-6 form-group">
			<label>Upload Foto</label>
			<input type="file" name="gambar" id="imgInp" class="form-control" accept="image/x-png,image/gif,image/jpeg" required>

			<div style="width: 270px;height: 300px;background: #eaeaea; margin-top: 10px; text-align: center;vertical-align: middle;align-items: center;display: flex;justify-content: center;">
                <img src="#" id="preview" alt="Preview Gambar di list produk" style="display: block;max-width: 230px;max-height: 300px;width: auto;height: auto;">
            </div>

			<hr>
		</div>

		<div class="col-lg-6 form-group">
			<label>Judul Foto</label><br>
			<sub style="color: red;">Ditampilkan Di web</sub>
			<input type="text" name="judul_foto" class="form-control"  required>

			<hr>
		</div>

		<div class="col-lg-6 form-group">
			<button class="btn" type="submit">Upload Foto</button>
		</div>

	</div>

</form>

<hr style="border-top: 8px solid rgba(0,0,0,.1) !important;">

<div class="row" id="gambar" style="margin-top: 5%; border:1px solid black;padding: 5px;">
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

		var id = $("select[name=kategori]").val();
		awalkat(id);
	});

	function awalkat(id){

		$.post('<?php echo base_url('admin/getalbumfoto') ?>', {kategori : id}, function(data, textStatus, xhr) {

			$("#gambar").append("<div id='loading'><br><img id='loading-image' src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");


			var respond = JSON.parse(data);

			$("div#gambar").empty();
			$("div#gambar").html(respond.respond);
		});
	}

	function kat(obj){
		var kat = $(obj).val();
		// console.log($(obj));

		$.post('<?php echo base_url('admin/getalbumfoto') ?>', {kategori : kat}, function(data, textStatus, xhr) {

			$("div#gambar").empty();
			$("#gambar").append("<div id='loading'><br><img id='loading-image' src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");


			var respond = JSON.parse(data);
			
			$("div#gambar").html(respond.respond);
		});

	}

	function hapusfoto(obj,id){

		var cek = confirm("Yakin di Hapus?");

			if(cek == true){
				$.post('<?php echo base_url('admin/hapusfoto') ?>', {id: id}, function(data, textStatus, xhr) {
					var respond = JSON.parse(data);

					if(respond.data == true){
						awalkat(respond.kategori);
					}

				});
			}

	}

	function ubahfoto(obj, id){
		// Tampilin Inputan
		$(obj).parents("div#detail").find("input[type=text][name=nama_foto]").attr('style', 'display:');
		$(obj).parents("div#detail").find("label#detail").hide();

		// Tampilin Tombol Save
		$(obj).parent().find("button:eq(0)").hide();
		$(obj).parent().find("button:eq(1)").attr('style', 'display:');
		
			
	}

	function simpaneditfoto(obj, id){

		var nama = $(obj).parents("div#detail").find("input[type=text][name=nama_foto]").val();

		$.post('<?php echo base_url('admin/simpaneditfoto');?>', {id:id,nama:nama}, function(e) {

			var respond = JSON.parse(e);

			if(respond.respond == true){
				awalkat(respond.data.kategori);
			}
		});
	}

</script>

