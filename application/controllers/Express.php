<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Express extends CI_Controller {

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
		$this->load->view('ExpressInsert');
		$this->load->view('ExpressUpdate');

	}

	public function index()
	{

		$dataProductGroup = $this->ProductGroupModel->ProductGroupSelect($_SESSION['facebookId']);
		$dataExpress = $this->ExpressModel->ExpressSelect($_SESSION['facebookId']);

		 // echo "<pre>";
		 // print_r($dataExpress);
		 // exit();

		$Value = array(
			'View' => "Express",
			'Result' => array(
				'dataProductGroup' => $dataProductGroup,
				'dataExpress' => $dataExpress,
			)
		);
		$this->LoadPage($Value);

	}

	public function ExpressInsert()
 {
	 $dataInsert = $this->input->post();

	 if ($dataInsert['expressImage'] == "no-select") {
		 echo "<script>alert('กรุณาเลือกผู้ให้บริการด้วยจ้าาาา')</script>";
		 echo "<script>document.location=('".SITE_URL('Express')."')</script>";

	 }else {

		 if ($dataInsert['expressImage'] == "thaipost.png") {
			 $dataInsert['expressDetail'] = "ไปรษณีย์ไทย";
		 } else if($dataInsert['expressImage'] == "kerry.png"){
				 $dataInsert['expressDetail'] = "Kerry";
		 } else if($dataInsert['expressImage'] == "alpha.png"){
				 $dataInsert['expressDetail'] = "Alpha";
		 } else if($dataInsert['expressImage'] == "nimexpress.png"){
				 $dataInsert['expressDetail'] = "Nim Express";
		 } else if($dataInsert['expressImage'] == "grab.png"){
				 $dataInsert['expressDetail'] = "Grab Express";
		 } else if($dataInsert['expressImage'] == "lineman.png"){
				 $dataInsert['expressDetail'] = "Lineman";
		 } else if($dataInsert['expressImage'] == "lalamove.png"){
					 $dataInsert['expressDetail'] = "Lalamove";
		 } else {
			 $dataInsert['expressDetail'] = "อื่น ๆ";
		 }

		 $dataInsert['expressConnect'] = $_SESSION['facebookId'];

		 // echo "<pre>";
		 // print_r($dataInsert);
		 // exit();

		 $this->ExpressModel->ExpressInsert($dataInsert);
		 echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้วจ้าาาา')</script>";
		 echo "<script>document.location=('".SITE_URL('Express')."')</script>";

	 }

 }

 public function ExpressUpdate()
 {

	 $dataUpdate = $this->input->post();
	 $dataUpdate['expressConnect'] = $_SESSION['facebookId'];

	 if ($dataUpdate['expressImage'] == "no-select") {
		 echo "<script>alert('กรุณาเลือกผู้ให้บริการด้วยจ้าาาา')</script>";
		 echo "<script>document.location=('".SITE_URL('Express')."')</script>";

	 }else {

		 if ($dataUpdate['expressImage'] == "thaipost.png") {
			 $dataUpdate['expressDetail'] = "ไปรษณีย์ไทย";
		 } else if($dataUpdate['expressImage'] == "kerry.png"){
				 $dataUpdate['expressDetail'] = "Kerry";
		 } else if($dataUpdate['expressImage'] == "alpha.png"){
				 $dataUpdate['expressDetail'] = "Alpha";
		 } else if($dataUpdate['expressImage'] == "nimexpress.png"){
				 $dataUpdate['expressDetail'] = "Nim Express";
		 } else if($dataUpdate['expressImage'] == "grab.png"){
				 $dataUpdate['expressDetail'] = "Grab Express";
		 } else if($dataUpdate['expressImage'] == "lineman.png"){
				 $dataUpdate['expressDetail'] = "Lineman";
		 } else if($dataUpdate['expressImage'] == "lalamove.png"){
					 $dataUpdate['expressDetail'] = "Lalamove";
		 } else {
			 $dataUpdate['expressDetail'] = "อื่น ๆ";
		 }

		 $this->ExpressModel->ExpressUpdate($dataUpdate);
		 echo "<script>alert('เเก้ไขการจัดส่งสำเร็จ')</script>";
		 echo "<script>document.location=('".SITE_URL('Express')."')</script>";

	 }

	 // echo "<pre>";
	 // print_r($dataUpdate);
	 // exit();

 }


 public function ExpressDelete()
 {

	$dataDelete['expressId'] = $this->uri->segment(3);
	$dataDelete['expressStatus'] = 2;

	$this->ExpressModel->ExpressDelete($dataDelete);


	echo "<script>alert('ลบการจัดส่งเรียบร้อย')</script>";
	echo "<script>document.location=('".SITE_URL('Express')."')</script>";

 }

}
