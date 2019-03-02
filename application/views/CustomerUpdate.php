<?php foreach ($dataCustomer as $dataUpdate): ?>

  <?php echo form_open_multipart('Customer/CustomerUpdate')?>

  <div class="modal fade bd-example-modal-l" id="CustomerUpdate<?php echo $dataUpdate['customerId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เเก้ไขลูกค้า</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <center>
            <table style="width:70%" >

              <input type="hidden" name="customerId" value="<?php echo $dataUpdate['customerId'] ?>">

              <tr>
                <td class="text-center">ชื่อลูกค้า : &nbsp;</td>
                <td class="text-center"><input autocomplete="off" name="customerName" value="<?php echo $dataUpdate['customerName'] ?>" type="text"  class="form-control" required></td>
              </tr>
              <tr>
                <td class="text-center">เบอร์ติดต่อ : &nbsp;</td>
                <td class="text-center"><input type="tel" name="customerTel" value="<?php echo $dataUpdate['customerTel'] ?>" class="form-control" maxlength="10" autocomplete="off"  required
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                </tr>
                <tr>
                  <td class="text-center">อีเมลลูกค้า : &nbsp;</td>
                  <td class="text-center"><input autocomplete="off" name="customerEmail" value="<?php echo $dataUpdate['customerEmail'] ?>" type="email" class="form-control" ></td>
                </tr>
                <tr>
                  <td class="text-center">ที่อยู่จัดส่ง : &nbsp;</td>
                  <td class="text-center"><textarea rows="4" class="form-control" name="customerAddress" required><?php echo $dataUpdate['customerAddress'] ?></textarea></td>
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
