<?php include 'header.php'; ?>
<div id="header-container" class="container-fluid hidden-xs">
    <div class="row">
        <div class="header-top-navbar col-lg-12 ">
            <div class="row top-bar">
                <div class="left-side col-lg-3 col-xs-12" id="show-hide-menu">MENU</div>
                <div class="logo col-lg-6 col-xs-12"><img src="assets/images/logo.png" alt="" class="top-logo">
                </div>
                <div class="right-side col-lg-3 col-xs-12">
                    <div class="uc_clean_accordion">
                        <div class="uc_clean_accordion_wrap">
                            <div id="accordion" class="uc_clean_accorder_content">
                                <!-- start of line 1 -->
                                <h3 class="uc_head_line">
                                       <a href="" class="uc_link_tittle">WELCOME ,JOHN</a>
                                    </h3>
                                <div class="uc_line_content">
                                    <ul class="uc_des">
                                        <li><a href="">My Profile</a>
                                        </li>
                                        <li><a href="">Logout</a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- end of line 1 -->


                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn-st-blue">GET STYLED</a>
                </div>
            </div>
        </div>
    </div>

    <nav id="menu">
        <div class="col-lg-12" id="row-top-navbar">
            <div class="row">
                <div class="col-lg-12 text-center" id="top-nav" class="top-navbar">
                    <ul>
                        <li><a href="">HOW IT WORKS</a>
                        </li>
                        <li><a href="">ABOUT US</a>
                        </li>
                        <li><a href="">BLOG</a>
                        </li>
                        <li><a href="">FAQ</a>
                        </li>
                        <li><a href="">SHIPPING</a>
                        </li>
                        <li><a href="">PRICING</a>
                        </li>
                        <li><a href="">EXCHANGE & RETURNS</a>
                        </li>
                        <li><a href="">CAREERS</a>
                        </li>
                        <li><a href="">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12" id="search">
            <!-- <form action="" id="formsearch" class="">
                    <input type="text" length="1000" placeholder="Search lorem ipsum dolor sit amet consectur..." id="input_search">
                    <button type="submit" class="btn-top-search"><i class="fa fa-search" aria-hidden="true" id="search_btn"></i></button>
                </form> -->
            <form class="searchbox">
                <input type="search" placeholder="Search lorem ipsum dolor sit amet consectur..." name="search" class="searchbox-input" onkeyup="buttonUp();">
                <button type="submit" class="searchbox-submit">
                    <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true" id="search_btn"></i></span>
                </button>
            </form>
        </div>

    </nav>
</div>
<div id="mobile-header" class="container-fluid visible-xs">
    <div class="row">
        <div class="col-xs-12" id="mtop-bar">
            <div class="uc_clean_accordion col-xs-6" id="mtop-left">

                <div class="uc_clean_accordion_wrap">
                    <div id="" class="uc_clean_accorder_content">
                        <!-- start of line 1 -->
                        <h3 class="uc_head_line" id="m-show-userbox">
                                       WELCOME ,JOHN
                                    </h3>
                       <!--  <div class="uc_line_content">
                            <ul class="uc_des">
                                <li><a href="">My Profile</a>
                                </li>
                                <li><a href="">Logout</a>
                                </li>
                            </ul>

                        </div> -->
                        <!-- end of line 1 -->


                    </div>
                </div>
            </div>
            <div class="col-xs-6" id="mtop-right">
                <a href="#" class="btn-st-blue">GET STYLED</a>
            </div>
        </div>
    </div>
            
    <div class="row" id="menu-logo">
        <div class="col-xs-12">
            <span class="fa fa-plus" id="pop-menu" data-popup="#popup"></span>
            <img src="assets/images/mobile-logo.png" alt="logo mobile" class="logo" />
        </div>
    </div>
    
    <div class="row" id="search-bar">
        <form class="searchbox-mobile col-xs-12">
            <input type="search" placeholder="Search lorem ipsum dolor sit amet consectur..." name="m-search" class="m-searchbox-input">
            <button type="submit" class="searchbox-submit">
                <span class="m-searchbox-icon"><i class="fa fa-search" aria-hidden="true" id="m-search_btn"></i></span>
            </button>
        </form>
    </div>
    <div class="row">
        <div class="col-xs-12 text-left" id="popup">
            <div class="row">
                <p> MENU</p>
                <ul>
                    <li><a href="">HOW IT WORKS</a>
                    </li>
                    <li><a href="">ABOUT US</a>
                    </li>
                    <li><a href="">BLOG</a>
                    </li>
                    <li><a href="">FAQ</a>
                    </li>
                    <li><a href="">SHIPPING</a>
                    </li>
                    <li><a href="">PRICING</a>
                    </li>
                    <li><a href="">EXCHANGE & RETURNS</a>
                    </li>
                    <li><a href="">CAREERS</a>
                    </li>
                    <li><a href="">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="user-mhiden" id="user-mblock">
            <p class="tit-head">WELCOM,JOHN <span class="fa fa-times" id="hid-userbox"></span></p>
            <ul class="link-box-user">
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
         </div>   
        
    </div>
</div>