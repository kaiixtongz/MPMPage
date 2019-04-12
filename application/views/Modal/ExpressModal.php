<div class="modal fade bd-example-modal-l" id="ExpressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เลือกการจัดส่ง</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <center>
          <table id="example2" class="table table-responsive-xl table-hover display">
            <thead>
              <tr>
                <th class="text-center" width="10%"> ลำดับ </th>
                <th class="text-center" width="20%"> รูป </th>
                <th class="text-left">รูปแบบการจัดส่ง</th>
                <th class="text-center" width="20%"></th>
              </tr>
            </thead>
            <tbody>

              <?php $i = 1; foreach ($dataExpress as $dataExpress): ?>

                <tr>
                  <td class="text-center"> <b><?php echo $i; ?></b> </td>
                  <td class="text-center"> <img src="<?php echo BASE_URL('uploads/express/' . $dataExpress['expressImage']) ?>" style="width:70px"> </td>
                  <td class="text-left">
                    <b><?php echo $dataExpress['expressName'] ?></b><br>
                    <b>รูปแบบการจัดส่ง</b> : <b><?php echo $dataExpress['expressDetail'] ?></b> <br>
                    <b>อัตราค่าบริการ</b> : <b><?php echo $dataExpress['expressPrice'] ?></b> <br>
                  </td>
                  <td class="text-center"> <br>
                    <button type="button" class="btn btn-link"> เลือก </button>
                  </td>
                </tr>

              <?php $i++; endforeach; ?>


            </tbody>
          </table>
          </center>


      </div>
    </div>
  </div>
