<!DOCTYPE html>
<html class="no-js">
    <head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <title>header</title>
	    <link rel="stylesheet/less" type="text/css" href="header.less" />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
	    <script   src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.6.1/less.min.js"></script>
	    
    </head>
    <body>
	
        <div class="header-top-navbar ">
			<div class="top-bar">
				<div class="left-side">MENU</div>
				<div class="logo"><img src="logo.png" alt="" class="top-logo"></div>
		        <div class="right-side ">
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
				        <input type="search" placeholder="Search lorem ipsum dolor sit amet consectur..." name="search" class="searchbox-input" onkeyup="buttonUp();" required>
				        <button type="submit" class="searchbox-submit">
				        <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true" id="search_btn"></i></span></button>
				    </form>
		        </div>  
		        
        </nav>
        <script src="jquery-ui.js"></script>
       
        <script>
			//
		    $(document).ready(function(){
		            var submitIcon = $('.searchbox-icon');
		            var inputBox = $('.searchbox-input');
		            var searchBox = $('.searchbox');
		            var isOpen = false;
		            submitIcon.click(function(){
		                if(isOpen == false){
		                    searchBox.addClass('searchbox-open');
		                    inputBox.focus();
		                    isOpen = true;
		                } else {
		                    searchBox.removeClass('searchbox-open');
		                    inputBox.focusout();
		                    isOpen = false;
		                }
		            });  
		             submitIcon.mouseup(function(){
		                    return false;
		                });
		            searchBox.mouseup(function(){
		                    return false;
		                });
		            $(document).mouseup(function(){
		                    if(isOpen == true){
		                        
		                        submitIcon.click();
		                    }
		                });
		        });
		            function buttonUp(){
		                var inputVal = $('.searchbox-input').val();
		                inputVal = $.trim(inputVal).length;
		                if( inputVal == 0){
		                     $('.searchbox-input').val('');
		                } 
		            }
	            var icons = {
                header: "ui-icon-circle-arrow-e",
                activeHeader: "ui-icon-circle-arrow-s"
                };
                $( "#accordion" ).accordion({
                    icons: icons,
                    heightStyle:"content",
					collapsible: true,
                    active: false
                });
		
		  </script>   
    </body>
</html>