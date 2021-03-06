<?php include 'header.php'; ?>

<div id="header-block">
    <?php include 'header-block.php'; ?>
</div>

<div id="banner" class="container-fluid">
    <?php include 'banner-block.php'; ?>
</div>
<div id="filter-selected" class="container-fluid" >
    <?php include 'selected_filter.php'; ?>
</div> 

<div id="body-container" class="container-fluid">
    <div class="row">
        <div class="refine col-lg-2 col-lg-offset-1 col-sm-3">
            <?php include 'refine-block.php'; ?>
        </div>

        <div class="col-lg-8 col-sm-9">
            <?php include 'products-block.php'; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript">
    
    $(document).ready(function() {
         $("#1 .slider-3 span:eq(0)").append("<p>250</p>");
        $("#1 .slider-3 span:eq(1)").append("<p>1000+</p>");
        $("#2 .slider-3 span:eq(0)").append("<p>250</p>");
        $("#2 .slider-3 span:eq(1)").append("<p>1000+</p>");
        
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

<!-- javascript of product-item -->

<script type="text/javascript">
    $(document).ready(function(){
        $(".sort-list").css({"opacity": "0.3", "cursor": "default"});

        $("#search").hide();

        // $(".buy_product").width(function(){
        //     var height1 = $(this).parent().find(".uc_icon").width();
        //     var height2 = $(this).parents(".uc_contact").width();
        //     return height2 - (height1*3 + 5);
        // });
/*****
        if(screen.width >= 992)
        {
            $(".uc_contact").mouseenter(function(){
                $(this).find(".popup_item, .quick_view_item, .quick_view_content").show();        
            });
            $(".uc_contact").mouseleave(function(){
                $(this).find(".popup_item, .quick_view_item, .quick_view_content").hide();        
            });  
        }

        $(".uc_contact").find(".quick_view_item").mouseenter(function(){
            $(this).css({"border-top": "80px solid transparent", "border-right": "80px solid #252222"});
            $(this).parent().find(".popup_item").hide();
        });
        $(".uc_contact").find(".quick_view_item").mouseleave(function(){
            $(this).css({"border-top": "80px solid transparent", "border-right": "80px solid #9c9c9c"});
            $(this).parent().find(".popup_item").show();
        });
*****/
        if(window.innerWidth >= 992)
        {
            $(".product_item_popup").mouseenter(function(){
                $(this).parent().find(".popup_item, .quick_view_v2").show();
                var height1 = $(this).parent().find(".icon_like").height();
                $(this).parent().find(".quick_view_v2").height(height1).find("span").css("line-height",height1+'px');
            });
            $(".uc_contact").mouseleave(function(){
                $(this).parent().find(".popup_item, .quick_view_v2").hide() ;
            });
        }

        $(document).on({
                mouseout: function () {
                    $("body").css("overflow", "auto");
                }
            }, '#modal_QV, #modal_alert');
        $(document).on({
                mouseover: function () {
                    $("body").css("overflow", "hidden");
                }
            }, '#modal_QV, #modal_alert');
    });

    $(window).resize(function() {
        $('.share_product').height(function(){
            var height1 = $(this).parents(".product_item").find(".uc_contact").height();
            var height2 = $(this).parents(".product_item").find(".show_item").height();
            return height1 + height2;
        });
        // $(".buy_product").width(function(){
        //     var height1 = $(this).parent().find(".uc_icon").width();
        //     var height2 = $(this).parents(".uc_contact").width();
        //     return height2 - (height1*3 + 5);
        // });
    });


    $(".modal_body_footer").click(function(){
        $("#modal_QV").modal("hide");

        $("#modal_alert").modal("show");
        $('#modal_alert').css("overflow", "auto");
        
    });


    $(".sort-list").click(function(){
        $(this).parents("body").find(".product.col-lg-3.col-sm-4").removeClass("col-xs-6");
        $(this).css({"opacity": "0.3", "cursor": "default"});
        $(this).parents(".row").find(".sort-grid").css({"opacity": "1", "cursor": "pointer"});

    });

    $(".sort-grid").click(function(){
        $(this).parents("body").find(".product.col-lg-3.col-sm-4").addClass("col-xs-6");
        $(this).css({"opacity": "0.3", "cursor": "default"});
        $(this).parents(".row").find(".sort-list").css({"opacity": "1", "cursor": "pointer"});

    });

    $(".hide_item").click(function() {        
        $(this).parents(".product_item").find(".share_product").hide();
    });

    $(".show_item").click(function() {
        $(this).parents('.product_item').find('.share_product').show();
        var height1 = $(this).height();
        $(this).parents(".product_item").find(".share_product").height(function(){
            var height2 = $(this).parents(".product_item").find(".uc_contact").height();
            return height1 + height2;
        });
    });

    $(".icon_like").click(function() {
        var myClasses = this.classList;
        if (myClasses.contains("active")) {
            myClasses.remove("active");
        } else {
            myClasses.add("active");
        }
    });

    // $(".icon_alert").click(function() {
    //     var myClasses = this.classList;
    //     if (myClasses.contains("active")) {
    //         myClasses.remove("active");
    //     } else {
    //         myClasses.add("active");
    //     }
    // });     
</script> 

<!-- End javascript of product-item -->

<!-- Javascript of selected_filter.php/sort-item -->

<script type="text/javascript">
    $(".sort-item").click(function(){
        var myClasses = this.classList;
        if(myClasses.contains("active"))
        {
            myClasses.remove("active");
            $(".icon_arrow").removeClass("fa-chevron-up");
            $(".icon_arrow").addClass("fa-chevron-down");
            $(".uc_line_content").slideUp();
        }
        else
        {
            myClasses.add("active");
            $(".icon_arrow").removeClass("fa-chevron-down");
            $(".icon_arrow").addClass("fa-chevron-up");
            $(".uc_line_content").slideDown();
        }
        // $(".icon_arrow").removeClass("fa-chevron-down");
        // $(".icon_arrow").addClass("fa-chevron-up");
        // $(".uc_line_content").slideDown();
    });
    // $(".sort-item").click(function(){
    //     $(".icon_arrow").removeClass("fa-chevron-up");
    //     $(".icon_arrow").addClass("fa-chevron-down");
    //     $(".uc_line_content").slideUp();
    // });

    $(".sort-item-select").click(function(){
        var content_sl = $(this).html();
        $(this).parents(".sort-item").find(".sort-item-selected").html(content_sl);
        $(this).parents(".uc_line_content").slideUp();
    });
</script>

<!-- End Javascript of selected_filter.php/sort-item -->