<footer class="footer" style="margin-left:10px">
  <span class="text-right">
  Copyright <a target="_blank" href="#">Your Website</a>
  </span>
  <span class="float-right">
  Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
  </span>
</footer>

</div>
<!-- END main -->

<!-- Script Facebook -->

<script>
// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
 console.log('statusChangeCallback');
 // console.log(response);

 if (response.status === 'connected') {
  // Logged into your app and Facebook.
  // testAPI();
 } else {
      // Login fail
 }
}

function checkLoginState() {
 FB.getLoginStatus(function(response) {
  statusChangeCallback(response);
 });
}

window.fbAsyncInit = function() {
 FB.init({
  appId      : '315323075759316',
  cookie     : true,  // enable cookies to allow the server to access
  // the session
  xfbml      : true,  // parse social plugins on this page
  version    : 'v3.2' // The Graph API version to use for the call
 });

 FB.getLoginStatus(function(response) {
  statusChangeCallback(response);
 });

};

// Load the SDK asynchronously
(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) return;
 js = d.createElement(s); js.id = id;
 js.src = "https://connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function logout(){
 FB.logout(function(response) {
  // user is now logged out
  // console.log(response);
  window.location = '<?php echo SITE_URL('Login/logout'); ?>';

 });
}

</script>

<!-- Script Facebook -->


<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/modernizr.min.js"></script>
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/moment.min.js"></script>

<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/popper.min.js"></script>
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/detect.js"></script>
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/fastclick.js"></script>
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<!-- Counter-Up-->
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo BASE_URL('assets/Admin/'); ?>assets/plugins/counterup/jquery.counterup.min.js"></script>

<script>
  $(document).ready(function() {
    // data-tables
    $('#example1').DataTable();
    $('#example2').DataTable();
    $('#example3').DataTable();
    // counter-up
    $('.counter').counterUp({
      delay: 10,
      time: 600
    });
  } );
</script>

<script>
var ctx1 = document.getElementById("lineChart").getContext('2d');
var lineChart = new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: 'Dataset 1',
        backgroundColor: '#3EB9DC',
        data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
      }, {
        label: 'Dataset 2',
        backgroundColor: '#EBEFF3',
        data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
      }]

  },
  options: {
          tooltips: {
            mode: 'index',
            intersect: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              stacked: true,
            }],
            yAxes: [{
              stacked: true
            }]
          }
        }
});


var ctx2 = document.getElementById("pieChart").getContext('2d');
var pieChart = new Chart(ctx2, {
  type: 'pie',
  data: {
      datasets: [{
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        label: 'Dataset 1'
      }],
      labels: [
        "Red",
        "Orange",
        "Yellow",
        "Green",
        "Blue"
      ]
    },
    options: {
      responsive: true
    }

});


var ctx3 = document.getElementById("doughnutChart").getContext('2d');
var doughnutChart = new Chart(ctx3, {
  type: 'doughnut',
  data: {
      datasets: [{
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        label: 'Dataset 1'
      }],
      labels: [
        "Red",
        "Orange",
        "Yellow",
        "Green",
        "Blue"
      ]
    },
    options: {
      responsive: true
    }

});
</script>
<!-- END Java Script for this page -->

</body>
</html>
