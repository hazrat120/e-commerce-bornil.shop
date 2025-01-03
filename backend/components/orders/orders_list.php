<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Order list</title>
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
       <?php include_once "../toolbar/toolbar.php"?>
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
                        <li class="breadcrumb-item active" aria-current="page">
                          Orders
                        </li>
                      </ol>
                    </nav>
                    <h1 class="h3 m-0">Orders</h1>
                  </div>
                  <div class="col-auto d-flex">
                    <a href="app-order.html" class="btn btn-primary"
                      >New order</a
                    >
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-4">
                  <input
                    type="text"
                    placeholder="Start typing to search for orders"
                    class="form-control form-control--search mx-auto"
                    id="table-search"
                  />
                </div>
                <div class="sa-divider"></div>
                <table
                  class="sa-datatables-init text-nowrap"
                  data-order='[[ 1, "desc" ]]'
                  data-sa-search-input="#table-search"
                >
                  <thead>
                    <tr>
                      <th class="w-min" data-orderable="false">
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </th>
                      <th>Number</th>
                      <th>Date</th>
                      <th>Customer</th>
                      <th>Paid</th>
                      <th>Status</th>
                      <th>Items</th>
                      <th>Total</th>
                      <th class="w-min" data-orderable="false"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#3201</a>
                      </td>
                      <td>June 26, 2021</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Jessica Moore</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Yes</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-danger">New</div>
                        </div>
                      </td>
                      <td>3 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">200</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-0"
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
                            aria-labelledby="order-context-menu-0"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#2091</a>
                      </td>
                      <td>May 15, 2021</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Helena Garcia</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-secondary">No</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-primary">Pending</div>
                        </div>
                      </td>
                      <td>7 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">5,023</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-1"
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
                            aria-labelledby="order-context-menu-1"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1937</a>
                      </td>
                      <td>February 23, 2021</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Helena Garcia</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-secondary">No</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Shipped</div>
                        </div>
                      </td>
                      <td>1 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">703</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-2"
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
                            aria-labelledby="order-context-menu-2"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1724</a>
                      </td>
                      <td>December 10, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Ryan Ford</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-warning">Partial</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Shipped</div>
                        </div>
                      </td>
                      <td>2 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">1,200</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-3"
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
                            aria-labelledby="order-context-menu-3"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1603</a>
                      </td>
                      <td>August 27, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Helena Garcia</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Yes</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-secondary">Canceled</div>
                        </div>
                      </td>
                      <td>12 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">3,701</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-4"
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
                            aria-labelledby="order-context-menu-4"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1544</a>
                      </td>
                      <td>June 15, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Olivia Smith</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Yes</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Shipped</div>
                        </div>
                      </td>
                      <td>1 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">127</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-5"
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
                            aria-labelledby="order-context-menu-5"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1501</a>
                      </td>
                      <td>May 29, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Kevin Smith</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Yes</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Shipped</div>
                        </div>
                      </td>
                      <td>2 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">2,299</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-6"
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
                            aria-labelledby="order-context-menu-6"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1429</a>
                      </td>
                      <td>May 2, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Charlotte Jones</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-warning">Partial</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Shipped</div>
                        </div>
                      </td>
                      <td>1 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">794</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-7"
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
                            aria-labelledby="order-context-menu-7"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1373</a>
                      </td>
                      <td>March 9, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Jacob Lee</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Yes</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-primary">Pending</div>
                        </div>
                      </td>
                      <td>28 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">27,899</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-8"
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
                            aria-labelledby="order-context-menu-8"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1288</a>
                      </td>
                      <td>February 12, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Isabel Williams</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Yes</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Shipped</div>
                        </div>
                      </td>
                      <td>4 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">4,302</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-9"
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
                            aria-labelledby="order-context-menu-9"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1108</a>
                      </td>
                      <td>January 25, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Anna Wilson</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Yes</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-success">Shipped</div>
                        </div>
                      </td>
                      <td>1 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">239</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-10"
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
                            aria-labelledby="order-context-menu-10"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input
                          type="checkbox"
                          class="form-check-input m-0 fs-exact-16 d-block"
                          aria-label="..."
                        />
                      </td>
                      <td>
                        <a href="app-order.html" class="text-reset">#1002</a>
                      </td>
                      <td>January 3, 2020</td>
                      <td>
                        <a href="app-customer.html" class="text-reset"
                          >Adam Taylor</a
                        >
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-secondary">No</div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex fs-6">
                          <div class="badge badge-sa-secondary">Canceled</div>
                        </div>
                      </td>
                      <td>7 items</td>
                      <td>
                        <div class="sa-price">
                          <span class="sa-price__symbol">$</span
                          ><span class="sa-price__integer">5,103</span
                          ><span class="sa-price__decimal">.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button
                            class="btn btn-sa-muted btn-sm"
                            type="button"
                            id="order-context-menu-11"
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
                            aria-labelledby="order-context-menu-11"
                          >
                            <li><a class="dropdown-item" href="#">Edit</a></li>
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
                      </td>
                    </tr>
                  </tbody>
                </table>
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
