<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {

  public function CustomerSelect($facebookId)
  {
    $dataCustomer = $this->db
    ->where('customerConnect',$facebookId)
    ->where('customerStatus',1)
    ->get('customer')
    ->result_array();

    return $dataCustomer;


  }

  public function CustomerInsert($dataInsert)
  {
    $this->db->insert('customer',$dataInsert);
  }


  public function CustomerUpdate($dataUpdate)
  {
    $this->db
    ->where('customerId',$dataUpdate['customerId'])
    ->where('customerConnect',$dataUpdate['customerConnect'])
    ->update('customer',$dataUpdate);

  }

  public function CustomerDelete($dataDelete)
 {
    $this->db
    ->where('customerId',$dataDelete['customerId'])
    ->update('customer',$dataDelete);

 }

}
