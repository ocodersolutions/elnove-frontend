<li id="prices">PRICE</li>
    <div class="price prices">
        <div class="slider-3"></div>
    </div>
    <script>
    	$(function() {
        $(".slider-3").slider({
            range: true,
            min: 0,
            max: 1000,
            values: [250, 1000],
            slide: function(event, ui) {
                minprice = (ui.values[0]);
                maxprice = (ui.values[1]);
                $('#1 .slider-3 span:eq(0) p').empty().append(minprice);
                $('#1 .slider-3 span:eq(1) p').empty().append(maxprice);
                $('#2 .slider-3 span:eq(0) p').empty().append(minprice);
                $('#2 .slider-3 span:eq(1) p').empty().append(maxprice);
            }
        });
        $("#min-price").val("$" + $(".slider-3").slider("values", 0));
        $("#max-price").val("$" + $(".slider-3").slider("values", 1));
        
    });
    </script>