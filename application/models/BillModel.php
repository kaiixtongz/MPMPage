<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillModel extends CI_Model {

  public function ProductSelect($facebookId)
  {
    $dataProduct = $this->db
    ->where('productConnect',$facebookId)
    ->where('productStatus',1)
    ->join('product_group','product_group.productGroupId = product.productGroupId')
    ->get('product')
    ->result_array();

    return $dataProduct;

  }

  public function InsertCustomer($dataInsert)
  {

    $this->db->insert('order',$dataInsert);
    $orderId = $this->db->insert_id();

    return $orderId;

  }

  public function SelectCustomer($facebookId)
  {

    $selectCustomer = $this->db
    ->where('orderConnect',$facebookId)
    ->where('orderStatus',1)
    ->join('customer','customer.customerId = order.customerId')
    ->get('order')
    ->result_array();

    return $selectCustomer;

  }

  public function InsertProduct($dataInsert)
  {
    $this->db->insert('order_product',$dataInsert);
  }

  public function InsertProductValue($dataInsert)
  {
    $this->db
    ->where('order_productId',$dataInsert['order_productId'])
    ->where('orderId',$dataInsert['orderId'])
    ->update('order_product',$dataInsert);
  }

  public function InsertOrderDiscount($dataInsert)
  {
    $this->db
    ->where('orderId',$dataInsert['orderId'])
    ->where('orderConnect',$dataInsert['orderConnect'])
    ->update('order',$dataInsert);
  }

  public function SelectProduct($orderId)
  {

    $selectProduct = $this->db
    ->where('orderId',$orderId)
    ->join('product','product.productId = order_product.productId')
    ->get('order_product')
    ->result_array();

    return $selectProduct;

  }

  public function DeleteProduct($dataDelete)
  {
    $this->db
    ->where('orderId', $dataDelete['orderId'])
    ->where('productId', $dataDelete['productId'])
    ->delete('order_product');
  }

  public function DeleteBill($dataDelete)
  {

    $this->db
    ->where('orderId', $dataDelete['orderId'])
    ->where('orderConnect', $dataDelete['orderConnect'])
    ->delete('order');

    $this->db
    ->where('orderId', $dataDelete['orderId'])
    ->delete('order_product');

  }

  public function InsertBill($dataInsert)
  {

    $this->db
    ->where('orderId',$dataInsert['orderId'])
    ->where('orderConnect',$dataInsert['orderConnect'])
    ->update('order',$dataInsert);
    
  }



}
