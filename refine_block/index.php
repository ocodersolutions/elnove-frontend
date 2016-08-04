<!DOCTYPE html>
<html class="no-js">
    <head>
    
    	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	    <link rel="stylesheet" href="https://www.google.com/fonts#UsePlace:use/Collection:Robotohttps://www.google.com/fonts#UsePlace:use/Collection:Roboto" media="all">
	    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" >
	    <link rel="stylesheet/less" type="text/css" href="../bk/assets/css/quang.less" />
	    <script   src="../assets/js/jquery-1.12.4.min.js"></script>
	    <script src="../assets/js/less.min.js"></script>
        <link href="jquery-ui.css" rel="stylesheet">
        <script src="jquery-ui.js"></script>
        

    </head>
    <body>


 
    
    <!-- refine_block -->
        <div class="refine">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-4">
        				<div class="refine-colum">
        					<ul>
        						<li>CATEGORIES</li>
        						<li>CLOTHING</li>
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
        						<li>ACCESSORIES</li>
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
                                    <div class="sizes" >
                                        <div class="list-size">
                                            <div class="size"><span value="xs">XS</span></div>
                                            <div class="size"><span value="s" >S</span></div>
                                            <div class="size"><span value="m">M</span></div>
                                            <div class="size"><span value="l">L</span></div>
                                            <div class="size"><span value="xl">XL</span></div>
                                            <div class="size"><span value="xxl">XXL</span></div>
                                            <div class="size"><span value="xxxl">XXXL</span></div>
                                        </div>
                                    </div>
        						<li id="stores">STORE</li>
                                    <div class="stores">
                                        <div class="brand" >
                                        <div class="label-brand">Search Stores</div>
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
        			<div class="col-lg-8" style=" background: blue; height: 1000px">
        				
        			</div>
        		</div>
        		
        	</div>

        </div>
    <!-- refine_block -->
    <?php var_dump($_POST); ?>
    <form method="post">
        <input class="footwear" name="footwear">
        <input class="footwear" name="price">
        <input class="footwear" name="color">
        <input class="footwear" name="deals">
        <input class="footwear" name="size">
        <input class="footwear" name="store">
        <button type="submit"></button>
    </form>


    <script type="text/javascript">
        $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 0,
               max: 1000,
               values: [ 250, 1000 ],
               change: function( event, ui ) {
                minprice = (ui.values[0]);
                maxprice = (ui.values[1]);
                $('#slider-3 a:eq(0) span').empty().append(minprice);
                $('#slider-3 a:eq(1) span').empty().append(maxprice);
               }
           });
        $( "#min-price" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) );
        $( "#max-price" ).val( "$" + $( "#slider-3" ).slider( "values", 1 ) );
         });
        $( document ).ready(function() {
            $( "#slider-3 a:eq(0)" ).append( "<span>250</span>" );   
            $( "#slider-3 a:eq(1)" ).append( "<span>1000+</span>" ); 
            $('.refine .refine-colum  .list-size .size span, .refine .refine-colum .brand .list-brand ul li, .refine .refine-colum .footwear ul li, .refine .refine-colum .deals ul li').addClass('select');
          
                 $('.select').click(function(){
                    val_size = this.getAttribute("value");
                    val_color = this.getAttribute("value");
                    $('input[name="size"]').val(val_size);

                    if( $(this).hasClass( "selected") == false){
                        $(this).addClass('selected');
                    } else{
                        $(this).removeClass('selected');
                    }
                   
            });
        });
        $('.refine .refine-colum .list-color .color').click(function(){
            
            if( $(this).hasClass( "selected") == false){
                        $(this).addClass('selected').append(" <i class='hello fa fa-check' aria-hidden='true'></i>");
                    } else{
                        $(this).removeClass('selected');
                        $('.hello').remove();
                    }
             
        });
        
            $('.refine .refine-colum ul li').click(function(){
                var currentId = $(this).attr('id');
                
                $('.refine .refine-colum .'+currentId+'').animate({
                left: "+=50",
                height: "toggle"
              }, 800, function() {
          });
            });
    </script>

    </body>
</html>