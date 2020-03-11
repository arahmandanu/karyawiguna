<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends MY_Controller {

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

	public function index()

	{
				$data['data'] = $this->db->query("SELECT * FROM produk WHERE status='yes' ");
				$temp['data'] = $this->db->query("SELECT * FROM profil");

				$temp['content'] = $this->load->view("v_home", $data, true);

			echo $this->load->view("v_user", $temp, true);

		
	}

	public function contact()

	{

		echo $this->load->view("v_contact");
	}

	public function profil()
	{

		$data['data'] = $this->db->query("SELECT * FROM profil");
		echo $this->load->view("v_profil", $data, true);
	}

	public function detailproduk($id){

		$data['data'] = $this->db->query("SELECT * FROM produk WHERE id='".$id."' ");
		
		$data['foto'] = $this->db->query("SELECT * FROM album WHERE kategori='".$data['data']->row()->kategori."'");

		$data['video'] = $this->db->query("SELECT * FROM albumvideo WHERE kategori='".$data['data']->row()->kategori."'");

		// print_r($data);

		echo $this->load->view("v_produk_detail", $data, true);

	}
	
	public function emailus(){
		$day = date("Y-m-d H:i:s");

		$this->db->trans_begin();
			$this->db->query("INSERT INTO email_customer (nama, email, chat, date_created) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."','".$day."')");
		$this->db->trans_complete();


			if($this->db->trans_status === false){
				$this->session->set_flashdata('pesan','gagal');
				$this->db->trans_rollback();
			}
			else {
				$this->session->set_flashdata('pesan','sukses');
			}		

		redirect("home");

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */