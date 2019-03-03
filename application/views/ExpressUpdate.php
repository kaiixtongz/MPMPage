<?php foreach ($dataExpress as $dataUpdate): ?>

  <?php echo form_open_multipart('Express/ExpressUpdate')?>

  <div class="modal fade bd-example-modal-l" id="ExpressUpdate<?php echo $dataUpdate['expressId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เเก้ไขรายละเอียดการจัดส่ง</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <center>
            <table style="width:70%">
              <input type="hidden" name="expressId" value="<?php echo $dataUpdate['expressId'] ?>">
              <tr>
                <td class="text-center">เลือกผู้ให้บริการ : &nbsp;</td>
                <td class="text-center">
                  <select class="form-control select2" id="example1" name="expressImage">
  									<option value="no-select" selected> -- กรุณาเลือกผู้ให้บริการ -- </option>
                    <option value="thaipost.png">ไปรษณีย์ไทย </option>
                    <option value="kerry.png">Kerry</option>
                    <option value="alpha.png">Alpha</option>
                    <option value="nimexpress.png">Nim Express</option>
                    <option value="grab.png">Grab Express</option>
                    <option value="lineman.png">Lineman </option>
                    <option value="lalamove.png">Lalamove</option>
                    <option value="other.png">อื่นๆ</option>
  								</select>
                </td>
              </tr>
                <tr>
                  <td class="text-center">รูปแบบการจัดส่ง : &nbsp;</td>
                  <td class="text-center"><input autocomplete="off" name="expressName" value="<?php echo $dataUpdate['expressName'] ?>" type="text" class="form-control" required></td>
                </tr>
                <tr>
                  <td class="text-center">ค่าส่งสินค้า : &nbsp;</td>
                  <td class="text-center"><input autocomplete="off" name="expressPrice" value="<?php echo $dataUpdate['expressPrice'] ?>" type="text" class="form-control" required></td>
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
