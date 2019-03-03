<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExpressModel extends CI_Model {

  public function ExpressSelect($facebookId)
  {
    $dataExpress = $this->db
    ->where('expressConnect',$facebookId)
    ->where('expressStatus',1)
    ->get('express')
    ->result_array();

    return $dataExpress;

  }

  public function ExpressInsert($dataInsert)
  {
      $this->db->insert('express',$dataInsert);
  }

  public function ExpressUpdate($dataUpdate)
  {
    $this->db
    ->where('expressId',$dataUpdate['expressId'])
    ->where('expressConnect',$dataUpdate['expressConnect'])
    ->update('express',$dataUpdate);
  }

  public function ExpressDelete($dataDelete)
  {
    $this->db
    ->where('expressId',$dataDelete['expressId'])
    ->update('express',$dataDelete);
  }


}
