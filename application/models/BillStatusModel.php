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



}
