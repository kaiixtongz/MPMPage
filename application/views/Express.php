<div class="content-page">

		<!-- Start content -->
        <div class="content">

			<div class="container-fluid">

							<div class="row" style="padding:2em">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="card mb-3">
											<div class="card-header">
                        <b style="margin-top:2em ; font-size:35px"><i class="fa fa-users"></i> การจัดส่งรูปแบบอื่นๆ </b>

                        <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
                          data-toggle="modal" data-target="#ExpressInsert">
                          <span class="btn-label"><i class="fa fa-plus"></i></span>เพิ่ม
                        </a>

											</div>

											<div class="card-body">

												<table id="example1" class="table table-responsive-xl table-hover display">
													<thead>
														<tr>
                              <th class="text-center" width="12%"></th>
															<th class="text-center">รูปแบบการจัดส่ง</th>
															<th class="text-center" width="20%">การจัดการ</th>
														</tr>
													</thead>
													<tbody>

                            <?php foreach ($dataExpress as $dataExpress): ?>

                              <tr>
                                <td class="text-center"> <img src="<?php echo BASE_URL('uploads/express/' . $dataExpress['expressImage']) ?>" style="width:70px"> </td>

                                <td class="text-left">
                                  <b><?php echo $dataExpress['expressName'] ?></b><br>
                                  <b>รูปแบบการจัดส่ง</b> : <b><?php echo $dataExpress['expressDetail'] ?></b> <br>
                                  <b>อัตราค่าบริการ</b> : <b><?php echo $dataExpress['expressPrice'] ?></b> <br>
                                  <!-- <b><?php echo $dataExpress['expressPrice'] ?> บาท</b> -->
                                </td>

                                <td class="text-center"> <br>
                                  <button type="button" class="btn btn-link"
                                  data-toggle="modal"
                                  data-target="#ExpressUpdate<?php echo $dataExpress['expressId']; ?>"> แก้ไข </button>

                                  <a href="<?php echo SITE_URL('Express/ExpressDelete/'.$dataExpress['expressId']); ?>"
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
