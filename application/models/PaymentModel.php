<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentModel extends CI_Model {

  public function PaymentSelect($facebookId)
  {
    $dataPayment = $this->db
    ->where('paymentConnect',$facebookId)
    ->where('paymentStatus',1)
    ->get('payment')
    ->result_array();

    return $dataPayment;

  }

  public function PaymentInsert($dataInsert)
  {
      $this->db->insert('payment',$dataInsert);
  }

  public function PaymentUpdate($dataUpdate)
  {
    $this->db
    ->where('paymentId',$dataUpdate['paymentId'])
    ->where('paymentConnect',$dataUpdate['paymentConnect'])
    ->update('payment',$dataUpdate);
  }

  public function PaymentDelete($dataDelete)
  {
    $this->db
    ->where('paymentId',$dataDelete['paymentId'])
    ->update('payment',$dataDelete);
  }


}
