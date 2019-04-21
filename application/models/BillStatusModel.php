<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillStatusModel extends CI_Model {

  public function OrderSelect($dataSelect)
  {
    $dataOrder = $this->db
    ->where('orderConnect', $dataSelect['orderConnect'])
    ->where('orderStatus', $dataSelect['orderStatus'])
    ->join('customer','customer.customerId = order.customerId')
    ->get('order')
    ->result_array();

    return $dataOrder;

  }

  public function UpdateBillStatus($dataUpdate)
  {
    $this->db
    ->where('orderId', $dataUpdate['orderId'])
    ->where('orderConnect', $dataUpdate['orderConnect'])
    ->update('order',$dataUpdate);

  }

  public function SelectInvoice($dataSelect)
  {
    $dataInvoice = $this->db
    ->where('order.orderId', $dataSelect['orderId'])
    ->where('order.orderConnect', $dataSelect['orderConnect'])
    ->join('customer','customer.customerId = order.customerId')
    ->join('order_product','order_product.orderId = order.orderId')
    ->join('product','product.productId = order_product.productId')
    ->join('express','express.expressId = order.expressId')
    ->get('order')
    ->result_array();

    // echo "<pre>";
    // print_r($_SESSION);
    // exit();

    return $dataInvoice;


  }

  public function SelectPayment()
  {
    $dataPayment = $this->db
    ->where('order.orderId', $dataSelect['orderId'])
    ->where('order.orderConnect', $dataSelect['orderConnect'])
    ->join('customer','customer.customerId = order.customerId')
    ->join('order_product','order_product.orderId = order.orderId')
    ->join('product','product.productId = order_product.productId')
    ->join('express','express.expressId = order.expressId')
    ->get('order')
    ->result_array();

    echo "<pre>";
    // print_r($dataInvoice);
    // exit();

    return $dataPayment;


  }


}
