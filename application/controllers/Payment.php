<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

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
		$this->load->view('PaymentInsert');
		$this->load->view('PaymentUpdate');



	 }

	 public function index()
	 {

		 // การดึงค่ามาเก็บไว้ใน Array เพื่อทำการส่งไปที่อีกฟังก์ชั่น

		$dataProductGroup = $this->ProductGroupModel->ProductGroupSelect($_SESSION['facebookId']);
		$dataPayment = $this->PaymentModel->PaymentSelect($_SESSION['facebookId']);

	 	$Value = array(
	 		'View' => "Payment",
	 		'Result' => array(
	 			'dataProductGroup' => $dataProductGroup,
				'dataPayment' => $dataPayment,

	 		)
	 	);
	 	$this->LoadPage($Value);
	 }

	 public function PaymentInsert()
	{
		$dataInsert = $this->input->post();

		if ($dataInsert['paymentImage'] == "no-select") {
			echo "<script>alert('กรุณาเลือกธนาคารด้วยจ้าาาา')</script>";
			echo "<script>document.location=('".SITE_URL('Payment')."')</script>";

		}else {

			if ($dataInsert['paymentImage'] == "scb.png") {
				$dataInsert['paymentDetail'] = "ธนาคารไทยพาณิชย์";
			} else if($dataInsert['paymentImage'] == "kbank.png"){
					$dataInsert['paymentDetail'] = "ธนาคารกสิกรไทย";
			} else if($dataInsert['paymentImage'] == "bbl.png"){
					$dataInsert['paymentDetail'] = "ธนาคารกรุงเทพ";
			} else if($dataInsert['paymentImage'] == "ktb.png"){
					$dataInsert['paymentDetail'] = "ธนาคารกรุงไทย";
			} else if($dataInsert['paymentImage'] == "krungsri.png"){
					$dataInsert['paymentDetail'] = "ธนาคารกรุงศรีอยุธยา";
			} else if($dataInsert['paymentImage'] == "tmb.png"){
					$dataInsert['paymentDetail'] = "ธนาคารทหารไทย";
			} else if($dataInsert['paymentImage'] == "gsb.png"){
						$dataInsert['paymentDetail'] = "ธนาคารออมสิน";
			} else {
				$dataInsert['paymentDetail'] = "พร้อมเพย์";
			}

			$dataInsert['paymentConnect'] = $_SESSION['facebookId'];

			// echo "<pre>";
			// print_r($dataInsert);
			// exit();

			$this->PaymentModel->PaymentInsert($dataInsert);
			echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้วจ้าาาา')</script>";
			echo "<script>document.location=('".SITE_URL('Payment')."')</script>";

		}

	}

	public function PaymentUpdate()
	{

		$dataUpdate = $this->input->post();
		$dataUpdate['paymentConnect'] = $_SESSION['facebookId'];

		if ($dataUpdate['paymentImage'] == "no-select") {
			echo "<script>alert('กรุณาเลือกธนาคารด้วยจ้าาาา')</script>";
			echo "<script>document.location=('".SITE_URL('Payment')."')</script>";

		}else {

			if ($dataUpdate['paymentImage'] == "scb.png") {
				$dataUpdate['paymentDetail'] = "ธนาคารไทยพาณิชย์";
			} else if($dataUpdate['paymentImage'] == "kbank.png"){
					$dataUpdate['paymentDetail'] = "ธนาคารกสิกรไทย";
			} else if($dataUpdate['paymentImage'] == "bbl.png"){
					$dataUpdate['paymentDetail'] = "ธนาคารกรุงเทพ";
			} else if($dataUpdate['paymentImage'] == "ktb.png"){
					$dataUpdate['paymentDetail'] = "ธนาคารกรุงไทย";
			} else if($dataUpdate['paymentImage'] == "krungsri.png"){
					$dataUpdate['paymentDetail'] = "ธนาคารกรุงศรีอยุธยา";
			} else if($dataUpdate['paymentImage'] == "tmb.png"){
					$dataUpdate['paymentDetail'] = "ธนาคารทหารไทย";
			} else if($dataUpdate['paymentImage'] == "gsb.png"){
				  $dataUpdate['paymentDetail'] = "ธนาคารออมสิน";
			} else {
				  $dataUpdate['paymentDetail'] = "พร้อมเพย์";
			}

			$this->PaymentModel->PaymentUpdate($dataUpdate);
			echo "<script>alert('เเก้ไขบัญชีสำเร็จ')</script>";
			echo "<script>document.location=('".SITE_URL('Payment')."')</script>";

		}

		// echo "<pre>";
		// print_r($dataUpdate);
		// exit();

	}

	public function PaymentDelete()
 {

	 $dataDelete['paymentId'] = $this->uri->segment(3);
	 $dataDelete['paymentStatus'] = 2;

	 $this->PaymentModel->PaymentDelete($dataDelete);


	 echo "<script>alert('ลบบัญชีเรียบร้อย')</script>";
	 echo "<script>document.location=('".SITE_URL('Payment')."')</script>";

 }


}
