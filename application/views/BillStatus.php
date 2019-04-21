<div class="content-page">

  <!-- Start content -->
  <div class="content">

    <div class="container-fluid">

      <div class="row" style="padding:2em">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="card mb-3">
            <div class="card-header">
              <b style="margin-top:2em ; font-size:35px"><i class="fa fa-users"></i> สถานะการชำระเงิน
                <?php if ($BillStatus == "UnPaid"): ?>
                   (รอการชำระเงิน)
                <?php elseif ($BillStatus == "Paid"): ?>
                   (ชำระเงินเรียบร้อย)
                <?php else: ?>
                   (ยกเลิกบิล)
                <?php endif; ?> </b>

              <!-- <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
              data-toggle="modal" data-target="#CutomerInsert">
              <span class="btn-label"><i class="fa fa-plus"></i></span>เพิ่ม
            </a> -->

          </div>

          <div class="card-body">

            <table id="example1" class="table table-responsive-xl table-hover display">
              <thead>
                <tr>
                  <th class="text-center" width="5%">ลำดับ</th>
                  <th class="text-center">เลขที่บิล</th>
                  <th class="text-center">ชื่อลูกค้า</th>
                  <th class="text-center">เบอร์ติดต่อ</th>
                  <!-- <th class="text-center">อีเมลลูกค้า</th> -->
                  <th class="text-center">ยอดชำระ</th>
                  <!-- <?php if ($BillStatus == "Paid"): ?>
                    <th class="text-center">จัดส่ง</th>
                  <?php endif; ?> -->
                  <th class="text-center">พิมพ์</th>
                  <th class="text-center" width="20%">การจัดการ</th>
                </tr>
              </thead>
              <tbody>

                <?php if ($BillStatus == "UnPaid"): ?>
                  <?php $i = 1; foreach ($dataOrder as $dataOrder): ?>

                  <tr>
                    <td class="text-center"> <b> <?php echo $i ?> </b> </td>
                    <td class="text-center"> <b> <?php echo $dataOrder['orderNo'] ?> </b> </td>
                    <td class="text-left"> <b> คุณ <?php echo $dataOrder['customerName'] ?> </b> </td>
                    <td class="text-center"> <b> <?php echo substr($dataOrder['customerTel'],0,3) . "-" . substr($dataOrder['customerTel'],3,3) . "-" . substr($dataOrder['customerTel'],6,4) ?> </b> </td>
                    <!-- <td class="text-left"> <b> <?php echo $dataOrder['customerEmail'] ?> </b> </td> -->
                    <td class="text-right"> <b> <?php echo number_format($dataOrder['orderTotal']) ?> บาท </b> </td>
                    <td class="text-center"><a href="<?php echo SITE_URL('BillStatus/Invoice/' . $dataOrder['orderId']); ?>" class="btn btn-sm" target="_blank"> <i class="fa fa-fw fa-print"></i> </a></td>
                    <td class="text-center">
                      <a href="<?php echo SITE_URL('BillStatus/Paid/' . $dataOrder['orderId']); ?>"
                        class="btn btn-link btn-sm" onClick="javascript: return confirm('ตรวจสอบข้อมูลถูกต้องใช่หรือไม่')"> ชำระเงินแล้ว </a>

                        |

                      <a href="<?php echo SITE_URL('BillStatus/Cancel/' . $dataOrder['orderId']); ?>"
                        class="btn btn-link btn-sm" onClick="javascript: return confirm('ต้องการยกเลิกบิลใช่หรือไม่')"> ยกเลิกบิล </a>
                    </td>
                  </tr>

                  <?php $i++; endforeach; ?>

                <?php elseif ($BillStatus == "Paid"): ?>
                  <?php $i = 1; foreach ($dataOrder as $dataOrder): ?>

                  <tr>
                    <td class="text-center"> <b> <?php echo $i ?> </b> </td>
                    <td class="text-center"> <b> <?php echo $dataOrder['orderNo'] ?> </b> </td>
                    <td class="text-left"> <b> คุณ <?php echo $dataOrder['customerName'] ?> </b> </td>
                    <td class="text-center"> <b> <?php echo substr($dataOrder['customerTel'],0,3) . "-" . substr($dataOrder['customerTel'],3,3) . "-" . substr($dataOrder['customerTel'],6,4) ?> </b> </td>
                    <!-- <td class="text-left"> <b> <?php echo $dataOrder['customerEmail'] ?> </b> </td> -->
                    <td class="text-right"> <b> <?php echo number_format($dataOrder['orderTotal']) ?> บาท </b> </td>
                    <!-- <td class="text-center"><a href="<?php echo SITE_URL('BillStatus/TrackNo'); ?>" class="btn btn-sm" target="_self"> <i class="fa fa-fw fa-truck"></i> </a></td> -->
                    <td class="text-center"><a href="<?php echo SITE_URL('BillStatus/Invoice/' . $dataOrder['orderId']); ?>" class="btn btn-sm" target="_blank"> <i class="fa fa-fw fa-print"></i> </a></td>
                    <td class="text-center">
                      <a href="<?php echo SITE_URL('BillStatus/UnPaid/' . $dataOrder['orderId']); ?>"
                        class="btn btn-link btn-sm" onClick="javascript: return confirm('ตรวจสอบข้อมูลถูกต้องใช่หรือไม่')"> รอการชำระเงิน </a>

                        |

                      <a href="<?php echo SITE_URL('BillStatus/Cancel/' . $dataOrder['orderId']); ?>"
                        class="btn btn-link btn-sm" onClick="javascript: return confirm('ต้องการยกเลิกบิลใช่หรือไม่')"> ยกเลิกบิล </a>
                    </td>
                  </tr>

                  <?php $i++; endforeach; ?>

                <?php elseif ($BillStatus == "Cancel"): ?>
                  <?php $i = 1; foreach ($dataOrder as $dataOrder): ?>

                  <tr>
                    <td class="text-center"> <b> <?php echo $i ?> </b> </td>
                    <td class="text-center"> <b> <?php echo $dataOrder['orderNo'] ?> </b> </td>
                    <td class="text-left"> <b> คุณ <?php echo $dataOrder['customerName'] ?> </b> </td>
                    <td class="text-center"> <b> <?php echo substr($dataOrder['customerTel'],0,3) . "-" . substr($dataOrder['customerTel'],3,3) . "-" . substr($dataOrder['customerTel'],6,4) ?> </b> </td>
                    <!-- <td class="text-left"> <b> <?php echo $dataOrder['customerEmail'] ?> </b> </td> -->
                    <td class="text-right"> <b> <?php echo number_format($dataOrder['orderTotal']) ?> บาท </b> </td>
                    <td class="text-center"><a href="<?php echo SITE_URL('BillStatus/Invoice/' . $dataOrder['orderId']); ?>" class="btn btn-sm" target="_blank"> <i class="fa fa-fw fa-print"></i> </a></td>
                    <td class="text-center">
                      <a href="<?php echo SITE_URL('BillStatus/UnPaid/' . $dataOrder['orderId']); ?>"
                        class="btn btn-link btn-sm" onClick="javascript: return confirm('ตรวจสอบข้อมูลถูกต้องใช่หรือไม่')"> รอการชำระเงิน </a>
                    </td>

                  <?php $i++; endforeach; ?>
                <?php endif; ?>

              </tbody>
            </table>

          </div>
</div><!-- end card-->
</div>

</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</div>
<!-- END content-page -->
