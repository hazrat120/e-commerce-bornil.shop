<nav class="navbar navbar-light nav-menu-home nav-menu-home-mobile">
    <div class="no-style-link head-nav-link pull-left" style="margin: 0px 7px 0px 7px;font-size: 20px;border-right: 1px solid #efefef;padding-right: 15px; line-height: 53px;" onclick="toggleMobileSidebar(this);" data-open="true">
        <img src="img/menu_icon.png" style="width: 20px;" class="menu-img-ref">
    </div>
    <a  class="no-style-link" href="index.html">
      <img src="img/fabrilife.svg" alt="Home Logo" class="nav-logo mobile-logo" style="display: inline; margin-top: -6px;"/>
    </a>
    <div class="head-nav-link pull-right open-mobile-link" style="margin: -3px 14px 0px 7px;font-size: 17px;" href="gallery.html">
        <i class="fa fa-chevron-down"></i>
        <i class="fa fa-chevron-up list-hidden"></i>
    </div>
    <a class="no-style-link head-nav-link pull-right" style="margin: -3px 14px 0px 7px;font-size: 17px;" href="gallery.html">
        <i class="fa fa-shopping-cart"></i>
        <span class="badge badge-primary shopping-cart-badge" style="font-size: .6rem; font-weight: bold; margin-left: 0;">
                            0
                    </span>
    </a>

    <!-- <a class="no-style-link head-nav-link pull-right" style="margin: -2px 14px 0px 7px;font-size: 16px;" href="/favourites">
        <i class="fa fa-heart-o" style="font-weight: bold"></i>
    </a> -->
    <a class="no-style-link head-nav-link pull-right" style="margin: -3px 14px 0px 7px;font-size: 17px;padding-top: 0px;" href="#" onclick="search_toggle()">
        <i class="fa fa-search"></i>
    </a>
    <div id="search-home-mobile" class="search-home-mobile">
        <form action="https://fabrilife.com/shop" class="mobile-search-bar" type="GET">
            <input class="nav-text-input alg-search-box form-control" type="text" name="query" placeholder="Search Products by Titles or Tags" />
            <button style="display: none" type="submit" class="newhome-search">
                <i class="fa fa-search"></i>
            </button>
         </form>
    </div>
  </nav>
    <aside class="mobile-nav-sidebar">
    <div class="aside-refinement refinement-area">
        <div class="aside-refinement-box">
            <div id="aside-current-refinements-layout"></div>
            <div id="aside-clear-refinements-layout"></div>
        </div>
    </div>