<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>bornil shop</title>
    <!-- icon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
    />
    <!-- css -->
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.ltr.css" />
    <link rel="stylesheet" href="./vendor/highlight.js/styles/github.css" />
    <link rel="stylesheet" href="./vendor/simplebar/simplebar.min.css" />
    <link rel="stylesheet" href="./vendor/quill/quill.snow.css" />
    <link
      rel="stylesheet"
      href="./vendor/air-datepicker/css/datepicker.min.css"
    />
    <link rel="stylesheet" href="./vendor/select2/css/select2.min.css" />
    <link
      rel="stylesheet"
      href="./vendor/datatables/css/dataTables.bootstrap5.min.css"
    />
    <link rel="stylesheet" href="./vendor/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="./vendor/fullcalendar/main.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script
      async=""
      src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-97489509-8");
    </script>
  </head>
  <body>
    <!-- sa-app -->
    <div
      class="sa-app sa-app--desktop-sidebar-shown sa-app--mobile-sidebar-hidden sa-app--toolbar-fixed"
    >
      <!-- sa-app__sidebar -->
      <?php include_once "./components/sidebar/sidebar.php" ?>

      <!-- sa-app__sidebar / end --><!-- sa-app__content -->
      <div class="sa-app__content">
        <!-- sa-app__toolbar -->
        <?php include_once "./components/toolbar/toolbar.php" ?>

        <!-- sa-app__toolbar / end --><!-- sa-app__body -->
        <div id="top" class="sa-app__body px-2 px-lg-4">
          <div class="container pb-6">
            <div class="py-5">
              <div class="row g-4 align-items-center">
                <div class="col"><h1 class="h3 m-0">Dashboard</h1></div>
                <div class="col-auto d-flex">
                  <select class="form-select me-3">
                    <option selected="">7 October, 2021</option></select
                  ><a href="#" class="btn btn-primary">Export</a>
                </div>
              </div>
            </div>
            <div class="row g-4 g-xl-5">
              <!-- total sells report -->
              <?php include_once "./components/dashbord/total_sells/total_sells.php" ?>
              
              <!-- Average order value -->
                <?php include_once "./components/dashbord/average_order/average_order.php" ?>

              <!-- Total orders  -->
               <?php include_once "./components/dashbord/total_orders/total_orders.php" ?>
              
               <!-- Active users  -->
               <?php include_once "./components/dashbord/active_users/active_users.php" ?>

               <!-- Income statistics  -->
               <?php include_once "./components/dashbord/income_statistics/income_statistics.php" ?>

              <!-- Income statistics  -->
               <?php include_once "./components/dashbord/recent_orders/recent_orders.php" ?>

               <!-- Sales by traffic source  -->
               <?php include_once "./components/dashbord/sales_traffic/sales_traffic.php" ?>

              <!-- Recent activity  -->
               <?php include_once "./components/dashbord/recent_activity/recent_activity.php" ?>

              <!-- Recent reviews  -->
               <?php include_once "./components/dashbord/recent_reviews/recent_reviews.php" ?>
            </div>
          </div>
        </div>
        <!-- sa-app__body / end --><!-- sa-app__footer -->
        <div class="sa-app__footer d-block d-md-flex">
          <!-- copyright -->Stroyka Admin — eCommerce Dashboard Template © 2021
          <div class="m-auto"></div>
          <div>
            Powered by HTML — Design by
            <a href="https://themeforest.net/user/kos9/portfolio">Kos</a>
          </div>
          <!-- copyright / end -->
        </div>
        <!-- sa-app__footer / end -->
      </div>
      <!-- sa-app__content / end --><!-- sa-app__toasts -->
      <div class="sa-app__toasts toast-container bottom-0 end-0"></div>
      <!-- sa-app__toasts / end -->
    </div>
    <!-- sa-app / end --><!-- scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/feather-icons/feather.min.js"></script>
    <script src="vendor/simplebar/simplebar.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/highlight.js/highlight.pack.js"></script>
    <script src="vendor/quill/quill.min.js"></script>
    <script src="vendor/air-datepicker/js/datepicker.min.js"></script>
    <script src="vendor/air-datepicker/js/i18n/datepicker.en.js"></script>
    <script src="vendor/select2/js/select2.min.js"></script>
    <script
      src="vendor/fontawesome/js/all.min.js"
      data-auto-replace-svg=""
      async=""
    ></script>
    <script src="vendor/chart.js/chart.min.js"></script>
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/fullcalendar/main.min.js"></script>
    <script src="js/stroyka.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/demo-chart-js.js"></script>
  </body>
</html>
