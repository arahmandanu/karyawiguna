<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loginadmin extends MY_Controller {

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
			
			echo $this->load->view("v_login");

		
	}

	public function login()
	{

		if($_POST['pass'] == $_POST['repass']){
			$cek = $this->db->query("SELECT * FROM sys_user WHERE username='".$_POST['username']."' AND password='".md5($_POST['pass'])."' ");

			if($cek->num_rows() > 0){
				
				$session = $cek->row_array();

				$_SESSION['nama'] = $session['nama'];
				$_SESSION['username'] = $session['username'];
				$_SESSION['level'] = $session['level'];

				// print_r($_SESSION);exit;

				echo "<script> window.location='".base_url()."admin/main'; </script>";	

			}
			else{

				$this->session->set_flashdata('gagal_login' , 'Password atau email Salah');

				redirect('loginadmin');
			}
		}
		else{

			$this->session->set_flashdata('gagal_login' , 'Password dan Re-Password tidak sesuai');

			redirect('loginadmin');
		}

	}

	public function logout(){
		

		$this->session->set_flashdata('sukses' , 'Anda Berhasil Log Out');		

		redirect('loginadmin');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */