<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductGroup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		@session_start();
		if(@$_SESSION['Status'] != "MPMPage"){
			echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
			echo "<script>document.location='" . SITE_URL('Login') . "'</script>";
			}
		}

	 public function LoadPage($Value)
	 {

	 	$data = $Value['Result'];

	 	$this->load->view('Templates/header',$data);
	 	$this->load->view('Templates/sidemenu');
	 	$this->load->view($Value['View']);
		$this->load->view('Templates/footer');
	 	$this->load->view('ProductGroupForm');

	 }

	 public function index()
	 {

		$dataShow = $this->ProductGroupModel->ProductGroupSelect($_SESSION['profileId']);

	 	$Value = array(
	 		'View' => "ProductGroup",
	 		'Result' => array(
	 			'dataShow' => $dataShow,
	 		)
	 	);
	 	$this->LoadPage($Value);
	 }

	 public function ProductGroupInsert()
	 {

		 $dataInsert = $this->input->post();
		 $dataInsert['productGroupConnect'] = $_SESSION['profileId'];

		 // echo "<pre>";
		 // print_r($dataInsert);
		 // exit();

		 $this->ProductGroupModel->ProductGroupInsert($dataInsert);
		 echo "<script>alert('บันทึกหมวดหมู่สินค้าเรียบร้อย')</script>";
     echo "<script>document.location=('".SITE_URL('ProductGroup')."')</script>";

	 }

}
