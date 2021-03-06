<!-- Footer -->
		<footer class="container-fluid">
			<div class="row">
			    <div class="line-footer"></div>
				    <div class="footer-above">
				    	<div class="menu-footer col-lg-6">
					        <div class="list-menu">
					            <ul>
					                <li>How it work</li>
					                <li>About Us</li>
					                <li>Blog</li>
					                <li>FAQ</li>
					                <li>Shipping</li>
					                <li>Pricing</li>
					                <li>Exchange & Return</li>
					                <li>Careers</li>
					                <li>Contact Us</li>
					            </ul>
					        </div>
					    </div>

					    <div class="newsletter col-lg-4">
				            <div class="newsletter-wrap">
				                <div class="newsletter-signup">
				                	<span>Sign up for newsletter</span>
				                </div>
				                <div class="newsletter-input ">
					                <input placeholder="Your Email Address Here" >
					                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
				                </div>
				            </div>
				        </div>

				        <div class="footer-social col-lg-2">
				            <div class="social-block">
				            <div class="social" ><i class="fa fa-facebook" aria-hidden="true"></i></div>
				            <div class="social" ><i class="fa fa-twitter" aria-hidden="true"></i></div>
				            <div class="social" ><i class="fa fa-instagram" aria-hidden="true"></i></div>
				            <div class="social" ><i class="fa fa-youtube" aria-hidden="true"></i></div>
				          
				            </div>
				        </div>
				    </div>
					
				    <div class="copyright">
				    	<div class="copyright-wrap">
					        <p class="copyright-text"> COPYRIGHT 2016 STITCH STYLE SOLUTIONS INC.<span> ALL RIGHTS RESERVED</span>
					        </p>
					    </div>
				        <div class="terms">
				        	<div class="terms-wrap">
						        <span>|</span>
						        <p class="copyright-text"> TERMS &amp; CONDITIONS</p>
						        <span>|</span>
						        <p class="copyright-text"> PRIVACY &amp; POLICY</p>
					        </div>
				        </div>
				    </div>
		</div>
		</footer>
		<!-- End-Footer -->

        <script>
			//
		    $(document).ready(function(){
	            var submitIcon = $('.searchbox-icon');
	            var inputBox = $('.searchbox-input');
	            var searchBox = $('.searchbox');
	            var isOpen = false;
	            submitIcon.click(function(e){
	            	if(inputBox.val()==""){
	            		e.preventDefault();
	            	}
	                if(isOpen == false){
	                    searchBox.addClass('searchbox-open');
	                    inputBox.focus();
	                    isOpen = true;
	                     $("#search").css("z-index","99")
	                    
	                } else {
	                    searchBox.removeClass('searchbox-open');
	                    inputBox.focusout();
	                    isOpen = false;
	                   	$("#search").removeAttr("style");
	                   	//$("#show-hide-menu").click();
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
	            var flag = false;
	            $("#show-hide-menu").click(function(){
	            	$("#show-hide-menu").toggleClass("angleplus");
	            	if(flag == false){
	                    $('.searchbox-icon').click();
	                    flag = true;
	                } else {
	                	flag = false;
	                }
	            	
	            });
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
            $( "#accordion-m" ).accordion({
                icons: icons,
                heightStyle:"content",
				collapsible: true,
                active: false
            });
			$("#pop-menu").fullScreenPopup({
				bgColor: '#fff'
			});
			$("#refine-search-popup").fullScreenPopup({
				bgColor: '#fff'
			});
			$("#sort-item-popup").fullScreenPopup({
				bgColor: '#fff'
			});
			$("#m-show-userbox").click(function(event) {
	            $("#user-mblock").css('display','block');
	        });
	        $("#hid-userbox").click(function(){
	        	$("#user-mblock").removeAttr("style");
	        })

	        // $("#banner").css("margin-top",function(){
	        // 	return $(this).parent().find("#header-block").height();
	        // });
	        
	        $(window).scroll(function(){
	        	if($(this).scrollTop() >= $("#header-block").height())
	        	{
	        		$("#header-block").css({"position": "fixed", "width": "100%", "top": "0px", "background": "#fff", "z-index": "99"});
	        		if(window.innerWidth >= 768) 
	        		{		        		
		        		$("#search").show();
		        		$(".form_search").hide();
		        		$("#header-container").find(".row").addClass("wrap-header-top-navbar");
		        		$(".searchbox").addClass("searchbox-open").css("z-index", "99");
	        		}
	        		else 
	        		{
	        			$(".form_search").hide();
	        		}
	        	}
	        	else 
	        	{
	        		$("#header-block").css("position","static");
	        		if(window.innerWidth >= 768) 
	        		{		        		
		        		$("#search").hide();
		        		$(".form_search").show();
		        		$("#header-container").find(".row").removeClass("wrap-header-top-navbar");
		        		$(".searchbox").removeClass("searchbox-open");
	        		}
	        		else
	        		{
	        			$(".form_search").hide();
	        		}
	        	}
	        });
	        
		</script>  

  	</body>
</html>