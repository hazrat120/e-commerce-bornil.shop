<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>customer</title>
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
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css" />
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
      <?php include_once "../sidebar/sidebar.php"?>
      <!-- sa-app__sidebar / end --><!-- sa-app__content -->
      <div class="sa-app__content">
        <!-- sa-app__toolbar -->
       <?php include_once "../toolbar/toolbar.php"?>
        <!-- sa-app__toolbar / end --><!-- sa-app__body -->
        <div id="top" class="sa-app__body">
          <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
            <div class="container container--max--xl">
              <div class="py-5">
                <div class="row g-4 align-items-center">
                  <div class="col">
                    <nav class="mb-2" aria-label="breadcrumb">
                      <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item">
                          <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                          <a href="app-customers-list.html">Customers</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                          Jessica Moore
                        </li>
                      </ol>
                    </nav>
                    <h1 class="h3 m-0">Jessica Moore</h1>
                  </div>
                  <div class="col-auto d-flex">
                    <a href="#" class="btn btn-secondary me-3">Delete</a
                    ><a href="#" class="btn btn-primary">Edit</a>
                  </div>
                </div>
              </div>
              <div
                class="sa-entity-layout"
                data-sa-container-query='{"920":"sa-entity-layout--size--md"}'
              >
                <div class="sa-entity-layout__body">
                  <div class="sa-entity-layout__sidebar">
                    <div class="card">
                      <div
                        class="card-body d-flex flex-column align-items-center"
                      >
                        <div class="pt-3">
                          <div
                            class="sa-symbol sa-symbol--shape--circle"
                            style="--sa-symbol--size: 6rem"
                          >
                            <img
                              src="../../images/customers/customer-1-96x96.jpg"
                              width="96"
                              height="96"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="text-center mt-4">
                          <div class="fs-exact-16 fw-medium">Jessica Moore</div>
                          <div class="fs-exact-13 text-muted">
                            <div class="mt-1">
                              <a href="#">jessica-moore@example.com</a>
                            </div>
                            <div class="mt-1">+38 (094) 730-24-25</div>
                          </div>
                        </div>
                        <div class="sa-divider my-5"></div>
                        <div class="w-100">
                          <dl class="list-unstyled m-0">
                            <dt class="fs-exact-14 fw-medium">Last Order</dt>
                            <dd class="fs-exact-13 text-muted mb-0 mt-1">
                              7 days ago – <a href="app-order.html">#80294</a>
                            </dd>
                          </dl>
                          <dl class="list-unstyled m-0 mt-4">
                            <dt class="fs-exact-14 fw-medium">
                              Average Order Value
                            </dt>
                            <dd class="fs-exact-13 text-muted mb-0 mt-1">
                              $574.00
                            </dd>
                          </dl>
                          <dl class="list-unstyled m-0 mt-4">
                            <dt class="fs-exact-14 fw-medium">Registered</dt>
                            <dd class="fs-exact-13 text-muted mb-0 mt-1">
                              2 months ago
                            </dd>
                          </dl>
                          <dl class="list-unstyled m-0 mt-4">
                            <dt class="fs-exact-14 fw-medium">
                              Email Marketing
                            </dt>
                            <dd class="fs-exact-13 text-muted mb-0 mt-1">
                              Subscribed
                            </dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="sa-entity-layout__main">
                    <div class="sa-card-area">
                      <textarea
                        class="sa-card-area__area"
                        rows="2"
                        placeholder="Notes about customer"
                      ></textarea>
                      <div class="sa-card-area__card">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-edit"
                        >
                          <path
                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
                          ></path>
                          <path
                            d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <div class="card mt-5">
                      <div
                        class="card-body px-5 py-4 d-flex align-items-center justify-content-between"
                      >
                        <h2 class="mb-0 fs-exact-18 me-4">Orders</h2>
                        <div class="text-muted fs-exact-14 text-end">
                          Total spent $34,980.34 on 7 orders
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="sa-table text-nowrap">
                          <tbody>
                            <tr>
                              <td><a href="app-order.html">#80294</a></td>
                              <td>Today at 6:10 pm</td>
                              <td>Pending</td>
                              <td>4 items</td>
                              <td>$320.00</td>
                            </tr>
                            <tr>
                              <td><a href="app-order.html">#63736</a></td>
                              <td>May 15, 2019</td>
                              <td>Completed</td>
                              <td>7 items</td>
                              <td>$2,574.31</td>
                            </tr>
                            <tr>
                              <td><a href="app-order.html">#63501</a></td>
                              <td>January 7, 2019</td>
                              <td>Completed</td>
                              <td>1 items</td>
                              <td>$34.00</td>
                            </tr>
                            <tr>
                              <td><a href="app-order.html">#40278</a></td>
                              <td>October 19, 2018</td>
                              <td>Completed</td>
                              <td>2 items</td>
                              <td>$704.00</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="sa-divider"></div>
                      <div class="px-5 py-4 text-center">
                        <a href="app-orders-list.html">View all 7 orders</a>
                      </div>
                    </div>
                    <div class="card mt-5">
                      <div
                        class="card-body px-5 py-4 d-flex align-items-center justify-content-between"
                      >
                        <h2 class="mb-0 fs-exact-18 me-4">Addresses</h2>
                        <div class="text-muted fs-exact-14">
                          <a href="#">New address</a>
                        </div>
                      </div>
                      <div class="sa-divider"></div>
                      <div
                        class="px-5 py-3 my-2 d-flex align-items-center justify-content-between"
                      >
                        <div>
                          <div>Jessica Moore</div>
                          <div class="text-muted fs-exact-14 mt-1">
                            Random Federation 115302, Moscow ul. Varshavskaya,
                            15-2-178
                          </div>
                        </div>
                        <div>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="address-context-menu-0"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              aria-label="More"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="3"
                                height="13"
                                fill="currentColor"
                              >
                                <path
                                  d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                                ></path>
                              </svg>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="address-context-menu-0"
                            >
                              <li>
                                <a class="dropdown-item" href="#">Edit</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Duplicate</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Add tag</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Remove tag</a>
                              </li>
                              <li><hr class="dropdown-divider" /></li>
                              <li>
                                <a class="dropdown-item text-danger" href="#"
                                  >Delete</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="sa-divider"></div>
                      <div
                        class="px-5 py-3 my-2 d-flex align-items-center justify-content-between"
                      >
                        <div>
                          <div>Neptune Saturnov</div>
                          <div class="text-muted fs-exact-14 mt-1">
                            Earth 4b4f53, MarsGrad Sun Orbit, 43.3241-85.239
                          </div>
                        </div>
                        <div>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="address-context-menu-1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              aria-label="More"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="3"
                                height="13"
                                fill="currentColor"
                              >
                                <path
                                  d="M1.5,8C0.7,8,0,7.3,0,6.5S0.7,5,1.5,5S3,5.7,3,6.5S2.3,8,1.5,8z M1.5,3C0.7,3,0,2.3,0,1.5S0.7,0,1.5,0 S3,0.7,3,1.5S2.3,3,1.5,3z M1.5,10C2.3,10,3,10.7,3,11.5S2.3,13,1.5,13S0,12.3,0,11.5S0.7,10,1.5,10z"
                                ></path>
                              </svg>
                            </button>
                            <ul
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="address-context-menu-1"
                            >
                              <li>
                                <a class="dropdown-item" href="#">Edit</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Duplicate</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Add tag</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">Remove tag</a>
                              </li>
                              <li><hr class="dropdown-divider" /></li>
                              <li>
                                <a class="dropdown-item text-danger" href="#"
                                  >Delete</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
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
