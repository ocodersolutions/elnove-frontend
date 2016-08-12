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


$( ".uc_contact" ).mouseover(function() {

    $(this).find('.uc_link').css('display','none')
    $(this).find('.uc_contact_hover').css('display','block')
    $(this).find('.quick-view').css('display','block')
  }).mouseout(function() {
    $(this).find('.uc_link').css('display','block')
    $(this).find('.uc_contact_hover').css('display','none')
    $(this).find('.quick-view').css('display','none')
  
  });



// $( ".uc_avatar" ).mouseover(function() {
//     $(this).parent('.uc_contact').find('.uc_link').css('display','none')
    
//     $(this).parent('.uc_contact').find('.quick-view').css('display','block')
//   }).mouseout(function() {
//     $(this).parent('.uc_contact').find('.uc_link').css('display','block')
    
//     $(this).parent('.uc_contact').find('.quick-view').css('display','none')
//   });





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
        $('.refine .refine-colum .' + currentId + ',.fsp-wrapper .refine-colum .' + currentId + '').animate({
            left: "+=50",
            height: "toggle"
        }, 800, function() {});
    });
</script>

<!-- javascript of product-item -->

<script type="text/javascript">
    $(document).ready(function(){
        $(".sort-list").css({"opacity": "0.3", "cursor": "default"});

    });
    $(window).resize(function() {
        $('.share_product').height(function(){
            var height1 = $(this).parents(".product_item").find(".uc_contact").height();
            var height2 = $(this).parents(".product_item").find(".show_item").height();
            return height1 + height2;
        });
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

    $(".icon_alert").click(function() {
        var myClasses = this.classList;
        if (myClasses.contains("active")) {
            myClasses.remove("active");
        } else {
            myClasses.add("active");
        }
    });        
</script> 

<!-- End javascript of product-item -->

<!-- Javascript of selected_filter.php/sort-item -->

<script type="text/javascript">
    $(".sort-item").mouseenter(function(){
        $(".icon_arrow").removeClass("fa-chevron-down");
        $(".icon_arrow").addClass("fa-chevron-up");
        $(".uc_line_content").slideDown();
    });
    $(".sort-item").mouseleave(function(){
        $(".icon_arrow").removeClass("fa-chevron-up");
        $(".icon_arrow").addClass("fa-chevron-down");
        $(".uc_line_content").slideUp();
    });

    $(".sort-item-select").click(function(){
        var content_sl = $(this).html();
        $(this).parents(".sort-item").find(".sort-item-selected").html(content_sl);
    });
</script>

<!-- End Javascript of selected_filter.php/sort-item -->