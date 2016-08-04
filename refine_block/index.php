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



        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <!-- Javascript -->
      <script>
         $(function() {
            $( "#slider-3" ).slider({
               range:true,
               min: 0,
               max: 1000,
               values: [ 250, 1000 ],
               slide: function( event, ui ) {
                  mp = $( "#min-price" ).val(ui.values[ 0 ]);
                  console.log(mp);
                  $( "#max-price" ).val(ui.values[ 1 ]);

               }
           });
        // $( "#min-price" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) );
        // $( "#max-price" ).val( "$" + $( "#slider-3" ).slider( "values", 1 ) );
         });

        $( document ).ready(function() {
            $( "#slider-3 a:eq(0)" ).append( "<span><input id='min-price' disabled='disabled'></span>" );   
            $( "#slider-3 a:eq(1)" ).append( "<span><input id='max-price' disabled='disabled'></span>" );  
        });
         

      </script>

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
                              <!--   <input id="min-price">
                                <input id="max-price"> -->
                                    <div class="price prices"> 
                                        <div id="slider-3"></div>
                                    </div>
        						<li id="colors">COLOR</li>    
                                        <div class="select colors">
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
                                    <div class="select sizes" >
                                        <div class="list-size">
                                            <div class="size"><span>XS</span></div>
                                            <div class="size"><span>S</span></div>
                                            <div class="size"><span>M</span></div>
                                            <div class="size"><span>L</span></div>
                                            <div class="size"><span>XL</span></div>
                                            <div class="size"><span>XXL</span></div>
                                            <div class="size"><span>XXXL</span></div>
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


<script type="text/javascript">
$('.refine .refine-colum .deals ul li').click(function(){
     $(this).attr('class','selected');
});
$('.refine .refine-colum .footwear ul li').click(function(){
     $(this).attr('class','selected');
});
$('.refine .refine-colum .brand .list-brand ul li').click(function(){
     $(this).attr('class','selected');
});
$('.refine .refine-colum .select .list-size .size span').click(function(){
     $(this).attr('class','selected');
});
$('.refine .refine-colum .select .list-color .color').click(function(){
     $(this).append(" <i class='fa fa-check' aria-hidden='true'></i>");;
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