<?php foreach ($dataPayment as $dataUpdate): ?>

  <?php echo form_open_multipart('Payment/PaymentUpdate')?>

  <div class="modal fade bd-example-modal-l" id="PaymentUpdate<?php echo $dataUpdate['paymentId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เเก้ไขรายละเอียดบัญชี</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <center>
            <table style="width:70%">
              <tr>
                <input type="hidden" name="paymentId" value="<?php echo $dataUpdate['paymentId'] ?>">
                <td class="text-center">เลือกธนาคาร : &nbsp;</td>
                <td class="text-center">
                  <select class="form-control select2" id="example1" name="paymentImage">
                    <option value="no-select" selected> -- กรุณาเลือกธนาคาร -- </option>
                    <option value="scb.png">ธนาคารไทยพาณิชย์ </option>
                    <option value="kbank.png">ธนาคารกสิกรไทย</option>
                    <option value="bbl.png">ธนาคารกรุงเทพ</option>
                    <option value="ktb.png">ธนาคารกรุงไทย</option>
                    <option value="krungsri.png">ธนาคารกรุงศรีอยุธยา</option>
                    <option value="tmb.png">ธนาคารทหารไทย </option>
                    <option value="gsb.png">ธนาคารออมสิน</option>
                    <option value="promptpay.png">พร้อมเพย์</option>
                    
                  </select>
                </td>
              </tr>
              <tr>
                <td class="text-center">เลขที่บัญชี : &nbsp;</td>
                <td class="text-center"><input type="tel" name="paymentNumber" value="<?php echo $dataUpdate['paymentNumber'] ?>" class="form-control" maxlength="10" autocomplete="off"  required
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                </tr>
                <tr>
                  <td class="text-center">ชื่อบัญชี : &nbsp;</td>
                  <td class="text-center"><input autocomplete="off" name="paymentName" value="<?php echo $dataUpdate['paymentName'] ?>" type="text" class="form-control" required></td>
                </tr>
              </table>
            </center>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          </div>

        </div>
      </div>
    </div>

    <?php echo form_close()?>

  <?php endforeach; ?>
