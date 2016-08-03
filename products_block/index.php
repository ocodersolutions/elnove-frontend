<!DOCTYPE html>
<html class="no-js">
    <head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<!-- css file for team member -->
		<link rel="stylesheet" type="text/css" href="../assets/css/custom_product_list.less" />

    </head>
    <body>
        <!-- start of team member -->
		<div class="product_item">
			<div class="uc_contact">
				<img class="uc_avatar" src="product_item.jpg">
				<div class="uc_link">
					<a href="#" class="uc_icon" ><img src="like_icon.jpg" alt=""></a>
					<a href="#" class="uc_icon" id="show" onclick="display_mode('object_share','show');"><img src="share_icon.jpg" alt=""></a>
					<a href="#" class="uc_icon" ><img src="allert_icon.jpg" alt=""></a>
					<a href="#" class="uc_icon buy_product"><span>BUY</span></a>
				</div>				
			</div>
			<div class="clear_float"></div>
			<div class="share_product" id="object_share" >
				<i class="fa fa-times " aria-hidden="true" onclick="display_mode('object_share','hide');"></i>
				<h2>SHARE VIA</h2>
				<div class="share_page">
					<a href="#">
						<i class="fa fa-facebook fa-2x " aria-hidden="true" ></i> 
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
			<div class="clear_float"></div>
			<div class="uc_info">
				<p class="uc_job"><span>65.00 CAD </span>&nbsp;48.00 CAD</p>
				<p>Puma Football Windbreaker</p>
			</div>
		</div>
		<!-- end of team member -->

		<script type="text/javascript">

			function display_mode(id, mode) {
			var e = document.getElementById(id);
			if(mode == 'show') e.style.display = 'block';
			else e.style.display = 'none';
	    }

		</script>

    </body>
</html>