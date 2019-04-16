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
                      <td class="text-center"><input autocomplete="off" name="customerName" type="text" class="form-control" disabled value="<?php echo $selectCustomer[0]['customerName'] ?>"></td>
                    </tr>
                    <tr>
                      <td class="text-center"> <b>เบอร์ติดต่อ</b> : &nbsp;</td>
                      <td class="text-center"><input type="tel" name="customerTel" class="form-control" maxlength="10" autocomplete="off" disabled value="<?php echo $selectCustomer[0]['customerTel'] ?>"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"></td>
                      </tr>
                      <tr>
                        <td class="text-center"> <b>อีเมลลูกค้า</b> : &nbsp;</td>
                        <td class="text-center"><input autocomplete="off" name="customerEmail" type="email" class="form-control" disabled value="<?php echo $selectCustomer[0]['customerEmail'] ?>"></td>
                      </tr>
                      <tr>
                        <td class="text-center"> <b>ที่อยู่จัดส่ง</b> : &nbsp;</td>
                        <td class="text-center"><textarea rows="4" class="form-control" name="customerAddress" disabled> <?php echo $selectCustomer[0]['customerAddress'] ?></textarea></td>
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

    <?php if (!empty($_SESSION['orderId'])): ?>

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
          <th class="text-center" width="8%">จำนวน</th>
          <th class="text-center" width="15%"> </th>
          <!-- <th class="text-center" width="5%"> </th> -->
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

            <?php if (empty($selectProduct['productValue'])): ?>
              <?php echo form_open_multipart('Bill/InsertProductValue'); ?>

              <input type="hidden" name="order_productId" value="<?php echo $selectProduct['order_productId'] ?>">
              <td class="text-right">
                <input type="tel" name="productValue" class="form-control text-right" required
                oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
              </td>
              <!-- <td class="text-center">
              <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-fw fa-check"></i></button>
            </td> -->

            <?php echo form_close(); ?>
          <?php else: ?>

            <td class="text-center"> <b> <?php echo $selectProduct['productValue'] ?> </b> </td>
            <td class="text-right"> <b> <?php echo number_format($sum = $selectProduct['productValue'] * $selectProduct['productPrice']); ?> บาท </b> </td>

          <?php endif; ?>

        </tr>

        <?php $i++; @$sumall = ($sumall + $sum); endforeach; ?>

        <tr>
          <td style="padding:20px"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>

        <?php echo form_open_multipart('Bill/InsertOrderDiscount'); ?>

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td class="text-right" colspan="2"> <b>ส่วนลด</b> </td>
          <td> <input type="tel" name="orderDiscount" value="<?php echo $discount = $selectCustomer[0]['orderDiscount'] ?>" class="form-control text-right"
            oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"> </td>
          </tr>

          <?php echo form_close(); ?>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-right" colspan="2"> <b>ราคารวม</b> </td>
            <td class="text-right"> <b> <?php echo number_format(@$total = ($sumall - $discount)); ?> บาท </b> </td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-right" colspan="2"> <b>ภาษีมูลค่าเพิ่ม (7%)</b> </td>
            <td class="text-right"> <b> <?php echo number_format(@$vat = ($total * 7) / 100); ?> บาท </b> </td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-right" colspan="2"> <b>ราคาสุทธิ</b> </td>
            <td class="text-right"> <b> <?php echo number_format(@$totalVat = ($total + $vat)); ?> บาท </b> </td>
          </tr>

        </tbody>
      </table>


    </div>
  </div>



  <br><br><hr><br>


  <?php echo form_open_multipart('Bill/InsertBill'); ?>

  <input type="hidden" name="orderTotal" value="<?php echo $total ?>">

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
      <input type="submit" class="btn btn-success btn-block" value="เปิดบิล">
      <a href="<?php echo SITE_URL('Bill/DeleteBill'); ?>" class="btn btn-danger btn-block"
        onClick="javascript: return confirm('ต้องการลบใช่หรือไม่')"> ยกเลิกบิล </a>
      </div>

      <?php echo form_close(); ?>

    <?php endif; ?>



  </div>
</div><!-- end card-->
</div>

</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</div>
<!-- END content-page -->
