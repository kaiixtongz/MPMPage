<?php foreach ($dataProduct as $dataUpdate): ?>

  <?php echo form_open_multipart('Product/ProductUpdate')?>

  <div class="modal fade bd-example-modal-l" id="ProductUpdate<?php echo $dataUpdate['productId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เเก้ไขสินค้า</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <center>
            <table style="width:70%">

              <input type="hidden" name="productId" value="<?php echo $dataUpdate['productId'] ?>">
              <input type="hidden" name="productGroupId" value="<?php echo $dataUpdate['productGroupId'] ?>">
              <input type="hidden" name="productImageOld" value="<?php echo $dataUpdate['productImage'] ?>">


              <tr>
                <td class="text-right">ชื่อสินค้า : &nbsp;</td>
                <td class="text-center"><input autocomplete="off" name="productName" type="text" value="<?php echo $dataUpdate['productName'] ?>" class="form-control" required></td>
              </tr>
              <tr>
                <td class="text-right">ราคา : &nbsp;</td>
                <td class="text-center"><input type="tel" name="productPrice"  value="<?php echo $dataUpdate['productPrice'] ?>" class="form-control" maxlength="10" autocomplete="off"  required
                  oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                </tr>
                <tr>
                  <td class="text-right">รายละเอียดสินค้า : &nbsp;</td>
                  <td class="text-center"><textarea rows="4" class="form-control" name="productDetail" ><?php echo $dataUpdate['productDetail'] ?></textarea></td>
                </tr>
                <tr>
                  <td class="text-right">รูปสินค้า : &nbsp;</td>
                  <td class="text-center"><input name="productImage" type="file" class="form-control" ></td>
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
