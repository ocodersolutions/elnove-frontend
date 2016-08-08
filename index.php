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
        <div class="refine col-lg-2 col-lg-offset-1 ">
            <?php include 'refine-block.php'; ?>
        </div>

        <div class="col-lg-8">
            <?php include 'products-block.php'; ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
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
                $('#slider-3 span:eq(0) p').empty().append(minprice);
                $('#slider-3 span:eq(1) p').empty().append(maxprice);
            }
        });
        $("#min-price").val("$" + $("#slider-3").slider("values", 0));
        $("#max-price").val("$" + $("#slider-3").slider("values", 1));
    });
    $(document).ready(function() {
        $("#slider-3 span:eq(0)").append("<p>250</p>");
        $("#slider-3 span:eq(1)").append("<p>1000+</p>");
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
        $('.refine .refine-colum .' + currentId + ', .fsp-wrapper .refine-colum .' + currentId + '').animate({
            left: "+=50",
            height: "toggle"
        }, 800, function() {});
    });
</script>



<script type="text/javascript">
    $(".hide_item").click(function() {        
        $(this).parents(".product_item").find(".share_product").hide();
    });

    $(".show_item").click(function() {
        $(this).parents('.product_item').find('.share_product').show();
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