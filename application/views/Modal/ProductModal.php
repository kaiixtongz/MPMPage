<div class="modal fade bd-example-modal-l" id="ProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="width:1000px">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เลือกสินค้า</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <center>
          <table id="example3" class="table table-responsive-xl table-hover display">
            <thead>
              <tr>
                <th class="text-center" width="10%">ลำดับ</th>
                <th class="text-center">รูปสินค้า</th>
                <th class="text-center">หมวดหมู่สินค้า</th>
                <th class="text-left">ชื่อสินค้า</th>
                <th class="text-right">ราคา</th>
                <th class="text-center" width="20%"></th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($dataProduct as $dataProduct): ?>

              <tr>
                <td class="text-center"> <b> <?php echo $i; ?> </b> </td>
                <td class="text-center"> <img src="<?php echo BASE_URL('uploads/product/' . $dataProduct['productImage']) ?>" style="width:100px ; height:60px"> </td>
                <td class="text-center"> <b> <?php echo $dataProduct['productGroupName'] ?> </b> </td>
                <td class="text-left"> <b> <?php echo $dataProduct['productName'] ?> </b> </td>
                <td class="text-right"> <b> <?php echo number_format($dataProduct['productPrice']) ?> บาท </b> </td>

                <td class="text-center">
                  <a href="<?php echo SITE_URL('Bill/InsertProduct/' . $dataProduct['productId']); ?>" class="btn btn-link btn-sm"> เลือก </a>
                </td>
              </tr>

              <?php $i++; endforeach; ?>


            </tbody>
          </table>
          </center>
        </div>
    </div>
  </div>
