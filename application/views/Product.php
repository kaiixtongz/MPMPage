<div class="content-page">

  <!-- Start content -->
  <div class="content">

    <div class="container-fluid">

      <div class="row" style="padding:2em">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="card mb-3">
            <div class="card-header">
              <b style="margin-top:2em ; font-size:35px"><i class="fa fa-users"></i> การจัดการสินค้า </b>

              <a role="button" href="#" class="btn btn-success" style="margin-bottom:1em"
              data-toggle="modal" data-target="#ProductInsert">
              <span class="btn-label"><i class="fa fa-plus"></i></span>เพิ่ม
            </a>

          </div>

          <div class="card-body">

            <!-- <div class="card-deck"> -->
              <div class="row">

                <?php foreach ($dataProduct as $dataProduct): ?>
                  <div class="col-3" style="margin-bottom:2em">
                    <div class="card" style="width:250px ; height:300px">
                      <img src="<?php echo BASE_URL('uploads/product/' . $dataProduct['productImage']) ?>" style="height:180px ; padding:3px">
                      <div class="card-body">
                        <div class="text-center"> <b><?php echo $dataProduct['productName'] ?></b> </div>
                        <div class="text-center"> <b> ราคา : <?php echo number_format($dataProduct['productPrice']) ?> บาท</b> </div>
                        <div class="text-center" style="margin-top:5px">

                          <button class="btn btn-link btn-sm"
                          data-toggle="modal"
                          data-target="#ProductUpdate<?php echo $dataProduct['productId']; ?>">แก้ไข</button> |

                          <a href="<?php echo SITE_URL('Product/ProductDelete/'.$dataProduct['productGroupId']."/".$dataProduct['productId']); ?>"
                            class="btn btn-link btn-sm"
                            onClick="javascript: return confirm('ต้องการลบใช่หรือไม่')"> ลบ </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php endforeach; ?>

                </div>
              <!-- </div> -->

            </div>
          </div><!-- end card-->
        </div>

      </div>
      <!-- END container-fluid -->

    </div>
    <!-- END content -->

  </div>
  <!-- END content-page -->
