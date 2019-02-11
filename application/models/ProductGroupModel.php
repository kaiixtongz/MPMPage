<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductGroupModel extends CI_Model {

  // function ที่ใช้ในการดึงค่า หมวดหมู่สินค้า จาก Database มาแสดง โดยมีการรับค่าที่ถูกส่งมาจาก Controller $profileId เพื่อเอามาใช้ในการเช็ค
  public function ProductGroupSelect($profileId)
  {
    // การสร้างตัวแปลมารอไว้ เพื่อเก็บค่าที่ค้นหามาได้ $dataShow
    $dataShow = $this->db
    // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupStatus ต้องมีค่าเท่ากับ 1 เท่านั้น
    ->where('productGroupStatus',1)
    // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupConnect ต้องมีค่าตรงกับ $profileId เท่านั้น
    ->where('productGroupConnect',$profileId)
    // การชี้ทาง ว่าเราต้องการค้นหาใน Table ไหน
    ->get('product_group')
    // นำค่าที่ผ่านการค้นหามา บีบอัดให้กลายเป็นรูปแบบ Array เพิ่อนำไปใช้งานต่อ การใช้งานต่อคือการเอาไปเก็บไว้ใน $dataShow
    ->result_array();

    // การส่งค่าที่ได้มาจากการค้นหา กลับไปยัง controller/function ที่เรียกใช้ function นี้
    return $dataShow;

  }

  // function ที่ใช้ในการตรวจสอบหมวดหมู่สินค้า ว่าชื่อซื้อกันหรือไม่ จาก Database โดยมีการรับค่าที่ถูกส่งมาจาก Controller $dataInsert เพื่อเอามาใช้ในการเช็ค
  public function ProductGroupCheckInsert($dataInsert)
  {
    // การสร้างตัวแปลมารอไว้ เพื่อเก็บค่าที่ค้นหามาได้ $checkInsert
    $checkInsert = $this->db
    // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupStatus ต้องมีค่าเท่ากับ 1 เท่านั้น
    ->where('productGroupStatus',1)
    // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupConnect ต้องมีค่าตรงกับ $dataInsert['productGroupConnect'] เท่านั้น
    ->where('productGroupConnect',$dataInsert['productGroupConnect'])
    // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupName ต้องมีค่าตรงกับ $dataInsert['productGroupName'] เท่านั้น
    ->where('productGroupName',$dataInsert['productGroupName'])
    // การชี้ทาง ว่าเราต้องการค้นหาใน Table ไหน
    ->get('product_group')
    // นำค่าที่ผ่านการค้นหามา บีบอัดให้กลายเป็นรูปแบบ Array เพิ่อนำไปใช้งานต่อ การใช้งานต่อคือการเอาไปเก็บไว้ใน $checkInsert
    ->result_array();

    // การส่งค่าที่ได้มาจากการค้นหา กลับไปยัง controller/function ที่เรียกใช้ function นี้
    return $checkInsert;

  }

  // function ที่ใช้ในการเพิ่มหมวดหมู่สินค้าขึ้น Database โดยมีการรับค่าที่ถูกส่งมาจาก Controller $dataInsert เพื่อเอามาใช้ในการเพิ่ม
	 public function ProductGroupInsert($dataInsert)
	 {
     // การนำค่าที่อยู่ใน $dataInsert ทำการส่งขึ้นไปยัง Database ที่ table ชื่อว่า product_group
     $this->db->insert('product_group',$dataInsert);

	 }

   // function ที่ใช้ในการแก้ไขหมวดหมู่สินค้าเพื่อ Update ขึ้น Database โดยมีการรับค่าที่ถูกส่งมาจาก Controller $dataUpdate เพื่อเอามาใช้ในการแก้ไข
   public function ProductGroupUpdate($dataUpdate)
  {
     $this->db
     // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupId ต้องมีค่าเท่ากับ $dataUpdate['productGroupId'] เท่านั้น
     ->where('productGroupId',$dataUpdate['productGroupId'])
     // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupConnect ต้องมีค่าเท่ากับ $dataUpdate['productGroupConnect'] เท่านั้น
     ->where('productGroupConnect',$dataUpdate['productGroupConnect'])
     // จะทำการ Update ข้อมูลบน Table ที่ชื่อ product_group ตามเงือนไข จากด้านบนเท่านั้น
     ->update('product_group',$dataUpdate);

  }

  // function ที่ใช้ในการลบหมวดหมู่สินค้า โดยมีการรับค่าที่ถูกส่งมาจาก Controller $dataDelete เพื่อเอามาใช้ในการลบ
  public function ProductGroupDelete($dataDelete)
 {

   // ** การลบข้อมูลในรูปแบบ Update ทำให้สามารถ กู้ข้อมูลกลับมาได้ ปลอดภัยกว่าการ ลบแบบ ถาวร

    $this->db
    // การทำเงื่อนไขว่า ค่าที่อยู่ใน Field/Column บน Database ที่มีชื่อว่า productGroupId ต้องมีค่าเท่ากับ $dataDelete['productGroupId'] เท่านั้น
    ->where('productGroupId',$dataDelete['productGroupId'])
    // จะทำการ Update ข้อมูลบน Table ที่ชื่อ product_group ตามเงือนไข  โดยจะมีการเปลี่ยน productGroupStatus ให้กลายเป็น 2
    ->update('product_group',$dataDelete);

 }

}
