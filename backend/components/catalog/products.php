<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>products</title>
    <!-- icon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
    />
    <!-- css -->
    <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.ltr.css" />
    <link rel="stylesheet" href="../../vendor/highlight.js/styles/github.css" />
    <link rel="stylesheet" href="../../vendor/simplebar/simplebar.min.css" />
    <link rel="stylesheet" href="../../vendor/quill/quill.snow.css" />
    <link
      rel="stylesheet"
      href="../../vendor/air-datepicker/css/datepicker.min.css"
    />
    <link rel="stylesheet" href="../../vendor/select2/css/select2.min.css" />
    <link
      rel="stylesheet"
      href="../../vendor/datatables/css/dataTables.bootstrap5.min.css"
    />
    <link rel="stylesheet" href="../../vendor/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="../../vendor/fullcalendar/main.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
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
      <?php include_once "../sidebar/sidebar.php" ?>
      <!-- sa-app__sidebar / end --><!-- sa-app__content -->
      <div class="sa-app__content">
        <!-- sa-app__toolbar -->
        <?php include_once "../toolbar/toolbar.php" ?>
        <!-- sa-app__toolbar / end --><!-- sa-app__body -->
        <div id="top" class="sa-app__body">
          <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container">
              <div class="py-5">
                <div class="row g-4 align-items-center">
                  <div class="col">
                    <nav class="mb-2" aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item">
                          <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                          <a href="app-products-list.html">Products</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                          Edit Product
                        </li>
                      </ol>
                    </nav>
                    <h1 class="h3 m-0">Edit Product</h1>
                  </div>
                  <div class="col-auto d-flex">
                    <a href="#" class="btn btn-secondary me-3">Duplicate</a
                    ><a href="#" class="btn btn-primary">Save</a>
                  </div>
                </div>
              </div>
              <div
                class="sa-entity-layout"
                data-sa-container-query='{"920":"sa-entity-layout--size--md","1100":"sa-entity-layout--size--lg"}'
              >
                <div class="sa-entity-layout__body">
                  <?php include_once "./basicinfo.php" ?>
                  <div class="sa-entity-layout__sidebar">
                    <?php include_once "./visibility.php" ?>

                    <?php include_once "./add_categories.php" ?>

                    <?php include_once "./tags.php" ?>
                  </div>
                </div>
              </div>
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
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/feather-icons/feather.min.js"></script>
    <script src="../../vendor/simplebar/simplebar.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/highlight.js/highlight.pack.js"></script>
    <script src="../../vendor/quill/quill.min.js"></script>
    <script src="../../vendor/air-datepicker/js/datepicker.min.js"></script>
    <script src="../../vendor/air-datepicker/js/i18n/datepicker.en.js"></script>
    <script src="../../vendor/select2/js/select2.min.js"></script>
    <script
      src="../../vendor/fontawesome/js/all.min.js"
      data-auto-replace-svg=""
      async=""
    ></script>
    <script src="../../vendor/chart.js/chart.min.js"></script>
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../vendor/nouislider/nouislider.min.js"></script>
    <script src="../../vendor/fullcalendar/main.min.js"></script>
    <script src="../../js/stroyka.js"></script>
    <script src="../../js/custom.js"></script>
    <script src="../../js/calendar.js"></script>
    <script src="../../js/demo.js"></script>
    <script src="../../js/demo-chart-js.js"></script>
  </body>
</html>
