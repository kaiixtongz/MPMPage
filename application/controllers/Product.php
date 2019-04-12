<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// การเช็ค SESSION การ Login ถ้า Status ไม่ตรงกับ MPMPage จะทำการย้ายไปหน้า Login

		@session_start();
		if(@$_SESSION['Status'] != "MPMPage"){
			echo "<script>alert('กรุณาเข้าสู่ระบบ')</script>";
			echo "<script>document.location='" . SITE_URL('Login') . "'</script>";
		}
	}

	public function LoadPage($Value)
	{

		// การโหลดหน้า View ให้มาแสดง

		$data = $Value['Result'];

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/sidemenu');
		$this->load->view($Value['View']);
		$this->load->view('Templates/footer');
		$this->load->view('ProductInsert',$data);
		$this->load->view('ProductUpdate',$data);


	}

	public function index()
	{

		// การดึงค่ามาเก็บไว้ใน Array เพื่อทำการส่งไปที่อีกฟังก์ชั่น

		$dataProductGroup = $this->ProductGroupModel->ProductGroupSelect($_SESSION['facebookId']);
		$productGroupId = $this->uri->segment(3);

		$dataSelect = array(
			'productGroupId' => $productGroupId ,
			'productConnect' => $_SESSION['facebookId'] ,
		 );

		$dataProduct = $this->ProductModel->ProductSelect($dataSelect);

		$Value = array(
			'View' => "Product",
			'Result' => array(
				'dataProductGroup' => $dataProductGroup,
				'productGroupId' => $productGroupId,
				'dataProduct' => $dataProduct,
			)
		);
		$this->LoadPage($Value);
	}

	public function ProductInsert()
	{
		$dataInsert = $this->input->post();
		$dataInsert['productConnect'] = $_SESSION['facebookId'];

		if (!empty($_FILES['productImage']['name'])) {
			$pathinfo = pathinfo($_FILES['productImage']['name'], PATHINFO_EXTENSION);
			$new_file = date('YmdHis') . "." . $pathinfo;
			move_uploaded_file($_FILES['productImage']['tmp_name'], "uploads/product/" . $new_file);

			$dataInsert['productImage'] = $new_file;

		}else{
			$dataInsert['productImage'] = 'noImage.png';

		}

		$this->ProductModel->ProductInsert($dataInsert);
		echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้วจ้าาาา')</script>";
		echo "<script>document.location=('".SITE_URL('Product/Index/'.$dataInsert['productGroupId'])."')</script>";


		// echo "<pre>";
		// print_r($dataInsert);
		// exit();

	}


	public function ProductUpdate()
	{
		$dataUpdate = $this->input->post();
		$dataUpdate['productConnect'] = $_SESSION['facebookId'];

		if (!empty($_FILES['productImage']['name'])) {
			$pathinfo = pathinfo($_FILES['productImage']['name'], PATHINFO_EXTENSION);
			$new_file = date('YmdHis') . "." . $pathinfo;
			move_uploaded_file($_FILES['productImage']['tmp_name'], "uploads/product/" . $new_file);

			$dataUpdate['productImage'] = $new_file;

		}else{
			$dataUpdate['productImage'] = $dataUpdate['productImageOld'];

	}

	unset($dataUpdate['productImageOld']);

	// echo "<pre>";
	// print_r($dataUpdate);
	// exit();

	$this->ProductModel->ProductUpdate($dataUpdate);

	echo "<script>alert('แก้ไขสินค้าเรียบร้อย')</script>";
	echo "<script>document.location=('".SITE_URL('Product/Index/'.$dataUpdate['productGroupId'])."')</script>";

	}

	public function ProductDelete()
 {

	 $dataDelete['productGroupId'] = $this->uri->segment(3);
	 $dataDelete['productId'] = $this->uri->segment(4);
	 $dataDelete['productConnect'] = $_SESSION['facebookId'];
	 $dataDelete['productStatus'] = 2;

	 $this->ProductModel->ProductDelete($dataDelete);

	 echo "<script>alert('ลบสินค้าเรียบร้อย')</script>";
	 echo "<script>document.location=('".SITE_URL('Product/Index/'.$dataDelete['productGroupId'])."')</script>";


 }


}
