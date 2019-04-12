<div class="content-page">

  <!-- Start content -->
  <div class="content">

    <div class="container-fluid">

      <div class="row" style="padding:2em">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="card mb-3">
            <div class="card-header">
              <b style="margin-top:2em ; font-size:35px"><i class="fa fa-users"></i> เปิดบิล </b>

              <!-- <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
              data-toggle="modal" data-target="#CutomerInsert">
              <span class="btn-label"><i class="fa fa-plus"></i></span>เพิ่ม
            </a> -->

          </div>

          <div class="card-body">

            <div class="row" style="margin-left:30px ; margin-top:20px">
              <div class="col-offset-xs-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                <?php if (empty($_SESSION['orderId'])): ?>
                  <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
                  data-toggle="modal" data-target="#CustomerModal">
                  <span class="btn-label"><i class="fa fa-plus"></i></span>เลือกลูกค้า
                  </a>

                  <table style="width:100%">
                    <tr>
                      <td class="text-center"> <b>ชื่อลูกค้า</b> : &nbsp;</td>
                      <td class="text-center"><input autocomplete="off" name="customerName" type="text" class="form-control" disabled></td>
                    </tr>
                    <tr>
                      <td class="text-center"> <b>เบอร์ติดต่อ</b> : &nbsp;</td>
                      <td class="text-center"><input type="tel" name="customerTel" class="form-control" maxlength="10" autocomplete="off" disabled
                        oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                      </tr>
                      <tr>
                        <td class="text-center"> <b>อีเมลลูกค้า</b> : &nbsp;</td>
                        <td class="text-center"><input autocomplete="off" name="customerEmail" type="email" class="form-control" disabled></td>
                      </tr>
                      <tr>
                        <td class="text-center"> <b>ที่อยู่จัดส่ง</b> : &nbsp;</td>
                        <td class="text-center"><textarea rows="4" class="form-control" name="customerAddress" disabled></textarea></td>
                      </tr>
                    </table>
                <?php else: ?>
                    <table style="width:100%">
                      <tr>
                        <td class="text-center"> <b>ชื่อลูกค้า</b> : &nbsp;</td>
                        <td class="text-center"><input autocomplete="off" name="customerName" type="text" class="form-control" value="<?php echo $selectCustomer[0]['customerName'] ?>"></td>
                      </tr>
                      <tr>
                        <td class="text-center"> <b>เบอร์ติดต่อ</b> : &nbsp;</td>
                        <td class="text-center"><input type="tel" name="customerTel" class="form-control" maxlength="10" autocomplete="off"  value="<?php echo $selectCustomer[0]['customerTel'] ?>"
                          oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                        </tr>
                        <tr>
                          <td class="text-center"> <b>อีเมลลูกค้า</b> : &nbsp;</td>
                          <td class="text-center"><input autocomplete="off" name="customerEmail" type="email" class="form-control" value="<?php echo $selectCustomer[0]['customerEmail'] ?>"></td>
                        </tr>
                        <tr>
                          <td class="text-center"> <b>ที่อยู่จัดส่ง</b> : &nbsp;</td>
                          <td class="text-center"><textarea rows="4" class="form-control" name="customerAddress"> <?php echo $selectCustomer[0]['customerAddress'] ?></textarea></td>
                        </tr>
                      </table>
                <?php endif; ?>

              </div>
            </div>

            <br><br><hr><br>

            <!-- <div class="row"  style="margin-left:30px">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <a role="button" href="#" class="btn btn-secondary" style="margin-bottom:1em"
            data-toggle="modal" data-target="#ExpressModal">
            <span class="btn-label"><i class="fa fa-plus"></i></span>เลือกการจัดส่ง
          </a>

          <table style="width:100% ; margin-top:20px">
          <tbody>
          <tr>
          <td class="text-center"> <img src="<?php echo BASE_URL('uploads/express/kerry.png'); ?>" style="width:70px"> </td>
          <td class="text-left">
          <b>Kerry</b><br>
          <b>รูปแบบการจัดส่ง</b> : <b>ปลายทาง</b> <br>
          <b>อัตราค่าบริการ</b> : <b>150 บาท</b> <br>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div> -->


<div class="row"  style="margin-left:30px">
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">

    <?php if (empty($_SESSION['orderId'])): ?>
      <div class="" style="margin-bottom:1em"> <h3> ตระกร้าสินค้า </h3> </div>
      <table style="width:100% ; margin-top:20px">
        <thead>
          <tr>
            <th class="text-center" width="5%"> </th>
            <th class="text-center" width="5%"> ลำดับ </th>
            <th class="text-center" width="15%">รูปสินค้า</th>
            <th class="text-center" width="40%">รายการสินค้า</th>
            <th class="text-center" width="15%">ราคา</th>
            <th class="text-center" width="15%">จำนวน</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td class="text-center"></td>
            <td class="text-center">-</td>
            <td class="text-center">-</td>
            <td class="text-center">-</td>
            <td class="text-center">-</td>
            <td class="text-center">-</td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center"> <b>ส่วนลด</b> </td>
            <td> <input type="tel" name="" value="" class="form-control text-right"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> </td>
          </tr>
        </tbody>
      </table>

    <?php else: ?>

      <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
      data-toggle="modal" data-target="#ProductModal">
      <span class="btn-label"><i class="fa fa-plus"></i></span>เลือกสินค้า
      </a>

      <table style="width:100% ; margin-top:20px">
        <thead>
          <tr>
            <th class="text-center" width="5%"> </th>
            <th class="text-center" width="5%"> ลำดับ </th>
            <th class="text-center" width="15%">รูปสินค้า</th>
            <th class="text-center" width="40%">รายการสินค้า</th>
            <th class="text-center" width="15%">ราคา</th>
            <th class="text-center" width="15%">จำนวน</th>
          </tr>
        </thead>
        <tbody>

          <?php $i = 1; foreach ($selectProduct as $selectProduct): ?>

          <tr>
            <td class="text-center"> <a href="<?php echo SITE_URL('Bill/DeleteProduct/' . $selectProduct['productId']); ?>"> X </a> </td>
            <td class="text-center"> <b> <?php echo $i; ?> </b> </td>
            <td class="text-center"> <img src="<?php echo BASE_URL('uploads/product/' . $selectProduct['productImage']); ?>" style="width:100px ; height:70px"> </td>
            <td class="text-left">
              <b style="margin-left:10px"><?php echo $selectProduct['productName'] ?></b> <br>
              <p style="margin-left:10px ; font-size:12px"> - <?php echo $selectProduct['productDetail'] ?></p>
            </td>
            <td class="text-center"> <b> <?php echo number_format($selectProduct['productPrice']) ?> บาท </b> </td>
            <td class="text-right">
              <input type="tel" name="" value="" class="form-control" required
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
            </td>
          </tr>

          <?php $i++; endforeach; ?>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center"> <b>ส่วนลด</b> </td>
            <td> <input type="tel" name="" value="" class="form-control text-right"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> </td>
          </tr>
        </tbody>
      </table>

    <?php endif; ?>

</div>
</div>



<br><br><hr><br>



<div class="row"  style="margin-left:30px">
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
    <div class="" style="margin-bottom:1em"> <h3> รูปแบบการจัดส่งสินค้า </h3> </div>

    <div class="row">

      <?php $i=1; foreach ($dataExpress as $dataExpress): ?>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
          <table style="width:100% ; margin-top:20px">
            <thead>
              <th width="25%"></th>
              <th width="25%"></th>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <input type="radio" name="expressId" value="<?php echo $dataExpress['expressId'] ?>"
                  <?php if ($i == 1): ?>
                    <?php echo "checked" ?>
                  <?php endif; ?> > &nbsp;&nbsp;&nbsp;
                  <img src="<?php echo BASE_URL('uploads/express/' . $dataExpress['expressImage']); ?>" style="width:70px">
                 </td>
                <td class="text-left">
                  <b><?php echo $dataExpress['expressName'] ?></b><br>
                  <b>รูปแบบการจัดส่ง</b> : <b><?php echo $dataExpress['expressDetail'] ?></b> <br>
                  <b>อัตราค่าบริการ</b> : <b><?php echo $dataExpress['expressPrice'] ?></b> <br>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      <?php $i++; endforeach; ?>

    </div>


  </div>
</div>




<div class="text-right" style="margin-top:50px ; margin-bottom:30px">
  <input type="button" class="btn btn-success btn-block" name="" value="เปิดบิล">
  <a href="<?php echo SITE_URL('Bill/DeleteBill'); ?>" class="btn btn-danger btn-block"
    onClick="javascript: return confirm('ต้องการลบใช่หรือไม่')"> ยกเลิกบิล </a>
</div>





</div>
</div><!-- end card-->
</div>

</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</div>
<!-- END content-page -->
