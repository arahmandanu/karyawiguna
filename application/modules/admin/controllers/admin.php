<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() 

	{

		parent::__construct();

		
		
	}

	public function main(){

		echo $this->load->view('v_admin');
	}

	public function settingprofile(){

		$data['data'] = $this->db->query("SELECT * FROM profil");
		echo $this->load->view('v_setting_profile' , $data, true);

	}

	public function simpanprofile(){

		if($_FILES['gambar']['size'] > 0){

			$this->load->helper('file');

			$hapus = $this->db->query("SELECT gambar_profil from profil where id=1");
				$file = base_url().'profil/'.$hapus->row()->gambar_profil;
				// echo $file;
				delete_files($file);


			$nama_gambar = $_FILES['gambar']['name'];
			$file_tmp = $_FILES['gambar']['tmp_name'];
			$link = base_url().'profil/'.$nama_gambar;		

			$insert = $this->db->query("UPDATE profil set deskripsi='".$_POST['deskripsi']."', gambar_profil='".$nama_gambar."', nama_pt='".$_POST['nama_pt']."', link_gambar='".$link."' WHERE id=1 ");

			move_uploaded_file($file_tmp, 'profil/'.$nama_gambar);

		} 
		else {
			
			$insert = $this->db->query("UPDATE profil set deskripsi='".$_POST['deskripsi']."', nama_pt='".$_POST['nama_pt']."' WHERE id=1 ");

		}

		redirect('admin/main');
	}
	
	public function addproduk()
	{

		echo $this->load->view('v_tambah_produk');

	}

	public function simpanprodukbaru(){

		// print_r($_POST);
		// print_r($_FILES);exit;
		
		$day = date("Y-m-d H:i:s");
			$ex = explode(" ", $day);
			$add = str_replace(":", "", $ex[1]);	

		$nama_gambar = $add.$_FILES['gambar']['name'];
		$link = base_url().'produk/'.$nama_gambar;
		$file_tmp = $_FILES['gambar']['tmp_name'];

			$this->db->query("INSERT INTO produk (judul, kategori, pic, link_pic,deskripsi, status, date_created) VALUES ('".$_POST['judul_produk']."','".$_POST['kategori']."','".$nama_gambar."','".$link."', '".$_POST['deskripsi']."', '".$_POST['show']."','".$day."')");

			move_uploaded_file($file_tmp, 'produk/'.$nama_gambar);

		redirect('admin/main');
	}

	public function settingproduk()
	{

		$data['data'] = $this->db->query("SELECT * FROM produk");

		echo $this->load->view('v_setting_produk', $data, true);
	}

	public function albumfoto(){

		$data['data'] = $this->db->query("SELECT kategori FROM produk GROUP BY kategori ");
		echo $this->load->view("v_foto_admin", $data, true);
	}

	public function uploadfototoalbum(){
		// print_r($_POST);
		// print_r($_FILES);
		// exit;
		$day = date("Y-m-d H:i:s");
			$ex = explode(" ", $day);
			$add = str_replace(":", "", $ex[1]);	

		$nama_gambar = $add.$_FILES['gambar']['name'];
		$link = base_url().'album/'.$nama_gambar;
		$file_tmp = $_FILES['gambar']['tmp_name'];

			$this->db->query("INSERT INTO album (judul_foto, kategori, pic, link_pic, date_created) VALUES ('".$_POST['judul_foto']."','".$_POST['kategori']."','".$nama_gambar."','".$link."','".$day."')");

			move_uploaded_file($file_tmp, 'album/'.$nama_gambar);

		redirect('admin/main');
	}

	public function getalbumfoto(){

		$query = $this->db->query("SELECT * FROM album WHERE kategori = '".$_POST['kategori']."'");

		$strHtml = "";

		if($query->num_rows > 0){

			foreach ($query->result() as $key => $value) {

				$strHtml .= "<div class='col-md-3' style='text-align:center;' id='detail'>
								<label id='detail'>".$value->judul_foto."</label>
								<input type='text' class='form-control' name='nama_foto' style='display:none;' value='".$value->judul_foto."'>
								<div style='width:270px;height:300px;background: #eaeaea; margin-top: 10px; text-align: center;vertical-align: middle;align-items: center;display: flex;justify-content: center;'>

									<a target='_blank' href='".base_url().'album/'.$value->pic."'><img src='".base_url().'album/'.$value->pic."' style='display: block;max-width: 230px;max-height: 300px;width: auto;height: auto;'></a>

								</div>

								<div style='text-align:center;margin-top:5px;' id='tombol'>
									<button type='button' class='btn-primary' onclick='ubahfoto(this,".$value->id.")'>Edit</button>

									<button type='button' class='btn-success' style='display:none;' onclick='simpaneditfoto(this,".$value->id.")'>Simpan</button>

									<button type='button' class='btn-danger' onclick='hapusfoto(this,".$value->id.")'>Delete</button>
								</div>

								<hr>

							 </div>";

			}

		}
		else {

			$strHtml .= "<div class='col-md-12'>
							<label style='color: red;margin-left:40%;margin-top: 10%;margin-bottom: 10%;'> Tidak Ada Data Gambar Di Kategori Ini </label>
						 </div>";			
		}
		$data['respond'] = $strHtml;

		echo json_encode($data);
	}

	public function ubahproduk($id)
	{

		$data['data'] = $this->db->query("SELECT * FROM produk WHERE id='".$id."' ");

		echo $this->load->view("v_edit_produk", $data, true);

	}

	public function simpaneditproduk()
	{

		// print_r($_FILES);
		// print_r($_POST); exit;

		if($_FILES['gambar']['size'] > 0){

			$day = date("Y-m-d H:i:s");
			$ex = explode(" ", $day);
			$add = str_replace(":", "", $ex[1]);			

			$nama_gambar = $add.$_FILES['gambar']['name'];
			$link = base_url().'produk/'.$nama_gambar;
			$file_tmp = $_FILES['gambar']['tmp_name'];

			// Hapus Gambar LAMA
			$lama = $this->db->query("SELECT pic FROM produk WHERE id='".$_POST['id_produk']."' ")->row()->pic;
			
			unlink(FCPATH.'produk/'.$lama);
			print_r($_POST);
			print_r($_FILES);

			// Update Data DI Database
			$update = $this->db->query("UPDATE produk SET judul='".$_POST['judul_produk']."',pic='".$nama_gambar."',link_pic='".$link."', kategori='".$_POST['kategori']."',status='".$_POST['show']."',deskripsi= '".$_POST['deskripsi']."' WHERE id='".$_POST['id_produk']."'");

			// Upload Gambar Baru
			move_uploaded_file($file_tmp, 'produk/'.$nama_gambar);

		}
		else{

			$update = $this->db->query("UPDATE produk SET judul='".$_POST['judul_produk']."', kategori='".$_POST['kategori']."',status='".$_POST['show']."',deskripsi= '".$_POST['deskripsi']."' WHERE id='".$_POST['id_produk']."'");

		}
		
		redirect('admin/main');
	}

	public function hapusproduk()
	{

		// ambil kategori
		$kategori = $this->db->query("SELECT kategori FROM produk WHERE id='".$_POST['id']."'")->row()->kategori;

		// Ambil data di albumfoto
		$cek = $this->db->query("SELECT * FROM album WHERE kategori='".$kategori."'");

		// Ambil data di albumvideo
		$vid = $this->db->query("SELECT * FROM albumvideo WHERE kategori='".$kategori."'");

			if($cek->num_rows()>0){

				// Hapus Data di album
				$this->db->query("DELETE FROM album WHERE kategori='".$kategori."'");

				// PROSES HAPUS AlBUM FOTO
				foreach ($cek->result() as $key => $value) {
					// echo $value->link_pic." kategorinya ".$value->kategori."\n";

					unlink(FCPATH.'album/'.$value->pic);
				}

				if ($vid->num_rows()>0) {
					
					// Hapus Data di produk
					$this->db->query("DELETE FROM produk WHERE id='".$_POST['id']."'");

					// Hapus Data di albumvideo
					$this->db->query("DELETE FROM albumvideo WHERE kategori='".$kategori."'");

					// PROSES HAPUS AlBUMVIDEO
					foreach ($vid->result() as $key => $value) {
						// echo $value->link_pic." kategorinya ".$value->kategori."\n";

						unlink(FCPATH.'albumvideo/'.$value->video);
					}

				}
				else{

					// Hapus Data di produk
					$this->db->query("DELETE FROM produk WHERE id='".$_POST['id']."'");
				}
			}
			else{

				if ($vid->num_rows()>0) {
					
					// Hapus Data di produk
					$this->db->query("DELETE FROM produk WHERE id='".$_POST['id']."'");

					// Hapus Data di albumvideo
					$this->db->query("DELETE FROM albumvideo WHERE kategori='".$kategori."'");

					// PROSES HAPUS AlBUMVIDEO
					foreach ($vid->result() as $key => $value) {
						// echo $value->link_pic." kategorinya ".$value->kategori."\n";

						unlink(FCPATH.'albumvideo/'.$value->video);
					}

				}
				else{
					
					// Hapus Data di produk
					$this->db->query("DELETE FROM produk WHERE id='".$_POST['id']."'");
				}

			}

		$data['respond'] = true;

		echo json_encode($data);
		
	}

	public function hapusfoto(){

		$pic = $this->db->query("SELECT pic FROM album WHERE id='".$_POST['id']."' ")->row()->pic;
		$kat = $this->db->query("SELECT kategori FROM album WHERE id='".$_POST['id']."' ")->row()->kategori;

			unlink(FCPATH.'album/'.$pic);
			$this->db->query("DELETE FROM album WHERE id='".$_POST['id']."'");

		$data['data'] = true;
		$data['kategori'] = $kat;

		echo json_encode($data);

	}

	public function simpaneditfoto(){
		$this->db->query("UPDATE album set judul_foto='".$_POST['nama']."' WHERE id='".$_POST['id']."' ");

		$this->db->select('kategori');
		$this->db->where('id', $_POST['id']);
		$kat = $this->db->get('album');

		$data['data'] = $kat->row();
		$data['respond'] = true;

		echo json_encode($data); 
	}

	public function albumvideo(){

		$data['data'] = $this->db->query("SELECT kategori FROM produk GROUP BY kategori ");
		echo $this->load->view("v_video_admin", $data, true);

	}

	public function uploadvideoalbum(){

		// print_r($_FILES);
		// print_r($_POST);	

		$day = date("Y-m-d H:i:s");
			$ex = explode(" ", $day);
			$add = str_replace(":", "", $ex[1]);			

		$nama_gambar = $add.$_FILES['video']['name'];
		$link = base_url().'albumvideo/'.$nama_gambar;
		$file_tmp = $_FILES['video']['tmp_name'];

		$this->db->query("INSERT INTO albumvideo (judul_video, kategori, video, link_video, date_created) VALUES('".$_POST['judul_video']."','".$_POST['kategori']."','".$nama_gambar."','".$link."','".$day."')");

		move_uploaded_file($file_tmp, 'albumvideo/'.$nama_gambar);

		redirect('admin/main');
	}

	public function getalbumvideo(){

		$query = $this->db->query("SELECT * FROM albumvideo WHERE kategori = '".$_POST['kategori']."'");

		$strHtml = "";

		if($query->num_rows > 0){

			foreach ($query->result() as $key => $value) {

				$strHtml .= "<div class='col-md-3' style='text-align:center;' id='detail'>
								<label id='detail' style='margin-bottom:0px;'>".$value->judul_video."</label>
								<input type='text' class='form-control' name='nama_video' style='display:none;' value='".$value->judul_video."'>
								<hr>

								<div style='width:270px;height:300px;background: #eaeaea; margin-top: 10px; text-align: center;vertical-align: middle;align-items: center;display: flex;justify-content: center;'>

									<video src='".base_url('').'albumvideo/'.$value->video."' style='display: block;max-width: 230px;max-height: 300px;width: auto;height: auto;' controls>

								</div>

								<div style='text-align:center;margin-top:5px;' id='tombol'>
									<button type='button' class='btn-primary' onclick='ubahvideo(this,".$value->id.")'>Edit</button>

									<button type='button' class='btn-success' style='display:none;' onclick='simpaneditvideo(this,".$value->id.")'>Simpan</button>

									<button type='button' class='btn-danger' onclick='hapusvideo(this,".$value->id.")'>Delete</button>
								</div>

								<hr>

							 </div>";

			}

		}
		else {

			$strHtml .= "<div class='col-lg-12'>
							<label style='color: red;margin-left:40%;margin-top: 10%;margin-bottom: 10%;'> Tidak Ada Video Di Kategori Ini </label>
						 </div>";			
		}
		$data['respond'] = $strHtml;

		echo json_encode($data);

	}

	public function hapusvideo(){
		$vid = $this->db->query("SELECT video FROM albumvideo WHERE id='".$_POST['id']."' ")->row()->video;
		$kat = $this->db->query("SELECT kategori  FROM albumvideo WHERE id='".$_POST['id']."' ")->row()->kategori;

		if($this->db->query("DELETE FROM albumvideo WHERE id = '".$_POST['id']."' ")){
			$data['respond'] = true;
			unlink(FCPATH.'albumvideo/'.$vid);
			$data['kategori'] = $kat;
		} 
		else {
			$data['respond'] = false;
			$data['kategori'] = $kat;
		}

		echo json_encode($data);
	}

	public function simpaneditvideo(){

		$this->db->query("UPDATE albumvideo set judul_video='".$_POST['nama']."' WHERE id='".$_POST['id']."' ");

		$this->db->select('kategori');
		$this->db->where('id', $_POST['id']);
		$kat = $this->db->get('albumvideo');

		$data['data'] = $kat->row();
		$data['respond'] = true;

		echo json_encode($data); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */