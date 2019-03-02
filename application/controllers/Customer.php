<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$this->load->view('CustomerInsert');
		$this->load->view('CustomerUpdate');


	}

	public function index()
	{

		$dataProductGroup = $this->ProductGroupModel->ProductGroupSelect($_SESSION['facebookId']);
		$dataCustomer = $this->CustomerModel->CustomerSelect($_SESSION['facebookId']);

		 // echo "<pre>";
		 // print_r($dataCustomer);
		 // exit();

		$Value = array(
			'View' => "Customer",
			'Result' => array(
				'dataProductGroup' => $dataProductGroup,
				'dataCustomer' => $dataCustomer,
			)
		);
		$this->LoadPage($Value);
	}

	public function CutomerInsert()
	{

		$dataInsert = $this->input->post();
		$dataInsert['customerConnect'] = $_SESSION['facebookId'];

		if(trim($dataInsert['customerName']) == "" || trim($dataInsert['customerAddress']) == ""){

			echo "<script>alert('กรุณาตรวจสอบชื่อลูกค้าด้วยจ้าาาา')</script>";
			echo "<script>document.location=('".SITE_URL('Customer')."')</script>";

		}else{

			// echo "<pre>";
			// print_r($dataInsert);
			// exit();

			$this->CustomerModel->CustomerInsert($dataInsert);

			echo "<script>alert('เพิ่มลูกค้าสำเร็จ')</script>";
			echo "<script>document.location=('".SITE_URL('Customer')."')</script>";

		}

	}

	public function CustomerUpdate()
	{

		$dataUpdate = $this->input->post();
		$dataUpdate['customerConnect'] = $_SESSION['facebookId'];

		$this->CustomerModel->CustomerUpdate($dataUpdate);

		echo "<script>alert('เเก้ไขลูกค้าสำเร็จ')</script>";
		echo "<script>document.location=('".SITE_URL('Customer')."')</script>";

		// echo "<pre>";
		// print_r($dataUpdate);
		// exit();

	}


	public function CustomerDelete()
 {

	 // รับค่าจากการส่งในรูปแบบ Get มาเก็บไว้ใน Opject ที่ชื่อว่า $dataDelete โดยมีการนำค่า productGroupId มาเก็บไว้
	 $dataDelete['customerId'] = $this->uri->segment(3);
	 // นำค่า 2 มาใส่ไว้เพื่อ ทำการลบ โดยการเปลี่ยน Status จาก 1 เป็น 2
	 $dataDelete['customerStatus'] = 2;

	 // ทำการติดต่อ Database โดยไปที่หน้า ProductGroupModel/ProductGroupDelete และมีการส่งค่า $dataDelete ไปด้วย
	 $this->CustomerModel->CustomerDelete($dataDelete);

	 // ทำการลบเรียบร้อย มีการแจ้งเตือน มีการย้ายไปหน้า ProductGroup
	 echo "<script>alert('ลบลูกค้าเรียบร้อย')</script>";
	 echo "<script>document.location=('".SITE_URL('Customer')."')</script>";

 }

}
