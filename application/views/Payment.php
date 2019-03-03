<div class="content-page">

		<!-- Start content -->
        <div class="content">

			<div class="container-fluid">

							<div class="row" style="padding:2em">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="card mb-3">
											<div class="card-header">
                        <b style="margin-top:2em ; font-size:35px"><i class="fa fa-users"></i> การจัดการบัญชีธนาคาร </b>

                        <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
                          data-toggle="modal" data-target="#PaymentInsert">
                          <span class="btn-label"><i class="fa fa-plus"></i></span>เพิ่ม
                        </a>

											</div>

											<div class="card-body">

												<table id="example1" class="table table-responsive-xl table-hover display">
													<thead>
														<tr>
															<th class="text-center" width="12%"></th>
															<th class="text-center">รายละเอียดบัญชี</th>
															<th class="text-center" width="20%">การจัดการ</th>
														</tr>
													</thead>
													<tbody>

                            <?php foreach ($dataPayment as $dataPayment): ?>

                              <tr>
                                <td class="text-center"> <img src="<?php echo BASE_URL('uploads/Payment/' . $dataPayment['paymentImage']) ?>" style="width:70px"> </td>
                                <td class="text-left"> <b><?php echo $dataPayment['paymentDetail'] ?></b> <br>
                                   <b><?php echo substr($dataPayment['paymentNumber'],0,3) ?>-<?php echo substr($dataPayment['paymentNumber'],3,1) ?>-<?php echo substr($dataPayment['paymentNumber'],4,5) ?>-<?php echo substr($dataPayment['paymentNumber'],9,1) ?></b> <br>
                                   <b><?php echo $dataPayment['paymentName'] ?></b></td>

                                <td class="text-center">
                                  <br>
                                  <button type="button" class="btn btn-link"
                                  data-toggle="modal"
                                  data-target="#PaymentUpdate<?php echo $dataPayment['paymentId']; ?>"> แก้ไข </button>

                                  <a href="<?php echo SITE_URL('Payment/PaymentDelete/'.$dataPayment['paymentId']); ?>" 
                                    class="btn btn-link"
                                    onClick="javascript: return confirm('ต้องการลบใช่หรือไม่')"> ลบ </a>

                                </td>
                              </tr>

                            <?php endforeach; ?>

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
