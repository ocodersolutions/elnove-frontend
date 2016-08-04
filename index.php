<?php include 'header.php'; ?>
<?php include 'banner.php'; ?>

        <div id="header-container" class="container-fluid">
            <div class="row">
                <div class="header-top-navbar col-lg-12">
                    <div class="row top-bar">
                        <div class="left-side col-lg-3">MENU</div>
                        <div class="logo col-lg-6"><img src="assets/images/logo.png" alt="" class="top-logo"></div>
                        <div class="right-side col-lg-3">
                            <div class="uc_clean_accordion">
                                <div class="uc_clean_accordion_wrap">
                                    <div id="accordion" class="uc_clean_accorder_content">
                                        <!-- start of line 1 -->
                                        <h3 class="uc_head_line">
                                           <a href="" class="uc_link_tittle">WELCOME ,JOHN</a>
                                        </h3>
                                        <div class="uc_line_content">
                                            <ul class="uc_des">
                                                <li><a href="">My Profile</a></li>
                                                <li><a href="">Logout</a></li>  
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
        </div>
        <nav id="menu">
            <div class="col-lg-12" id="row-top-navbar">
                <div class="row">
                    <div class="col-lg-9 text-right" id="top-nav" class="top-navbar">
                        <ul>
                            <li><a href="">HOW IT WORKS</a></li>
                            <li><a href="">ABOUT US</a></li>
                            <li><a href="">BLOG</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">SHIPPING</a></li>
                            <li><a href="">PRICING</a></li>
                            <li><a href="">EXCHANGE & RETURNS</a></li>
                            <li><a href="">CAREERS</a></li>
                            <li><a href="">CONTACT US</a></li>
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
                    <input type="search" placeholder="Search lorem ipsum dolor sit amet consectur..." name="search" class="searchbox-input" onkeyup="buttonUp();" >
                    <button type="submit" class="searchbox-submit">
                    <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true" id="search_btn"></i></span></button>
                </form>
            </div>  
                
        </nav>
        
        <div id="banner-container" class="container-fluid">
            
            <div id="banner">
                <div class="col-lg-5 col-lg-offset-2 banner-content">
                    <h2>LOREM IPSUM TEXT</h2>
                    <p>Whether for casual or business attire, get choices tailored to you.</p>
                    <a href="#"><span class="btn btn-default">GET DRESSED</span></a>
                </div>
            </div>  
        </div>
        <div id="body-container" class="container-fluid">
            
        </div>
        <footer class="container-fluid">
            <?php //include 'footer_block/index.php'; ?>
        </footer>

<?php include 'footer.php'; ?>
