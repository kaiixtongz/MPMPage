<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductGroupModel extends CI_Model {

  public function ProductGroupSelect($profileId)
  {
    $dataShow = $this->db
    ->where('productGroupStatus',1)
    ->where('productGroupConnect',$profileId)
    ->get('product_group')
    ->result_array();

    // echo "<pre>";
    // print_r($dataShow);
    // exit();

    return $dataShow;

  }

	 public function ProductGroupInsert($dataInsert)
	 {
     $this->db->insert('product_group',$dataInsert);

	 }

}
