<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Stroyka Admin - eCommerce Dashboard Template</title>
    <!-- icon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
    />
    <!-- css -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.ltr.css" />
    <link rel="stylesheet" href="vendor/highlight.js/styles/github.css" />
    <link rel="stylesheet" href="vendor/simplebar/simplebar.min.css" />
    <link rel="stylesheet" href="vendor/quill/quill.snow.css" />
    <link
      rel="stylesheet"
      href="vendor/air-datepicker/css/datepicker.min.css"
    />
    <link rel="stylesheet" href="vendor/select2/css/select2.min.css" />
    <link
      rel="stylesheet"
      href="vendor/datatables/css/dataTables.bootstrap5.min.css"
    />
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="vendor/fullcalendar/main.min.css" />
    <link rel="stylesheet" href="css/style.css" />
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
      <div class="sa-app__sidebar">
        <div class="sa-sidebar">
          <div class="sa-sidebar__header">
            <a class="sa-sidebar__logo" href="index.html"
              ><!-- logo -->
              <div class="sa-sidebar-logo">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="120px"
                  height="20px"
                >
                  <path
                    d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6z"
                  ></path>
                </svg>
                <div class="sa-sidebar-logo__caption">Admin</div>
              </div>
              <!-- logo / end --></a
            >
          </div>
          <div class="sa-sidebar__body" data-simplebar="">
            <ul class="sa-nav sa-nav--sidebar" data-sa-collapse="">
              <li class="sa-nav__section">
                <div class="sa-nav__section-title">
                  <span>Application</span>
                </div>
                <ul class="sa-nav__menu sa-nav__menu--root">
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="index.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M8,13.1c-4.4,0-8,3.4-8-3C0,5.6,3.6,2,8,2s8,3.6,8,8.1C16,16.5,12.4,13.1,8,13.1zM8,4c-3.3,0-6,2.7-6,6c0,4,2.4,0.9,5,0.2C7,9.9,7.1,9.5,7.4,9.2l3-2.3c0.4-0.3,1-0.2,1.3,0.3c0.3,0.5,0.2,1.1-0.2,1.4l-2.2,1.7c2.5,0.9,4.8,3.6,4.8-0.2C14,6.7,11.3,4,8,4z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Dashboard</span></a
                    >
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M8,6C4.7,6,2,4.7,2,3s2.7-3,6-3s6,1.3,6,3S11.3,6,8,6z M2,5L2,5L2,5C2,5,2,5,2,5z M8,8c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3S2,9.7,2,8V5C2,6.7,4.7,8,8,8z M14,5L14,5C14,5,14,5,14,5L14,5z M2,10L2,10L2,10C2,10,2,10,2,10z M8,13c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3s-6-1.3-6-3v-3C2,11.7,4.7,13,8,13z M14,10L14,10C14,10,14,10,14,10L14,10z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Catalog</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="app-products-list.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Products List</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="app-product.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Product</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="app-categories-list.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Categories List</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="app-category.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Category</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M8,10c-3.3,0-6,2.7-6,6H0c0-3.2,1.9-6,4.7-7.3C3.7,7.8,3,6.5,3,5c0-2.8,2.2-5,5-5s5,2.2,5,5c0,1.5-0.7,2.8-1.7,3.7c2.8,1.3,4.7,4,4.7,7.3h-2C14,12.7,11.3,10,8,10z M8,2C6.3,2,5,3.3,5,5s1.3,3,3,3s3-1.3,3-3S9.7,2,8,2z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Customers</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="app-customers-list.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Customers List</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="app-customer.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Customer</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M14.2,10.3c-0.1,0.4-0.5,0.7-0.9,0.7H4.8c-0.5,0-0.9-0.3-1-0.8L2.2,4C2.1,3.4,1.6,3,1,3H0.4C0.2,3,0,2.8,0,2.6V1.4C0,1.2,0.2,1,0.4,1h1.4c1,0,1.9,0.7,2.1,1.7l1.5,6.1C5.5,8.9,5.7,9,5.8,9h6.5c0.1,0,0.2-0.1,0.3-0.2l1.1-3.4C13.8,5.2,13.7,5,13.5,5H7.4C7.2,5,7,4.8,7,4.6V3.4C7,3.2,7.2,3,7.4,3H15c0.6,0,1,0.4,1,1v1L14.2,10.3z M4.5,13C5.3,13,6,13.7,6,14.5C6,15.3,5.3,16,4.5,16S3,15.3,3,14.5C3,13.7,3.7,13,4.5,13z M11.5,13c0.8,0,1.5,0.7,1.5,1.5c0,0.8-0.7,1.5-1.5,1.5S10,15.3,10,14.5C10,13.7,10.7,13,11.5,13z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Orders</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="app-orders-list.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Orders List</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="app-order.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Order Details</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M11.5,3C12.9,3,14,4.1,14,5.5c0,2.7-4.3,6.4-6,7.4c-1.7-1-6-4.7-6-7.4C2,4.1,3.1,3,4.5,3C5.3,3,6,3.3,6.4,3.9L8,5.3l1.6-1.4C10,3.3,10.7,3,11.5,3 M11.5,1C10.1,1,8.8,1.6,8,2.7C7.2,1.6,5.9,1,4.5,1C2,1,0,3,0,5.5C0,10,7,15,8,15s8-5,8-9.5C16,3,14,1,11.5,1L11.5,1z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Marketing</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="app-coupons-list.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Coupons List</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="app-coupon.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Coupon</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-envelope"></i></span
                      ><span class="sa-nav__title">Inbox</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="app-inbox-list.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">List</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="app-inbox-conversation.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Conversation</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="app-chat.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-comment"></i></span
                      ><span class="sa-nav__title">Chat</span
                      ><span
                        class="sa-nav__menu-item-badge badge badge-sa-pill badge-sa-theme"
                        >8</span
                      ></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="app-file-manager.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-hdd"></i></span
                      ><span class="sa-nav__title">File Manager</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="app-calendar.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-calendar-alt"></i></span
                      ><span class="sa-nav__title">Calendar</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="app-analytics.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M14.5,15h-1c-0.8,0-1.5-0.7-1.5-1.5v-8C12,4.7,12.7,4,13.5,4h1C15.3,4,16,4.7,16,5.5v8C16,14.3,15.3,15,14.5,15z M8.5,15h-1C6.7,15,6,14.3,6,13.5v-11C6,1.7,6.7,1,7.5,1h1C9.3,1,10,1.7,10,2.5v11C10,14.3,9.3,15,8.5,15z M2.5,15h-1C0.7,15,0,14.3,0,13.5v-5C0,7.7,0.7,7,1.5,7h1C3.3,7,4,7.7,4,8.5v5C4,14.3,3.3,15,2.5,15z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Analytics</span></a
                    >
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="1em"
                          height="1em"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                        >
                          <path
                            d="M14,6.8l-0.2,0.1C14,7.3,14,7.6,14,8c0,0.4,0,0.7-0.1,1.1L14,9.2c1,0.6,1.4,1.9,0.8,3c-0.5,0.9-1.6,1.2-2.5,0.7l-0.5-0.3c-0.6,0.5-1.2,0.8-1.9,1.1v0.8c0,0.9-0.7,1.6-1.6,1.6H7.6C6.7,16,6,15.3,6,14.4v-0.8c-0.7-0.2-1.3-0.6-1.9-1.1l-0.5,0.3c-0.9,0.5-2,0.2-2.5-0.7c-0.6-1-0.3-2.4,0.8-3l0.2-0.1C2,8.7,2,8.4,2,8c0-0.4,0-0.7,0.1-1.1L2,6.8c-1.1-0.6-1.4-2-0.8-3C1.7,3,2.8,2.7,3.6,3.2l0.5,0.3C4.7,3,5.3,2.6,6,2.4V1.6C6,0.7,6.7,0,7.6,0h0.8C9.3,0,10,0.7,10,1.6v0.8c0.7,0.2,1.3,0.6,1.9,1.1l0.5-0.3c0.9-0.5,2-0.2,2.5,0.7C15.4,4.9,15.1,6.2,14,6.8z M8,5.5C6.6,5.5,5.5,6.6,5.5,8s1.1,2.5,2.5,2.5s2.5-1.1,2.5-2.5S9.4,5.5,8,5.5z"
                          ></path></svg></span
                      ><span class="sa-nav__title">Settings</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="app-settings-toc.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title"
                            >Table of Content</span
                          ></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="app-settings-form.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Form</span></a
                        >
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="sa-nav__section">
                <div class="sa-nav__section-title"><span>Pages</span></div>
                <ul class="sa-nav__menu sa-nav__menu--root">
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-lock"></i></span
                      ><span class="sa-nav__title">Authentication</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="auth-sign-in.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Sign In</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="auth-sign-up.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Sign Up</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="auth-forgot-password.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Forgot Password</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="auth-reset-password.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Reset Password</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="auth-email-confirmation.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Verify Account</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="page-invoice.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-file-alt"></i></span
                      ><span class="sa-nav__title">Invoice</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="page-pricing-table.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-dollar-sign"></i></span
                      ><span class="sa-nav__title">Pricing Table</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="page-faq.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-info-circle"></i></span
                      ><span class="sa-nav__title">FAQ</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="page-terms.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-check-square"></i></span
                      ><span class="sa-nav__title"
                        >Terms And Conditions</span
                      ></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="page-help-center.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-question-circle"></i></span
                      ><span class="sa-nav__title">Help Center</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="page-404.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-bomb"></i></span
                      ><span class="sa-nav__title">Not Found</span></a
                    >
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-bars"></i></span
                      ><span class="sa-nav__title">Menu Level 0</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li
                        class="sa-nav__menu-item"
                        data-sa-collapse-item="sa-nav__menu-item--open"
                      >
                        <a
                          href="#"
                          class="sa-nav__link"
                          data-sa-collapse-trigger=""
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Menu Level 1</span
                          ><span class="sa-nav__arrow"
                            ><svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="6"
                              height="9"
                              viewBox="0 0 6 9"
                              fill="currentColor"
                            >
                              <path
                                d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                              ></path></svg></span
                        ></a>
                        <ul
                          class="sa-nav__menu sa-nav__menu--sub"
                          data-sa-collapse-content=""
                        >
                          <li
                            class="sa-nav__menu-item"
                            data-sa-collapse-item="sa-nav__menu-item--open"
                          >
                            <a
                              href="#"
                              class="sa-nav__link"
                              data-sa-collapse-trigger=""
                              ><span class="sa-nav__menu-item-padding"></span
                              ><span class="sa-nav__menu-item-padding"></span
                              ><span class="sa-nav__title">Menu Level 2</span
                              ><span class="sa-nav__arrow"
                                ><svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="6"
                                  height="9"
                                  viewBox="0 0 6 9"
                                  fill="currentColor"
                                >
                                  <path
                                    d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                                  ></path></svg></span
                            ></a>
                            <ul
                              class="sa-nav__menu sa-nav__menu--sub"
                              data-sa-collapse-content=""
                            >
                              <li class="sa-nav__menu-item">
                                <a href="#" class="sa-nav__link"
                                  ><span
                                    class="sa-nav__menu-item-padding"
                                  ></span
                                  ><span
                                    class="sa-nav__menu-item-padding"
                                  ></span
                                  ><span
                                    class="sa-nav__menu-item-padding"
                                  ></span
                                  ><span class="sa-nav__title"
                                    >Menu Level 3</span
                                  ></a
                                >
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="sa-nav__section">
                <div class="sa-nav__section-title"><span>Framework</span></div>
                <ul class="sa-nav__menu sa-nav__menu--root">
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-compass"></i></span
                      ><span class="sa-nav__title">Components</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="components-accordion.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Accordion</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-alerts.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Alerts</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-badge.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Badge</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="components-breadcrumb.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Breadcrumb</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-buttons.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Buttons</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="components-button-group.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Button group</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-cards.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Cards</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-carousel.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Carousel</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-collapse.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Collapse</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-dropdowns.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Dropdowns</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="components-list-group.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">List group</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-modal.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Modal</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-navs.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Navs</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="components-nouislider.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">NoUiSlider</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-offcanvas.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Offcanvas</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="components-pagination.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Pagination</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="components-placeholders.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Placeholders</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-popovers.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Popovers</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-progress.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Progress</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-scrollspy.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Scrollspy</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-spinners.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Spinners</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-symbols.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Symbols</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-tabs.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Tabs</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-toasts.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Toasts</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="components-tooltips.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Tooltips</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-toggle-on"></i></span
                      ><span class="sa-nav__title">Forms</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="forms-text-box.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Text Box</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-text-area.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Text Area</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-select.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Select</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a
                          href="forms-checks-and-radios.html"
                          class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title"
                            >Checks And Radios</span
                          ></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-file.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">File</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-range.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Range</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-input-group.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Input Group</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-layout.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Layout</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-help-text.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Help Text</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-validation.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Validation</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-quill.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Quill</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-air-datepicker.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Air Datepicker</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="forms-select2.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Select2</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li
                    class="sa-nav__menu-item sa-nav__menu-item--has-icon"
                    data-sa-collapse-item="sa-nav__menu-item--open"
                  >
                    <a href="#" class="sa-nav__link" data-sa-collapse-trigger=""
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-table"></i></span
                      ><span class="sa-nav__title">Tables</span
                      ><span class="sa-nav__arrow"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="6"
                          height="9"
                          viewBox="0 0 6 9"
                          fill="currentColor"
                        >
                          <path
                            d="M5.605,0.213 C6.007,0.613 6.107,1.212 5.706,1.612 L2.696,4.511 L5.706,7.409 C6.107,7.809 6.107,8.509 5.605,8.808 C5.204,9.108 4.702,9.108 4.301,8.709 L-0.013,4.511 L4.401,0.313 C4.702,-0.087 5.304,-0.087 5.605,0.213 Z"
                          ></path></svg></span
                    ></a>
                    <ul
                      class="sa-nav__menu sa-nav__menu--sub"
                      data-sa-collapse-content=""
                    >
                      <li class="sa-nav__menu-item">
                        <a href="tables-basic-tables.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">Basic Tables</span></a
                        >
                      </li>
                      <li class="sa-nav__menu-item">
                        <a href="tables-datatables.html" class="sa-nav__link"
                          ><span class="sa-nav__menu-item-padding"></span
                          ><span class="sa-nav__title">DataTables</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="icons.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-tree"></i></span
                      ><span class="sa-nav__title">Icons</span></a
                    >
                  </li>
                  <li class="sa-nav__menu-item sa-nav__menu-item--has-icon">
                    <a href="charts.html" class="sa-nav__link"
                      ><span class="sa-nav__icon"
                        ><i class="fas fa-chart-pie"></i></span
                      ><span class="sa-nav__title">Charts</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="sa-app__sidebar-shadow"></div>
        <div class="sa-app__sidebar-backdrop" data-sa-close-sidebar=""></div>
      </div>
      <!-- sa-app__sidebar / end --><!-- sa-app__content -->
      <div class="sa-app__content">
        <!-- sa-app__toolbar -->
        <div class="sa-toolbar sa-toolbar--search-hidden sa-app__toolbar">
          <div class="sa-toolbar__body">
            <div class="sa-toolbar__item">
              <button
                class="sa-toolbar__button"
                type="button"
                aria-label="Menu"
                data-sa-toggle-sidebar=""
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    d="M1,11V9h18v2H1z M1,3h18v2H1V3z M15,17H1v-2h14V17z"
                  ></path>
                </svg>
              </button>
            </div>
            <div class="sa-toolbar__item sa-toolbar__item--search">
              <form class="sa-search sa-search--state--pending">
                <div class="sa-search__body">
                  <label class="visually-hidden" for="input-search"
                    >Search for:</label
                  >
                  <div class="sa-search__icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 16 16"
                      fill="currentColor"
                    >
                      <path
                        d="M16.243 14.828C16.243 14.828 16.047 15.308 15.701 15.654C15.34 16.015 14.828 16.242 14.828 16.242L10.321 11.736C9.247 12.522 7.933 13 6.5 13C2.91 13 0 10.09 0 6.5C0 2.91 2.91 0 6.5 0C10.09 0 13 2.91 13 6.5C13 7.933 12.522 9.247 11.736 10.321L16.243 14.828ZM6.5 2C4.015 2 2 4.015 2 6.5C2 8.985 4.015 11 6.5 11C8.985 11 11 8.985 11 6.5C11 4.015 8.985 2 6.5 2Z"
                      ></path>
                    </svg>
                  </div>
                  <input
                    type="text"
                    id="input-search"
                    class="sa-search__input"
                    placeholder="Search for the truth"
                    autocomplete="off"
                  /><button
                    class="sa-search__cancel d-sm-none"
                    type="button"
                    aria-label="Close search"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="12"
                      height="12"
                      viewBox="0 0 12 12"
                      fill="currentColor"
                    >
                      <path
                        d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6 c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4 C11.2,9.8,11.2,10.4,10.8,10.8z"
                      ></path>
                    </svg>
                  </button>
                  <div class="sa-search__field"></div>
                </div>
                <div class="sa-search__dropdown">
                  <div class="sa-search__dropdown-loader"></div>
                  <div class="sa-search__dropdown-wrapper">
                    <div class="sa-search__suggestions sa-suggestions"></div>
                    <div
                      class="sa-search__help sa-search__help--type--no-results"
                    >
                      <div class="sa-search__help-title">
                        No results for &quot;<span
                          class="sa-search__query"
                        ></span
                        >&quot;
                      </div>
                      <div class="sa-search__help-subtitle">
                        Make sure that all words are spelled correctly.
                      </div>
                    </div>
                    <div
                      class="sa-search__help sa-search__help--type--greeting"
                    >
                      <div class="sa-search__help-title">
                        Start typing to search for
                      </div>
                      <div class="sa-search__help-subtitle">
                        Products, orders, customers, actions, etc.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sa-search__backdrop"></div>
              </form>
            </div>
            <div class="mx-auto"></div>
            <div class="sa-toolbar__item d-sm-none">
              <button
                class="sa-toolbar__button"
                type="button"
                aria-label="Show search"
                data-sa-action="show-search"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                >
                  <path
                    d="M16.243 14.828C16.243 14.828 16.047 15.308 15.701 15.654C15.34 16.015 14.828 16.242 14.828 16.242L10.321 11.736C9.247 12.522 7.933 13 6.5 13C2.91 13 0 10.09 0 6.5C0 2.91 2.91 0 6.5 0C10.09 0 13 2.91 13 6.5C13 7.933 12.522 9.247 11.736 10.321L16.243 14.828ZM6.5 2C4.015 2 2 4.015 2 6.5C2 8.985 4.015 11 6.5 11C8.985 11 11 8.985 11 6.5C11 4.015 8.985 2 6.5 2Z"
                  ></path>
                </svg>
              </button>
            </div>
            <div class="sa-toolbar__item dropdown">
              <button
                class="sa-toolbar__button"
                type="button"
                id="dropdownMenuButton3"
                data-bs-toggle="dropdown"
                data-bs-reference="parent"
                data-bs-offset="0,1"
                aria-expanded="false"
              >
                <img
                  src="vendor/flag-icons/24/DE.png"
                  class="sa-language-icon"
                  alt=""
                />
              </button>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="dropdownMenuButton3"
              >
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><img
                      src="vendor/flag-icons/24/DE.png"
                      class="sa-language-icon me-3"
                      alt=""
                    /><span class="ps-2">German</span></a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><img
                      src="vendor/flag-icons/24/FR.png"
                      class="sa-language-icon me-3"
                      alt=""
                    /><span class="ps-2">French</span></a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><img
                      src="vendor/flag-icons/24/GB.png"
                      class="sa-language-icon me-3"
                      alt=""
                    /><span class="ps-2">English</span></a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><img
                      src="vendor/flag-icons/24/RU.png"
                      class="sa-language-icon me-3"
                      alt=""
                    /><span class="ps-2">Russian</span></a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                    ><img
                      src="vendor/flag-icons/24/IT.png"
                      class="sa-language-icon me-3"
                      alt=""
                    /><span class="ps-2">Italian</span></a
                  >
                </li>
              </ul>
            </div>
            <div class="sa-toolbar__item dropdown">
              <button
                class="sa-toolbar__button"
                type="button"
                id="dropdownMenuButton2"
                data-bs-toggle="dropdown"
                data-bs-reference="parent"
                data-bs-offset="0,1"
                aria-expanded="false"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 16 16"
                  fill="currentColor"
                >
                  <path
                    d="M8,13c0,0-5.2,0-7,0c0-1-0.1-1.9,1-1.9C2,5,4,2,6,2c0-1.1,0-2,2-2c1.9,0,2,0.9,2,2c2,0,4,3,4,9c1,0,1,1,1,2C12.7,13,8,13,8,13z M6,14h4c0,1.1,0,2-2,2C6,16,6,15.1,6,14L6,14L6,14z"
                  ></path></svg
                ><span class="sa-toolbar__button-indicator">3</span>
              </button>
              <div
                class="dropdown-menu dropdown-menu-end py-0"
                aria-labelledby="dropdownMenuButton2"
              >
                <div class="sa-notifications">
                  <div class="sa-notifications__header">
                    <div class="sa-notifications__header-title">
                      Notifications
                    </div>
                    <a class="sa-notifications__header-action" href="#"
                      >Mark All as Read</a
                    >
                  </div>
                  <ul class="sa-notifications__list">
                    <li class="sa-notifications__item">
                      <a href="#" class="sa-notifications__item-button"
                        ><div class="sa-notifications__item-icon">
                          <div
                            class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--primary"
                          >
                            <div class="sa-symbol__icon">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                              >
                                <path
                                  d="M14.5,15h-1c-0.8,0-1.5-0.7-1.5-1.5v-8C12,4.7,12.7,4,13.5,4h1C15.3,4,16,4.7,16,5.5v8C16,14.3,15.3,15,14.5,15z M8.5,15h-1C6.7,15,6,14.3,6,13.5v-11C6,1.7,6.7,1,7.5,1h1C9.3,1,10,1.7,10,2.5v11C10,14.3,9.3,15,8.5,15z M2.5,15h-1C0.7,15,0,14.3,0,13.5v-5C0,7.7,0.7,7,1.5,7h1C3.3,7,4,7.7,4,8.5v5C4,14.3,3.3,15,2.5,15z"
                                ></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="sa-notifications__item-body">
                          <div
                            class="sa-notifications__item-title sa-notifications__item-title--nowrap"
                          >
                            New report has been received
                          </div>
                          <div
                            class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap"
                          >
                            24 hours ago
                          </div>
                        </div></a
                      >
                    </li>
                    <li class="sa-notifications__item">
                      <a href="#" class="sa-notifications__item-button"
                        ><div class="sa-notifications__item-icon">
                          <div
                            class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--warning"
                          >
                            <div class="sa-symbol__icon">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                              >
                                <path
                                  d="M8,6C4.7,6,2,4.7,2,3s2.7-3,6-3s6,1.3,6,3S11.3,6,8,6z M2,5L2,5L2,5C2,5,2,5,2,5z M8,8c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3S2,9.7,2,8V5C2,6.7,4.7,8,8,8z M14,5L14,5C14,5,14,5,14,5L14,5z M2,10L2,10L2,10C2,10,2,10,2,10z M8,13c3.3,0,6-1.3,6-3v3c0,1.7-2.7,3-6,3s-6-1.3-6-3v-3C2,11.7,4.7,13,8,13z M14,10L14,10C14,10,14,10,14,10L14,10z"
                                ></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="sa-notifications__item-body">
                          <div
                            class="sa-notifications__item-title sa-notifications__item-title--nowrap"
                          >
                            Creating a backup in the process
                          </div>
                          <div
                            class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap"
                          >
                            Completed: 37% (23.05 MB)
                          </div>
                        </div></a
                      >
                    </li>
                    <li class="sa-notifications__item">
                      <a href="#" class="sa-notifications__item-button"
                        ><div class="sa-notifications__item-icon">
                          <div
                            class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--primary"
                          >
                            <div class="sa-symbol__icon">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                              >
                                <path
                                  d="M14.2,10.3c-0.1,0.4-0.5,0.7-0.9,0.7H4.8c-0.5,0-0.9-0.3-1-0.8L2.2,4C2.1,3.4,1.6,3,1,3H0.4C0.2,3,0,2.8,0,2.6V1.4C0,1.2,0.2,1,0.4,1h1.4c1,0,1.9,0.7,2.1,1.7l1.5,6.1C5.5,8.9,5.7,9,5.8,9h6.5c0.1,0,0.2-0.1,0.3-0.2l1.1-3.4C13.8,5.2,13.7,5,13.5,5H7.4C7.2,5,7,4.8,7,4.6V3.4C7,3.2,7.2,3,7.4,3H15c0.6,0,1,0.4,1,1v1L14.2,10.3z M4.5,13C5.3,13,6,13.7,6,14.5C6,15.3,5.3,16,4.5,16S3,15.3,3,14.5C3,13.7,3.7,13,4.5,13z M11.5,13c0.8,0,1.5,0.7,1.5,1.5c0,0.8-0.7,1.5-1.5,1.5S10,15.3,10,14.5C10,13.7,10.7,13,11.5,13z"
                                ></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="sa-notifications__item-body">
                          <div
                            class="sa-notifications__item-title sa-notifications__item-title--nowrap"
                          >
                            Product added to cart
                          </div>
                          <div
                            class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap"
                          >
                            Drill Screwdriver Brandix ALX7054 200 Watts
                          </div>
                        </div></a
                      >
                    </li>
                    <li class="sa-notifications__item">
                      <a href="#" class="sa-notifications__item-button"
                        ><div class="sa-notifications__item-icon">
                          <div
                            class="sa-symbol sa-symbol--shape--rounded sa-symbol--style--info"
                          >
                            <div class="sa-symbol__icon">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="1em"
                                height="1em"
                                viewBox="0 0 16 16"
                                fill="currentColor"
                              >
                                <path
                                  d="M8,10c-3.3,0-6,2.7-6,6H0c0-3.2,1.9-6,4.7-7.3C3.7,7.8,3,6.5,3,5c0-2.8,2.2-5,5-5s5,2.2,5,5c0,1.5-0.7,2.8-1.7,3.7c2.8,1.3,4.7,4,4.7,7.3h-2C14,12.7,11.3,10,8,10z M8,2C6.3,2,5,3.3,5,5s1.3,3,3,3s3-1.3,3-3S9.7,2,8,2z"
                                ></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="sa-notifications__item-body">
                          <div
                            class="sa-notifications__item-title sa-notifications__item-title--nowrap"
                          >
                            Customer Ryan Ford says
                          </div>
                          <div
                            class="sa-notifications__item-subtitle sa-notifications__item-subtitle--nowrap"
                          >
                            What is a screen dimension of Brandix Series B
                            monitor?
                          </div>
                        </div></a
                      >
                    </li>
                  </ul>
                  <div class="sa-notifications__footer">
                    <a class="sa-notifications__footer-action" href="#"
                      >See all 15 notifications</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown sa-toolbar__item">
              <button
                class="sa-toolbar-user"
                type="button"
                id="dropdownMenuButton"
                data-bs-toggle="dropdown"
                data-bs-offset="0,1"
                aria-expanded="false"
              >
                <span
                  class="sa-toolbar-user__avatar sa-symbol sa-symbol--shape--rounded"
                  ><img
                    src="images/customers/customer-4-64x64.jpg"
                    width="64"
                    height="64"
                    alt="" /></span
                ><span class="sa-toolbar-user__info"
                  ><span class="sa-toolbar-user__title"
                    >Konstantin Veselovsky</span
                  ><span class="sa-toolbar-user__subtitle"
                    >stroyka@example.com</span
                  ></span
                >
              </button>
              <ul
                class="dropdown-menu w-100"
                aria-labelledby="dropdownMenuButton"
              >
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <a class="dropdown-item" href="app-inbox-list.html">Inbox</a>
                </li>
                <li>
                  <a class="dropdown-item" href="app-settings-toc.html"
                    >Settings</a
                  >
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="auth-sign-in.html">Sign Out</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="sa-toolbar__shadow"></div>
        </div>
        <!-- sa-app__toolbar / end --><!-- sa-app__body -->
        <div id="top" class="sa-app__body">
          <div class="mx-xxl-3 px-4 px-sm-5">
            <div class="py-5">
              <div class="row g-4 align-items-center">
                <div class="col">
                  <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                      <li class="breadcrumb-item">
                        <a href="index.html">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Products
                      </li>
                    </ol>
                  </nav>
                  <h1 class="h3 m-0">Products</h1>
                </div>
                <div class="col-auto d-flex">
                  <a href="#" class="btn btn-secondary me-3">Import</a
                  ><a href="app-product.html" class="btn btn-primary"
                    >New product</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="mx-xxl-3 px-4 px-sm-5 pb-6">
            <div class="sa-layout">
              <div
                class="sa-layout__backdrop"
                data-sa-layout-sidebar-close=""
              ></div>
              <div class="sa-layout__sidebar">
                <div class="sa-layout__sidebar-header">
                  <div class="sa-layout__sidebar-title">Filters</div>
                  <button
                    type="button"
                    class="sa-close sa-layout__sidebar-close"
                    aria-label="Close"
                    data-sa-layout-sidebar-close=""
                  ></button>
                </div>
                <div class="sa-layout__sidebar-body sa-filters">
                  <ul class="sa-filters__list">
                    <li class="sa-filters__item">
                      <div class="sa-filters__item-title">Price</div>
                      <div class="sa-filters__item-body">
                        <div
                          class="sa-filter-range"
                          data-min="0"
                          data-max="2000"
                          data-from="0"
                          data-to="2000"
                        >
                          <div class="sa-filter-range__slider"></div>
                          <input
                            type="hidden"
                            value="0"
                            class="sa-filter-range__input-from"
                          /><input
                            type="hidden"
                            value="2000"
                            class="sa-filter-range__input-to"
                          />
                        </div>
                      </div>
                    </li>
                    <li class="sa-filters__item">
                      <div class="sa-filters__item-title">Categories</div>
                      <div class="sa-filters__item-body">
                        <ul class="list-unstyled m-0 mt-n2">
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                                checked=""
                              />Power tools</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                              />Hand tools</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                                checked=""
                              />Machine tools</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                              />Power machinery</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                              />Measurement</label
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="sa-filters__item">
                      <div class="sa-filters__item-title">Product type</div>
                      <div class="sa-filters__item-body">
                        <ul class="list-unstyled m-0 mt-n2">
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="radio"
                                class="form-check-input m-0 me-3 fs-exact-16"
                                name="filter-product_type"
                                checked=""
                              />Simple</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="radio"
                                class="form-check-input m-0 me-3 fs-exact-16"
                                name="filter-product_type"
                              />Variable</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="radio"
                                class="form-check-input m-0 me-3 fs-exact-16"
                                name="filter-product_type"
                              />Digital</label
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="sa-filters__item">
                      <div class="sa-filters__item-title">Brands</div>
                      <div class="sa-filters__item-body">
                        <ul class="list-unstyled m-0 mt-n2">
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                              />Brandix</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                                checked=""
                              />FastWheels</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                                checked=""
                              />FuelCorp</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                              />RedGate</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                              />Specter</label
                            >
                          </li>
                          <li>
                            <label class="d-flex align-items-center pt-2"
                              ><input
                                type="checkbox"
                                class="form-check-input m-0 me-3 fs-exact-16"
                              />TurboElectric</label
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sa-layout__content">
                <div class="card">
                  <div class="p-4">
                    <div class="row g-4">
                      <div class="col-auto sa-layout__filters-button">
                        <button
                          class="btn btn-sa-muted btn-sa-icon fs-exact-16"
                          data-sa-layout-sidebar-open=""
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="1em"
                            height="1em"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                          >
                            <path
                              d="M7,14v-2h9v2H7z M14,7h2v2h-2V7z M12.5,6C12.8,6,13,6.2,13,6.5v3c0,0.3-0.2,0.5-0.5,0.5h-2 C10.2,10,10,9.8,10,9.5v-3C10,6.2,10.2,6,10.5,6H12.5z M7,2h9v2H7V2z M5.5,5h-2C3.2,5,3,4.8,3,4.5v-3C3,1.2,3.2,1,3.5,1h2 C5.8,1,6,1.2,6,1.5v3C6,4.8,5.8,5,5.5,5z M0,2h2v2H0V2z M9,9H0V7h9V9z M2,14H0v-2h2V14z M3.5,11h2C5.8,11,6,11.2,6,11.5v3 C6,14.8,5.8,15,5.5,15h-2C3.2,15,3,14.8,3,14.5v-3C3,11.2,3.2,11,3.5,11z"
                            ></path>
                          </svg>
                        </button>
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          placeholder="Start typing to search for products"
                          class="form-control form-control--search mx-auto"
                          id="table-search"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="sa-divider"></div>
                  <table
                    class="sa-datatables-init"
                    data-order='[[ 1, "asc" ]]'
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
                        <th class="min-w-20x">Product</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Price</th>
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-1-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Electric Planer Brandix KL370090 300 Watts</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >2043</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >KL370090</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Planers</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">25 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">749</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-0"
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
                              aria-labelledby="product-context-menu-0"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-2-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Undefined Tool IRadix DPS300SY 2700 Watts</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >1746</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >DPS300SY</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Power Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-danger">Out of Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">1,019</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-1"
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
                              aria-labelledby="product-context-menu-1"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-3-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Drill Screwdriver Brandix ALX7054B 200 Watts</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >8821</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >ALX7054B</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Screwdrivers</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">3 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">850</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-2"
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
                              aria-labelledby="product-context-menu-2"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-4-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Drill Series 3 Brandix KSR4590P 1500 Watts</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >5312</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >KSR4590P</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Drills</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">7 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">949</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-3"
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
                              aria-labelledby="product-context-menu-3"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-5-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Brandix Router Power Tool 2017ERX9</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >3326</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >2017ERX9</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Routers</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-primary">Preorder</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">1,700</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-4"
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
                              aria-labelledby="product-context-menu-4"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-6-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Brandix Drilling Machine DM2019KW 4kW</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >4402</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >DM2019KW</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Drills</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-warning">On Backorder</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">3,199</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-5"
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
                              aria-labelledby="product-context-menu-5"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-7-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Brandix Pliers</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >9637</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >BDX100PL</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Hand Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">8 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">24</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-6"
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
                              aria-labelledby="product-context-menu-6"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-8-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Water Hose 40cm</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >2002</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >WATER40C</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Plumbing</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-primary">Preorder</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">15</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-7"
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
                              aria-labelledby="product-context-menu-7"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-9-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Spanner Wrench</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >4955</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >SP0072WR</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Hand Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">15 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">19</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-8"
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
                              aria-labelledby="product-context-menu-8"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-10-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Water Tap</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >6428</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >TAP883WT</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Plumbing</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">24 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">15</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-9"
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
                              aria-labelledby="product-context-menu-9"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-11-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Hand Tool Kit</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >1302</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >HT75002K</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Hand Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">9 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">149</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-10"
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
                              aria-labelledby="product-context-menu-10"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-12-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Ash&#x27;s Chainsaw 3.5kW</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >1022</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >AC6660KW</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Power Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-danger">Out of Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">666</span
                            ><span class="sa-price__decimal">.99</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-11"
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
                              aria-labelledby="product-context-menu-11"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-13-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Brandix Angle Grinder KZX389PQ</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >7203</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >KZX389PQ</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Power Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">2 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">649</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-12"
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
                              aria-labelledby="product-context-menu-12"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-14-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Brandix Air Compressor DELTA500</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >4402</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >DELTA500</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Compressors</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">7 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">1,800</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-13"
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
                              aria-labelledby="product-context-menu-13"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-15-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Brandix Electric Jigsaw JIG7000B</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >5221</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >JIG7000B</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Power Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">1 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">290</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-14"
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
                              aria-labelledby="product-context-menu-14"
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
                          <div class="d-flex align-items-center">
                            <a href="app-product.html" class="me-4"
                              ><div
                                class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg"
                              >
                                <img
                                  src="images/products/product-16-40x40.jpg"
                                  width="40"
                                  height="40"
                                  alt=""
                                /></div
                            ></a>
                            <div>
                              <a href="app-product.html" class="text-reset"
                                >Brandix Screwdriver SCREW150</a
                              >
                              <div class="sa-meta mt-0">
                                <ul class="sa-meta__list">
                                  <li class="sa-meta__item">
                                    ID:
                                    <span
                                      title="Click to copy product ID"
                                      class="st-copy"
                                      >7321</span
                                    >
                                  </li>
                                  <li class="sa-meta__item">
                                    SKU:
                                    <span
                                      title="Click to copy product SKU"
                                      class="st-copy"
                                      >SCREW150</span
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <a href="app-category.html" class="text-reset"
                            >Power Tools</a
                          >
                        </td>
                        <td>
                          <div class="badge badge-sa-success">18 In Stock</div>
                        </td>
                        <td>
                          <div class="sa-price">
                            <span class="sa-price__symbol">$</span
                            ><span class="sa-price__integer">1,499</span
                            ><span class="sa-price__decimal">.00</span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button
                              class="btn btn-sa-muted btn-sm"
                              type="button"
                              id="product-context-menu-15"
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
                              aria-labelledby="product-context-menu-15"
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
                        </td>
                      </tr>
                    </tbody>
                  </table>
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