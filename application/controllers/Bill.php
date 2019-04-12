<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bill extends CI_Controller {

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
		$this->load->view('Modal/CustomerModal');
		$this->load->view('Modal/ProductModal');
		// $this->load->view('Modal/ExpressModal');

	}

	public function index()
	{

		$dataProductGroup = $this->ProductGroupModel->ProductGroupSelect($_SESSION['facebookId']);
		$dataCustomer = $this->CustomerModel->CustomerSelect($_SESSION['facebookId']);
		$dataExpress = $this->ExpressModel->ExpressSelect($_SESSION['facebookId']);
		$dataProduct = $this->BillModel->ProductSelect($_SESSION['facebookId']);

		$selectCustomer = $this->BillModel->SelectCustomer($_SESSION['facebookId']);
		@$_SESSION['orderId'] = $selectCustomer[0]['orderId'];

		$selectProduct = $this->BillModel->SelectProduct($_SESSION['orderId']);


		 // echo "<pre>";
		 // print_r($selectProduct);
		 // exit();

		$Value = array(
			'View' => "Bill",
			'Result' => array(
				'dataProductGroup' => $dataProductGroup,
				'dataCustomer' => $dataCustomer,
				'dataExpress' => $dataExpress,
				'dataProduct' => $dataProduct,
				'selectCustomer' => $selectCustomer,
				'selectProduct' => $selectProduct,
			)
		);
		$this->LoadPage($Value);
	}

	public function InsertCustomer()
	{

		$customerId = $this->uri->segment(3);
		$dataInsert = array(
			'customerId' => $customerId,
			'orderConnect' => $_SESSION['facebookId'],
		);

		$orderId = $this->BillModel->InsertCustomer($dataInsert);
		// $_SESSION['orderId'] = $orderId;

		// echo "<pre>";
		// print_r($orderId);
		// exit();

		// echo "<script>alert('เลือกลูกค้าสำเร็จ')</script>";
		echo "<script>document.location=('".SITE_URL('Bill')."')</script>";

	}

	public function InsertProduct()
	{

		$productId = $this->uri->segment(3);
		$dataInsert = array(
			'productId' => $productId,
			'orderId' => $_SESSION['orderId'],
		);

		$this->BillModel->InsertProduct($dataInsert);
		// $_SESSION['orderId'] = $orderId;

		// echo "<pre>";
		// print_r($orderId);
		// exit();

		// echo "<script>alert('เลือกสินค้าสำเร็จ')</script>";
		echo "<script>document.location=('".SITE_URL('Bill')."')</script>";

	}

	public function DeleteProduct()
	{

		$productId = $this->uri->segment(3);
		$dataDelete = array(
			'productId' => $productId,
			'orderId' => $_SESSION['orderId'],
		);

		$this->BillModel->DeleteProduct($dataDelete);
		// $_SESSION['orderId'] = $orderId;

		// echo "<pre>";
		// print_r($orderId);
		// exit();

		// echo "<script>alert('ลบสินค้าสำเร็จ')</script>";
		echo "<script>document.location=('".SITE_URL('Bill')."')</script>";

	}

	public function DeleteBill()
	{

		$dataDelete = array(
			'orderConnect' => $_SESSION['facebookId'],
			'orderId' => $_SESSION['orderId'],
		);

		$this->BillModel->DeleteBill($dataDelete);
		unset($_SESSION['orderId']);

		// echo "<pre>";
		// print_r($orderId);
		// exit();

		echo "<script>alert('ยกเลิกบิลสำเร็จ')</script>";
		echo "<script>document.location=('".SITE_URL('Bill')."')</script>";

	}


}
