<div class="content-page">

		<!-- Start content -->
        <div class="content">

			<div class="container-fluid">

							<div class="row" style="padding:2em">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="card mb-3">
											<div class="card-header">
                        <b style="margin-top:2em ; font-size:35px"><i class="fa fa-users"></i> การจัดการหมวดหมู่สินค้า </b>

                        <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
                          data-toggle="modal" data-target="#ProductGroupInsert">
                          <span class="btn-label"><i class="fa fa-plus"></i></span>เพิ่ม
                        </a>

											</div>

											<div class="card-body">

												<table id="example1" class="table table-responsive-xl table-hover display">
													<thead>
														<tr>
															<th class="text-center" width="10%">ลำดับ</th>
															<th class="text-center">ชื่อหมวดหมู่สินค้า</th>
															<th class="text-center" width="30%">การจัดการ</th>
														</tr>
													</thead>
													<tbody>

                            <?php $i = 1; foreach ($dataShow as $dataShow): ?>

														<tr>
															<td class="text-center"> <b> <?php echo $i ?> </b> </td>
															<td> <b> <?php echo $dataShow['productGroupName'] ?> </b> </td>
															<td class="text-center">

                                <button type="button" class="btn btn-warning btn-sm"
                                data-toggle="modal"
                                data-target="#ProductGroupUpdate<?php echo $dataShow['productGroupId']; ?>"> แก้ไข </button>

                                <a href="<?php echo SITE_URL('ProductGroup/ProductGroupDelete/'.$dataShow['productGroupId']); ?>"
                                  class="btn btn-danger btn-sm"
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
