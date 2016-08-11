
	<div class="container-fluid">
	    <div class="row">
	        
	        <div class="col-lg-2 col-sm-3 col-lg-offset-1 " id="refineseacrch-left">
	       		<div class="row">
	       			<div class="box refine-search col-lg-12 hidden-xs" >
		         		<span>REFINE SEARCH</span>
		         	</div>
		        	<div class="box refine-search col-lg-12 visible-xs" id="refine-search-popup" data-popup="#rfs-content-popup">
		         		<span>REFINE SEARCH</span>
		         	</div>
		         	<div class="box popup-sort-item " id="sort-item-popup" data-popup="#sis-content-popup" >
		         		<span>SORT ITEMS</span>
		         	</div>
		         	<div class="box sort-list "><i class="fa fa-bars" aria-hidden="true"></i></div>
		         	<div class="box sort-grid "><i class="fa fa-th-large" aria-hidden="true"></i></div>
	         	</div>
	         </div>
	        <div class="col-lg-8 col-sm-9 selected_right ">
		        <div class="option-filter">
		        	<input type="radio">
		        	<span>ALL</span>
		        	<input type="radio">
		        	<span>SALE</span>
		        	<input type="radio">
		        	<span>SAVE ITEMS</span>
		        </div>
		        <div class="option-selected">
		        	<div class="item"><span>Puma</span><i class="fa fa-times" aria-hidden="true"></i></div>
		        	<div class="item"><span>Blue</span><i class="fa fa-times" aria-hidden="true"></i></div>
		        	<div class="item"><span>Special Offer </span><i class="fa fa-times" aria-hidden="true"></i></div>
		        </div>
		        <div class="sort-item " id="accordion-select" >
		        	<span class="uc_head_line">
                        <a href="" class="uc_link_tittle">Lowest price</a>
                    </span>
                    <div class="uc_line_content">
                        <ul class="uc_des">
                        	<li><a href="">Relevance</a>
                            </li>
                            <li><a href="">Lowest price</a>
                            </li>
                            <li><a href="">Highest price</a>
                            </li>
                            <li><a href="">Most Popular</a>
                            </li>
                            <li><a href="">Favorites</a>
                            </li>
                            <li><a href="">Newest</a>
                            </li>
                        </ul>
                    </div>
                    <div class="sort-filter-contentpopup visible-xs" id="sis-content-popup">
                    	<p class="m-title">SORT ITEMS BY</p>
                        <ul>
                        	<li><a href="">Relevance</a>
                            </li>
                            <li><a href="">Lowest price</a>
                            </li>
                            <li><a href="">Highest price</a>
                            </li>
                            <li><a href="">Most Popular</a>
                            </li>
                            <li><a href="">Favorites</a>
                            </li>
                            <li><a href="">Newest</a>
                            </li>
                        </ul>
                    </div>
		        	<!-- <select>
		        		<option>Relevance</option>
		        		<option>Lowest price</option>
		        		<option>Highest price</option>
		        		<option>Most Popular</option>
		        		<option>Favorites</option>
		        		<option>Newest</option>
		        	</select> -->
		        </div>

	        </div>
	        
	    </div>
	</div>  
<script>
jQuery(document).ready(function($) {
	 $("#refine-search-popup,#pop-menu,#sort-item-popup").click(function(){
	 	var w = jQuery(".fsp-content").width();
	 	$("p.m-title").css('width',w);
 //    console.log( "You clicked a paragraph:"+ width );
	});
    $(window).resize(function(){
    	var width = jQuery(".fsp-content").width();
    	$("p.m-title").css('width',width);
	});
       
});
    
</script>
