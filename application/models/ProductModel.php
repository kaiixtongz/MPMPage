<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {

  public function ProductSelect($dataSelect)
  {
    $dataProduct = $this->db
    ->where('productGroupId',$dataSelect['productGroupId'])
    ->where('productConnect',$dataSelect['productConnect'])
    ->where('productStatus',1)
    ->get('product')
    ->result_array();

    return $dataProduct;

  }

  public function ProductInsert($dataInsert)
  {
      $this->db->insert('product',$dataInsert);
  }

  public function ProductUpdate($dataUpdate)
  {
    $this->db
    ->where('productId',$dataUpdate['productId'])
    ->where('productConnect',$dataUpdate['productConnect'])
    ->update('product',$dataUpdate);
  }

  public function ProductDelete($dataDelete)
  {
    $this->db
    ->where('productId',$dataDelete['productId'])
    ->where('productConnect',$dataDelete['productConnect'])
    ->update('product',$dataDelete);
  }



}
