<div class="modal fade bd-example-modal-l" id="CustomerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="width:1000px">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เลือกลูกค้า</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <center>
          <table id="example1" class="table table-responsive-xl table-hover display">
            <thead>
              <tr>
                <th class="text-center" width="10%">ลำดับ</th>
                <th class="text-center">ชื่อลูกค้า</th>
                <th class="text-center">เบอร์ติดต่อ</th>
                <th class="text-center">อีเมลลูกค้า</th>
                <th class="text-center" width="20%"></th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($dataCustomer as $dataCustomer): ?>

              <tr>
                <td class="text-center"> <b> <?php echo $i; ?> </b> </td>
                <td class="text-left"> <b> <?php echo $dataCustomer['customerName'] ?> </b> </td>
                <td class="text-center"> <b> <?php echo $dataCustomer['customerTel'] ?> </b> </td>
                <td class="text-left"> <b> <?php echo $dataCustomer['customerEmail'] ?> </b> </td>

                <td class="text-center">
                  <a href="<?php echo SITE_URL('Bill/InsertCustomer/' . $dataCustomer['customerId']); ?>" class="btn btn-link btn-sm"> เลือก </a>
                </td>
              </tr>

              <?php $i++; endforeach; ?>


            </tbody>
          </table>
          </center>
        </div>


      </div>
    </div>
  </div>
