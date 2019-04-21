<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>.:: MPM-Page ::.</title>
  <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
  <meta name="author" content="Pike Web Development - https://www.pikephp.com">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo BASE_URL('assets/Admin/'); ?>assets/images/favicon.ico">

  <!-- Bootstrap CSS -->
  <link href="<?php echo BASE_URL('assets/Admin/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <!-- Font Awesome CSS -->
  <link href="<?php echo BASE_URL('assets/Admin/'); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

  <!-- Custom CSS -->
  <link href="<?php echo BASE_URL('assets/Admin/'); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

  <!-- BEGIN CSS for this page -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
  <!-- END CSS for this page -->

  <!-- Font Prompt -->
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <!-- Font Prompt -->

  <style>

  * {
    font-family: 'Prompt', sans-serif;
  }

  .table > tbody > tr > .no-line {
    border-top: none;
  }
  .table > thead > tr > .no-line {
    border-bottom: none;
  }
  .table > tbody > tr > .thick-line {
    border-top: 2px solid;
  }

  .table > tbody > tr > .fix {
    padding: .2rem;
  }

  .table > tbody > tr > .fix-top {
    padding: .2rem;
    padding-top: 20px

  }

  page {
    background: white;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
    box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
  }
  page[size="A4"] {
    width: 21.2cm;
    height: 29.7cm;
    padding: 20px;
  }
  page[size="A4"][layout="portrait"] {
    width: 29.7cm;
    height: 21cm;
  }
  page[size="A3"] {
    width: 29.7cm;
    height: 42cm;
  }
  page[size="A3"][layout="portrait"] {
    width: 42cm;
    height: 29.7cm;
  }
  page[size="A5"] {
    width: 14.8cm;
    height: 21cm;
  }
  page[size="A5"][layout="portrait"] {
    width: 21cm;
    height: 14.8cm;
  }
  .col-sm-offset-0.col-md-6.col-sm-8 font #id1 {
    border: 1px solid #000000;
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
  }

  </style>

</head>

<body class="adminbody">

  <div id="main">

    <!-- <br><br><br> -->

    <page size="A4" style="color: #000;">

      <!-- <form class='form-group'>
        <button type='button' class='btn btn-lg btn-primary no-print' id="printpagebutton" onclick="printpage()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์เอกสาร</button>
      </form> -->

      <!-- Start content -->
      <div class="content">

        <div class="container-fluid">

          <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

              <!-- <div class="card mb-3"> -->

              <div class="card-body">

                <div class="container">

                  <div class="row">
                    <div class="col-md-12">
                      <div class="invoice-title text-center mb-3">
                        <br>
                        <h2>Invoice #<?php echo substr($dataInvoice[0]['orderNo'] , 3) ?></h2>
                        <!-- <strong>Date:</strong> March 7, 2014 -->
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-6">
                          <h5><strong>ร้านผู้ให้บริการ</strong></h5>
                          <address>
                            <strong>FB : <?php echo $_SESSION['profileFname'] . " " . $_SESSION['profileLname'] ?></strong><br>
                            <strong>Site : <a href="https://mpmmanager.com">https://mpmmanager.com</a></strong><br>
                            <strong>E-mail : <?php echo $_SESSION['profileEmail'] ?></strong><br>
                          </address>
                        </div>
                        <div class="col-md-6 float-right text-right">
                          <h5><strong>รายละเอียดลูกค้า</strong></h5>
                          <address>

                            <strong>
                              สถานะ : <?php if ($dataInvoice[0]['orderStatus'] == 2): ?>
                                <?php echo "รอการชำระเงิน" ?>
                              <?php elseif ($dataInvoice[0]['orderStatus'] == 3): ?>
                                <?php echo "ชำระเงินแล้ว" ?>
                              <?php else: ?>
                                <?php echo "ยกเลิกบิล" ?>
                              <?php endif; ?>
                            </strong><br>

                            <strong>คุณ : <?php echo $dataInvoice[0]['customerName'] ?></strong><br>
                            <strong>ติดต่อ : <?php echo substr($dataInvoice[0]['customerTel'] , 0 , 3) . "-" . substr($dataInvoice[0]['customerTel'] , 3 , 3) . "-" . substr($dataInvoice[0]['customerTel'] , 6 , 4) ?></strong><br>
                            <strong>E-mail : <?php echo $dataInvoice[0]['customerEmail'] ?></strong><br>
                          </address>
                        </div>
                      </div>

                      <!-- <div class="row">
                      <div class="col-md-6">
                      <h5>Payment Method:</h5>
                      <address>
                      Visa ending **** 4242<br>
                      jsmith@email.com
                    </address>
                  </div>
                  <div class="col-md-6 float-right text-right">
                  <h5>Order Date:</h5>
                  <address>
                  March 7, 2014<br><br>
                </address>
              </div>
            </div> -->

          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><strong> </strong></h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-condensed">
                    <thead>
                      <tr>
                        <td class="text-center" width="5%"><strong>จำนวน</strong></td>
                        <td class="text-center"><strong>รายการสินค้า</strong></td>
                        <td class="text-center"><strong>จำนวน</strong></td>
                        <td class="text-right"><strong>ราคาต่อหน่วย</strong></td>
                        <td class="text-right"><strong>จำนวนเงิน</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- foreach ($order->lineItems as $line) or some such thing here -->

                      <?php $i = 1; foreach ($dataInvoice as $item): ?>

                        <tr>
                          <td class="text-center"><strong><?php echo $i; ?></strong></td>
                          <td class="text-left"><strong><?php echo $item['productName'] ?></strong></td>
                          <td class="text-center"><strong><?php echo $item['productValue'] ?></strong></td>
                          <td class="text-right"><strong><?php echo number_format($item['productPrice']) ?></strong></td>
                          <td class="text-right"><strong><?php echo number_format($item['productPrice'] * $item['productValue']) ?></strong></td>
                        </tr>

                        <?php $i++; endforeach; ?>


                        <tr>
                          <td class="thick-line fix-top"></td>
                          <td class="thick-line fix-top"></td>
                          <td class="thick-line fix-top"></td>
                          <td class="thick-line fix-top text-right"><strong>ทั้งหมด</strong></td>
                          <td class="thick-line fix-top text-right"><strong><?php echo number_format($dataInvoice[0]['orderTotal']) ?> บาท</strong></td>
                        </tr>
                        <tr>
                          <td class="no-line fix"></td>
                          <td class="no-line fix"></td>
                          <td class="no-line fix"></td>
                          <td class="no-line fix text-right"><strong style="color:red">ส่วนลด</strong></td>
                          <td class="no-line fix text-right"><strong style="color:red"><?php echo number_format($dataInvoice[0]['orderDiscount']) ?> บาท</strong></td>
                        </tr>
                        <tr>
                          <td class="no-line fix"></td>
                          <td class="no-line fix"></td>
                          <td class="no-line fix"></td>
                          <td class="no-line fix text-right"><strong>ค่าจัดส่ง</strong></td>
                          <td class="no-line fix text-right"><strong><?php echo number_format($dataInvoice[0]['expressPrice']) ?> บาท</strong></td>
                        </tr>
                        <tr>
                          <td class="no-line fix"></td>
                          <td class="no-line fix"></td>
                          <td class="no-line fix"></td>
                          <td class="no-line fix text-right"><strong>ราคาสุทธิ</strong></td>
                          <td class="no-line fix text-right"><strong><?php echo number_format($dataInvoice[0]['orderTotal'] - $dataInvoice[0]['orderDiscount'] + $dataInvoice[0]['expressPrice']) ?> บาท</strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12"> <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5><strong>รูปแบบการจัดส่ง</strong></h5>
                  <address>
                    <table>
                      <tr>
                        <td><img src="<?php echo BASE_URL('uploads/express/' . $dataInvoice[0]['expressImage']); ?>" style="height:70px"></td>
                        <td> &nbsp;&nbsp;&nbsp; </td>
                        <td><strong>
                          <?php echo $dataInvoice[0]['expressName'] ?> <br>
                          รูปแบบการจัดส่ง : <?php echo $dataInvoice[0]['expressDetail'] ?> <br>
                          อัตราค่าบริการ : <?php echo $dataInvoice[0]['expressPrice'] ?> <br>
                        </strong></td>
                      </tr>
                    </table>
                  </address>
                </div>
                <div class="col-md-6">
                  <h5><strong>ที่อยู่ในการจัดส่ง</strong></h5>
                  <address>
                    <strong> คุณ : <?php echo $dataInvoice[0]['customerName'] ?></strong> <br>
                    <strong> ติดต่อ : <?php echo substr($dataInvoice[0]['customerTel'] , 0 , 3) . "-" . substr($dataInvoice[0]['customerTel'] , 3 , 3) . "-" . substr($dataInvoice[0]['customerTel'] , 6 , 4) ?> </strong> <br>
                    <strong> ที่อยู่ : <?php echo $dataInvoice[0]['customerAddress'] ?></strong> <br>
                  </address>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12"> <hr>
              <h5><strong>ช่องทางการชำระเงิน</strong></h5>
              <div class="row">

                <?php foreach ($dataPayment as $dataPayment): ?>
                  <div class="col-md-6">
                    <address>
                      <table>
                        <tr>
                          <td><img src="<?php echo BASE_URL('uploads/payment/' . $dataPayment['paymentImage']); ?>" style="height:70px"></td>
                          <td> &nbsp;&nbsp;&nbsp; </td>
                          <td><strong>
                            <?php echo $dataPayment['paymentDetail'] ?> <br>
                            <?php echo substr($dataPayment['paymentNumber'],0,3) ?>-<?php echo substr($dataPayment['paymentNumber'],3,1) ?>-<?php echo substr($dataPayment['paymentNumber'],4,5) ?>-<?php echo substr($dataPayment['paymentNumber'],9,1) ?> <br>
                            <?php echo $dataPayment['paymentName'] ?> <br>
                          </strong></td>
                        </tr>
                      </table>
                    </address>
                  </div>
                <?php endforeach; ?>

              </div>
            </div>
          </div>

        </div>

      </div><!-- end card body -->

      <!-- </div>  -->
      <!-- end card -->

    </div><!-- end col-->

  </div><!-- end row-->



</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</page>
<!-- END content-page -->

</div>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->

<script>
function printpage() {
  //Get the print button and put it into a variable
  var printButton = document.getElementById("printpagebutton");
  //Set the print button visibility to 'hidden'
  printButton.style.visibility = 'hidden';
  //Print the page content
  window.print();
  printButton.style.visibility = 'visible';
}
</script>

<!-- END Java Script for this page -->

</body>
</html>
