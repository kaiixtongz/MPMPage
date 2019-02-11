<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductGroup extends CI_Controller {

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
		$this->load->view('ProductGroupInsert');
	 	$this->load->view('ProductGroupUpdate');

	 }

	 public function index()
	 {

		 // การดึงค่ามาเก็บไว้ใน Array เพื่อทำการส่งไปที่อีกฟังก์ชั่น

		$dataShow = $this->ProductGroupModel->ProductGroupSelect($_SESSION['profileId']);

	 	$Value = array(
	 		'View' => "ProductGroup",
	 		'Result' => array(
	 			'dataShow' => $dataShow,
	 		)
	 	);
	 	$this->LoadPage($Value);
	 }

	 // function สำหรับการเพิ่มหมวดหมู่สินค้า
	 public function ProductGroupInsert()
	 {
		 // การรับข้อมูลที่ถูกส่งมาจาก Modal ProductGroupInsert ในรูปแบบ Method Post เพื่อนำมาเก็บในตัวแปล $dataInsert
		 $dataInsert = $this->input->post();
		 // การนำค่า SESSION['profileId'] หรือ FacebookID เก็บลงไปใน $dataInsert เพื่อใช้ในการแยกหมวดหมุ่
		 $dataInsert['productGroupConnect'] = $_SESSION['profileId'];

		 // การเช็คว่าค่าที่ถูกส่งมานั้น เป็นค่าว่าหรือป่าว ** การ trim() คือการตัด Spacebar ออก
		 if(trim($dataInsert['productGroupName']) == ""){
			 //  มีการใส่ค่าว่างมา ! ทำการแจ้งเตือนแล้ว ย้ายหน้าไปยังหน้า ProductGroup
			 echo "<script>alert('กรุณาตรวจสอบชื่อสินค้าด้วยจ้าาาา')</script>";
	     echo "<script>document.location=('".SITE_URL('ProductGroup')."')</script>";

		 }else {
			 // ค่าที่ถูกส่งมา ไม่เป็นค่าว่าง;

			 // นำค่าที่ไม่เป็นค่าว่างไป เช็คที่ ProductGroupModel/ProductGroupCheckInsert ว่ามีค่าว่างหรือไม่
			 $checkInsert = $this->ProductGroupModel->ProductGroupCheckInsert($dataInsert);

			 // นำค่าที่ได้มา $checkInsert มาทำการตรวจสอบว่ามีข้อมูลหรือไม่ ถ้ามี ไม่สามารถเพิ่มได้ เนื่องจากมีข้อมูลแล้ว
			 if(empty($checkInsert)){
				 // echo "เพิ่มหมวดหมู่สินค้าได้ เนื่องจากสินค้าที่มีอยู่ไม่ซ้ำ";

				 // ทำการติดต่อ Database โดยไปที่หน้า ProductGroupModel/ProductGroupInsert พร้อมแนบค่าไปด้วย $dataInsert
				 $this->ProductGroupModel->ProductGroupInsert($dataInsert);

				 // ทำการบันทึกเรียบร้อย มีการแจ้งเตือน แล้วย้ายไปหน้า ProductGroup
				 echo "<script>alert('บันทึกหมวดหมู่สินค้าเรียบร้อย')</script>";
				 echo "<script>document.location=('".SITE_URL('ProductGroup')."')</script>";
			 }else{
				 // echo "เพิ่มหมวดหมู่สินค้าไม่ได้ เนื่องจากสินค้าที่มีอยู่ซ้ำ";

				 // การแจ้งเตือน แล้วย้ายไปหน้า ProductGroup
				 echo "<script>alert('ชื่อหมวดหมู่สินค้า ซ้ำกัน')</script>";
				 echo "<script>document.location=('".SITE_URL('ProductGroup')."')</script>";
			 }

		 }

	 }

	 // function สำหรับการแก้ไขหมวดหมู่สินค้า
	 public function ProductGroupUpdate()
	 {
		 // การรับข้อมูลที่ถูกส่งมาจาก Modal ProductGroupUpdate ในรูปแบบ Method Post เพื่อนำมาเก็บในตัวแปล $dataUpdate
		 $dataUpdate = $this->input->post();

		 // นำค่าที่ได้ทำการส่งไปติดต่อ Database โดยไปหน้า ProductGroupModel/ProductGroupUpdate โดยทำการส่งค่า $dataUpdate ไปด้วย
		 $this->ProductGroupModel->ProductGroupUpdate($dataUpdate);

		 // แก้ไขสินค้าเรียบร้อย มีการแจ้งเตือน และมีการย้ายหน้า ไป ProductGroup
		 echo "<script>alert('แก้ไขหมวดหมู่สินค้าเรียบร้อย')</script>";
     echo "<script>document.location=('".SITE_URL('ProductGroup')."')</script>";

	 }

	 // function สำหรับการลบหมวดหมู่สินค้า
	 public function ProductGroupDelete()
	{

		// รับค่าจากการส่งในรูปแบบ Get มาเก็บไว้ใน Opject ที่ชื่อว่า $dataDelete โดยมีการนำค่า productGroupId มาเก็บไว้
		$dataDelete['productGroupId'] = $this->uri->segment(3);
		// นำค่า 2 มาใส่ไว้เพื่อ ทำการลบ โดยการเปลี่ยน Status จาก 1 เป็น 2
		$dataDelete['productGroupStatus'] = 2;

		// ทำการติดต่อ Database โดยไปที่หน้า ProductGroupModel/ProductGroupDelete และมีการส่งค่า $dataDelete ไปด้วย
		$this->ProductGroupModel->ProductGroupDelete($dataDelete);

		// ทำการลบเรียบร้อย มีการแจ้งเตือน มีการย้ายไปหน้า ProductGroup
		echo "<script>alert('ลบหมวดหมู่สินค้าเรียบร้อย')</script>";
		echo "<script>document.location=('".SITE_URL('ProductGroup')."')</script>";

	}

}
