<?php foreach ($dataShow as $dataUpdate): ?>

  <?php echo form_open_multipart('ProductGroup/ProductGroupUpdate')?>

  <div class="modal fade" id="ProductGroupUpdate<?php echo $dataUpdate['productGroupId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เพิ่มหมวดหมู่สินค้า</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <center>
          <table>
          <tr>
            <td class="text-center">ชื่อหมวดหมู่ : &nbsp;</td>
            <td class="text-center">
              <input type="hidden" name="productGroupId" value="<?php echo $dataUpdate['productGroupId'] ?>">
              <input type="text" class="form-control" name="productGroupName" value="<?php echo $dataUpdate['productGroupName'] ?>" autocomplete="off" style="margin-top:20px;" required>
              <input type="hidden" name="productGroupConnect" value="<?php echo $dataUpdate['productGroupConnect'] ?>">
            </td>
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
