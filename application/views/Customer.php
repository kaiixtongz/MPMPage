<div class="content-page">

		<!-- Start content -->
        <div class="content">

			<div class="container-fluid">

							<div class="row" style="padding:2em">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="card mb-3">
											<div class="card-header">
                        <b style="margin-top:2em ; font-size:35px"><i class="fa fa-users"></i> การจัดการลูกค้า </b>

                        <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
                          data-toggle="modal" data-target="#CutomerInsert">
                          <span class="btn-label"><i class="fa fa-plus"></i></span>เพิ่ม
                        </a>

											</div>

											<div class="card-body">

												<table id="example1" class="table table-responsive-xl table-hover display">
													<thead>
														<tr>
															<th class="text-center" width="10%">ลำดับ</th>
															<th class="text-center">ชื่อลูกค้า</th>
                              <th class="text-center">เบอร์ติดต่อ</th>
                              <th class="text-center">อีเมลลูกค้า</th>
															<th class="text-center" width="20%">การจัดการ</th>
														</tr>
													</thead>
													<tbody>

                            <?php $i = 1; foreach ($dataCustomer as $dataCustomer): ?>

														<tr>
															<td class="text-center"> <b> <?php echo $i ?> </b> </td>
															<td> <b> <?php echo $dataCustomer['customerName'] ?> </b> </td>
                              <td> <b> <?php echo $dataCustomer['customerTel'] ?> </b> </td>
                              <td> <b> <?php echo $dataCustomer['customerEmail'] ?> </b> </td>

															<td class="text-center">

                                <button type="button" class="btn btn-link btn-sm"
                                data-toggle="modal"
                                data-target="#CustomerUpdate<?php echo $dataCustomer['customerId']; ?>"> แก้ไข </button>

                                <a href="<?php echo SITE_URL('Customer/CustomerDelete/'.$dataCustomer['customerId']); ?>"
                                  class="btn btn-link btn-sm"
                                  onClick="javascript: return confirm('ต้องการลบใช่หรือไม่')"> ลบ </a>
                              </td>
														</tr>

                            <?php $i++; endforeach; ?>

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
