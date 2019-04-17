<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillStatus extends CI_Controller {

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

	}

	public function index()
	{

		$BillStatus = $this->uri->segment(3);
		$dataProductGroup = $this->ProductGroupModel->ProductGroupSelect($_SESSION['facebookId']);

		if ($BillStatus == "UnPaid") {
			$dataSelect = array(
				'orderStatus' => 2,
				'orderConnect' => $_SESSION['facebookId'],
			);

		}elseif ($BillStatus == "Paid") {
			$dataSelect = array(
				'orderStatus' => 3,
				'orderConnect' => $_SESSION['facebookId'],
			);

		}else{
			$dataSelect = array(
				'orderStatus' => 4,
				'orderConnect' => $_SESSION['facebookId'],
			);

		}

		$dataOrder = $this->BillStatusModel->OrderSelect($dataSelect);

		// echo "<pre>";
		// print_r($Value);
		// exit();

		$Value = array(
			'View' => "BillStatus",
			'Result' => array(
				'dataProductGroup' => $dataProductGroup,
				'dataOrder' => $dataOrder,
				'BillStatus' => $BillStatus,

			)
		);

		$this->LoadPage($Value);

	}


	public function UnPaid()
	{
		$orderId = $this->uri->segment(3);
		$dataUpdate = array(
			'orderId' => $orderId,
			'orderConnect' => $_SESSION['facebookId'],
			'orderStatus' => 2,
		);

		$this->BillStatusModel->UpdateBillStatus($dataUpdate);
		echo "<script>alert('จัดการบิลเรียบร้อย')</script>";
		echo "<script>document.location=('".SITE_URL('BillStatus/Index/UnPaid')."')</script>";

	}

	public function Paid()
	{
		$orderId = $this->uri->segment(3);
		$dataUpdate = array(
			'orderId' => $orderId,
			'orderConnect' => $_SESSION['facebookId'],
			'orderStatus' => 3,
		);

		$this->BillStatusModel->UpdateBillStatus($dataUpdate);
		echo "<script>alert('จัดการบิลเรียบร้อย')</script>";
		echo "<script>document.location=('".SITE_URL('BillStatus/Index/Paid')."')</script>";

	}

	public function Cancel()
	{
		$orderId = $this->uri->segment(3);
		$dataUpdate = array(
			'orderId' => $orderId,
			'orderConnect' => $_SESSION['facebookId'],
			'orderStatus' => 4,
		);

		$this->BillStatusModel->UpdateBillStatus($dataUpdate);
		echo "<script>alert('จัดการบิลเรียบร้อย')</script>";
		echo "<script>document.location=('".SITE_URL('BillStatus/Index/Cancel')."')</script>";

	}



}
