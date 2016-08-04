  		<!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.6.1/less.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
         <script src="assets/js/jquery.fullscreen-popup.min.js"></script>

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
		  </script>  

  	</body>
</html>