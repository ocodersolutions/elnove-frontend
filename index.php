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
                    <div id="accordion-m" class="uc_clean_accorder_content">
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
            <div class="col-xs-6" id="mtop-right">
                <a href="#" class="btn-st-blue">GET STYLED</a>
            </div>
        </div>
    </div>
            
    <div class="row" id="menu-logo">
        <div class="col-xs-12">
            <span class="fa fa-plus" id="pop-menu" data-popup="#popup"></span>
            <img src="assets/images/logo.png" alt="logo mobile" class="logo" />
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
</div>

<div id="banner" class="container-fluid">
    <div class="col-lg-5 col-lg-offset-2 banner-content">
        <h2>LOREM IPSUM TEXT</h2>
        <p>Whether for casual or business attire, get choices tailored to you.</p>
        <a href="#"><span class="btn btn-default">GET DRESSED</span></a>
    </div>
</div>

<div id="body-container" class="container-fluid">
    <div class="row">

        <!-- refine_block -->
        <div class="refine">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="refine-colum">
                            <ul>
                                <li id="category">CATEGORIES</li>
                                <div class="category">
                                    <ul>
                                        <li id="clothing">CLOTHING</li>
                                        <div class="clothing">
                                            <ul>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                            </ul>
                                        </div>
                                    </ul>
                                    <ul>
                                        <li id="footwear">FOOTWEAR</li>
                                        <div class="footwear">
                                            <ul>
                                                <li>Sneakers</li>
                                                <li>Sandals</li>
                                                <li>Dress</li>
                                                <li>Casual</li>
                                                <li>Boots</li>
                                            </ul>
                                        </div>
                                    </ul>
                                    <ul>
                                        <li id="accessories">ACCESSORIES</li>
                                        <div class="accessories">
                                            <ul>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                                <li>Filter</li>
                                            </ul>
                                        </div>
                                    </ul>
                                </div>
                                <li>BRANDS</li>
                                <li id="prices">PRICE</li>
                                <div class="price prices">
                                    <div id="slider-3"></div>
                                </div>
                                <li id="colors">COLOR</li>
                                <div class="colors">
                                    <div class="list-color">
                                        <div class="color" style="background: #000"></div>
                                        <div class="color" style="background: #F5F5DC"></div>
                                        <div class="color" style="background: #0000FF"></div>
                                        <div class="color" style="background: #A52A2A"></div>
                                        <div class="color" style="background: #008000"></div>
                                        <div class="color" style="background: #808080"></div>
                                        <div class="color" style="background: #FFA500"></div>
                                        <div class="color" style="background: #FFC0CB"></div>
                                        <div class="color" style="background: #800080"></div>
                                        <div class="color" style="background: #FF0000"></div>
                                        <div class="color" style="background: #fff"></div>
                                        <div class="color" style="background: #FFFF00"></div>
                                    </div>
                                </div>

                                <li id="deals">DEALS</li>
                                <div class="deals">
                                    <ul>
                                        <li>All item on sale</li>
                                        <li>New today</li>
                                        <li>New this week</li>
                                        <li>Free shipping</li>
                                        <li>Special offer</li>
                                        <li>Discount</li>
                                    </ul>
                                </div>
                                <li id="sizes">SIZE</li>
                                <div class="sizes">
                                    <div class="list-size">
                                        <div class="size"><span value="xs">XS</span>
                                        </div>
                                        <div class="size"><span value="s">S</span>
                                        </div>
                                        <div class="size"><span value="m">M</span>
                                        </div>
                                        <div class="size"><span value="l">L</span>
                                        </div>
                                        <div class="size"><span value="xl">XL</span>
                                        </div>
                                        <div class="size"><span value="xxl">XXL</span>
                                        </div>
                                        <div class="size"><span value="xxxl">XXXL</span>
                                        </div>
                                    </div>
                                </div>
                                <li id="stores">STORE</li>
                                <div class="stores">
                                    <div class="brand">
                                        <input class="label-brand" placeholder="Search Stores">
                                        <div class="list-brand">
                                            <ul>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                                <li>Brand Name</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <button id="submit" type="submit" form="form1" value="Submit">CLEAR FILTER</button>
                            </ul>
                        </div>

                    </div>
            
                    <div class="col-lg-8">
                        <!-- body right -->
                        <div class="row">
                            <div id="body-main-sideright" class="col-lg-12">
                                <div class="row top-option">
                                    <form action="" id="check-option" class="col-lg-3">
                                        <input type="radio" name="radio-1" id="radio-1">
                                        <label for="radio-1"><span class="rd-check"></span>ALL</label>
                                        <input type="radio" name="radio-1" id="radio-2">
                                        <label for="radio-2"><span class="rd-check"></span>SALE</label>
                                        <input type="radio" name="radio-1" id="radio-3">
                                        <label for="radio-3"><span class="rd-check"></span>SAVED ITEMS</label>
                                    </form>
                                    <div class="items-tag"><span>PUMA<i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="items-tag"><span>BLUE<i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="items-tag"><span>SPECIAL OFFERS<i class="fa fa-times" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-3" id="product">

                                        <!-- start of team member -->
                                        <div class="product_item">
                                            <div class="uc_contact">
                                                <img class="uc_avatar" src="assets/images/product_item.jpg">
                                                <div class="uc_link">
                                                    <span class="uc_icon icon_like">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            </span>

                                                    <span class="uc_icon show_item">
                                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                            </span>

                                                    <span class="uc_icon icon_alert">
                                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                                            </span>

                                                    <span class="buy_product uc_icon">BUY</span>
                                                </div>
                                            </div>
                                            <!-- End .product_item -->

                                            <div class="clear_float"></div>

                                            <div class="share_product">
                                                <i class="fa fa-times hide_item" aria-hidden="true"></i>
                                                <h2>SHARE VIA</h2>
                                                <div class="share_page">
                                                    <a href="#">
                                                        <i class="fa fa-facebook fa-2x " aria-hidden="true"></i>
                                                        <span>Facebook</span>
                                                    </a>
                                                </div>
                                                <div class="clear_float"></div>
                                                <div class="share_page">
                                                    <a href="#">
                                                        <i class="fa fa-pinterest-p fa-2x " aria-hidden="true"></i>
                                                        <span>Pinterest</span>
                                                    </a>
                                                </div>
                                                <div class="clear_float"></div>
                                                <div class="share_page">
                                                    <a href="#">
                                                        <i class="fa fa-tumblr fa-2x " aria-hidden="true"></i>
                                                        <span>Twitter</span>
                                                    </a>
                                                </div>
                                                <div class="clear_float"></div>
                                                <div class="share_page">
                                                    <a href="#">
                                                        <i class="fa fa-google-plus fa-2x " aria-hidden="true"></i>
                                                        <span>Google +</span>
                                                    </a>
                                                </div>
                                                <div class="clear_float"></div>
                                                <div class="share_page">
                                                    <a href="#">
                                                        <i class="fa fa-envelope-o fa-2x " aria-hidden="true"></i>
                                                        <span>Email</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- End .share_product -->

                                            <div class="clear_float"></div>

                                            <div class="uc_info">
                                                <p class="uc_job"><span>65.00 CAD</span>&nbsp;&nbsp;48.00 CAD</p>
                                                <p>Puma Football Windbreaker</p>
                                            </div>
                                        </div>
                                        <!-- end of team member -->

                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 2</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 3</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 4</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 5</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 6</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 7</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 8</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 9</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 10</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 11</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 12</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 13</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 14</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 15</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 16</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 17</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 18</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 19</div>
                                    </div>
                                    <div class="col-lg-3" id="product">
                                        <div class="product">product 12</div>
                                    </div>
                                    <!-- <div class="row" id="load-more">
                                
                            </div> -->
                                </div>
                                <div id="load-more" class="row text-center">
                                    <button class="btn-st-silver">Load more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Body right -->

                </div>

            </div>

        </div>
    </div>
</div>

<footer class="container-fluid">
    <?php //include 'footer_block/index.php'; ?>
</footer>
<script type="text/javascript">
    $(function() {
        $("#slider-3").slider({
            range: true,
            min: 0,
            max: 1000,
            values: [250, 1000],
            change: function(event, ui) {
                minprice = (ui.values[0]);
                maxprice = (ui.values[1]);
                $('#slider-3 a:eq(0) span').empty().append(minprice);
                $('#slider-3 a:eq(1) span').empty().append(maxprice);
            }
        });
        $("#min-price").val("$" + $("#slider-3").slider("values", 0));
        $("#max-price").val("$" + $("#slider-3").slider("values", 1));
    });
    $(document).ready(function() {
        $("#slider-3 a:eq(0)").append("<span>250</span>");
        $("#slider-3 a:eq(1)").append("<span>1000+</span>");
        $('.refine .refine-colum  .list-size .size span, .refine .refine-colum .brand .list-brand ul li, .refine .refine-colum .footwear ul li, .refine .refine-colum .deals ul li, .refine .refine-colum .clothing ul li, .refine .refine-colum .accessories ul li').addClass('select');

        $('.select').click(function() {
            val_size = this.getAttribute("value");
            val_color = this.getAttribute("value");
            $('input[name="size"]').val(val_size);

            if ($(this).hasClass("selected") == false) {
                $(this).addClass('selected');
            } else {
                $(this).removeClass('selected');
            }
        });
    });
    $('.refine .refine-colum .list-color .color').click(function() {

        if ($(this).hasClass("selected") == false) {
            $(this).addClass('selected').append(" <i class='check fa fa-check' aria-hidden='true'></i>");
        } else {
            $(this).removeClass('selected');
            ($(this).find(".check")).remove();
        }
    });
    $('.refine .refine-colum ul li').click(function() {

        if ($(this).hasClass("change") == false) {
            $(this).addClass('change');
        } else {
            $(this).removeClass('change');
        }
        var attrContent = getComputedStyle(this, ':after').content;
        var currentId = $(this).attr('id');
        $('.refine .refine-colum .' + currentId + '').animate({
            left: "+=50",
            height: "toggle"
        }, 800, function() {});
    });
</script>

<?php include 'footer.php'; ?>

<script type="text/javascript">
    $(".hide_item").click(function() {
        $(".share_product").hide();
    });

    $(".show_item").click(function() {
        $(".share_product").show();
    });

    $(".icon_like").click(function() {
        var myClasses = this.classList;
        if (myClasses.contains("active")) {
            myClasses.remove("active");
        } else {
            myClasses.add("active");
        }
    });

    $(".icon_alert").click(function() {
        var myClasses = this.classList;
        if (myClasses.contains("active")) {
            myClasses.remove("active");
        } else {
            myClasses.add("active");
        }
    });
</script>