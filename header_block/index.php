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
	    <link rel="stylesheet" href="clean_accordion.css"/>
    </head>
    <body>
        <div class="row header-top-navbar ">
			<div class="top-bar">
				<div class="left-side">MENU</div>
				<div class="logo">ELNOVE</div>
		        <div class="right-side">
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
			       
			        
		        <nav id="menu">
	            
	        </nav>
		    </div>
        </div>
        <script src="jquery-ui.js"></script>
        <script>
			$(function() {
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
            });
		  </script>   
    </body>
</html>