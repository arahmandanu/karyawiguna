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
<form method="post" enctype="multipart/form-data" action='admin/uploadvideoalbum'>

	<div class="lg-12">

		<div class="col-lg-6 form-group">
			<label>Kategori Album<br><sub style="color: red;">Harus Dipilih untuk Upload Video</sub></label>

			<select class="form-control" onchange="kat(this)" name="kategori">

				<?php foreach ($data->result() as $key => $value) { ?>

				<option value="<?php echo $value->kategori ;?>" checked> <?php echo $value->kategori ;?> </option>
					
				<?php } ?>

			</select>
			<hr>	
		</div>
		
		<div class="col-lg-6 form-group">
			<label>Upload Video</label><br><sub style="color: red;">Ukuran Maksimal <b>50MB</b><br> tipe file .MP4, .MOV</sub>
			<input type="file" name="video" class="form-control" accept="video/mp4,video/MOV" id="imgInp" required>

			<div style="width: 270px;height: 300px;margin-top: 10px; text-align: center;vertical-align: middle;align-items: center;display: flex;justify-content: center;">
                <video src="" id="preview" style="width: 80%;height: 100%;" controls>
            </div>

			<hr>
		</div>

		<div class="col-lg-6 form-group">
			<label>Judul Video</label><br>
			<sub style="color: red;">Ditampilkan Di web</sub>
			<input type="text" name="judul_video" class="form-control" required>
			<hr>
		</div>

		<div class="col-lg-6 form-group">
			<button class="btn" type="submit">Upload Video</button>
		</div>

	</div>

</form>

<hr style="border-top: 8px solid rgba(0,0,0,.1) !important;">

<div class="row" id="gambar" style="margin-top: 5%;padding: 5px;box-shadow: 2px 2px 2px 2px #b9deff;">
</div>



<script type="text/javascript">
	$(document).ready(function() {

		function readURL(input) {
          	if (input.files && input.files[0]) {

          		if(input.files[0].size > 60000000){

          			alert("Ukuran File Terlalu Besar Bung!");

          			$("#imgInp").val('');
          		}
          		else {

          			var reader = new FileReader();
            
	            		reader.onload = function(e) {	            	
			              	$('#preview').attr('src', e.target.result);
			            }
			         reader.readAsDataURL(input.files[0]);
          		}

          	}
        }

        $("#imgInp").change(function() {
          readURL(this);
        });

    
		var id = $("select[name=kategori]").val();
		awalkat(id);

	});

	function awalkat(id){

		$.post('<?php echo base_url('admin/getalbumvideo') ?>', {kategori : id}, function(data, textStatus, xhr) {

			$("#gambar").html("<div id='loading'><br><img id='loading-image' src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");


			var respond = JSON.parse(data);

			$("div#gambar").empty();
			$("div#gambar").html(respond.respond);
		});
	}

	function kat(obj){
		var kat = $(obj).val();
		// console.log($(obj));

		$.post('<?php echo base_url('admin/getalbumvideo') ?>', {kategori : kat}, function(data, textStatus, xhr) {

			$("div#gambar").empty();
			$("#gambar").append("<div id='loading'><br><img id='loading-image' src='<?php echo site_url("vendors/loading/ajax-loader.gif")?>' /><div style='color:#555;'>Please wait . . .</div></div>");


			var respond = JSON.parse(data);
			
			$("div#gambar").html(respond.respond);
		});

	}

	function ubahvideo(obj, id){
		console.log(id);

	}

	function simpaneditvideo(obj, id){
		console.log(id);

	}

	function hapusvideo(obj, id){

		$.post('<?php echo base_url('admin/hapusvideo') ?>', {id:id}, function(data, textStatus, xhr) {

			var respond = JSON.parse(data);

			if(respond.respond == true){
				alert("Data Berhasil dihapus");
				awalkat(respond.kategori);
			}
			else {
				alert("Data Gagal dihapus");
				awalkat(respond.kategori);
			}

		});

	}

	function ubahvideo(obj, id){

		// Tampilin Inputan
		$(obj).parents("div#detail").find("input[type=text][name=nama_video]").attr('style', 'display:');
		$(obj).parents("div#detail").find("label#detail").hide();

		// Tampilin Tombol Save
		$(obj).parent().find("button:eq(0)").hide();
		$(obj).parent().find("button:eq(1)").attr('style', 'display:');
		

	}

	function simpaneditvideo(obj, id){
		var nama = $(obj).parents("div#detail").find("input[type=text][name=nama_video]").val();

		$.post('<?php echo base_url('admin/simpaneditvideo');?>', {id:id,nama:nama}, function(e) {

			var respond = JSON.parse(e);

			if(respond.respond == true){
				awalkat(respond.data.kategori);
			}
		});

	}
</script>

