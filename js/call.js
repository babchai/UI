// JavaScript Document

   function retrieveData(container, func, id)
   {
	   //alert(container);
	   
	   //$(container).html('<div class="loading"><img src="images/loading.gif" /></div>');
	   //$(container).prepend('<div class="loading"><img src="images/loading.gif" /></div>');

	   $.post(
	   "retrieve.php",
	   { "func": func, "id":id },
 		function(data) {
			
			//$(container).html('');
			//$('.loading').remove();
   			$(container).html(data[0]);
 		}, 
 			"json"
		);   
   }
   
   
    function retrieveData2(container, func, id)
   {
	   
	   $.getJSON('retrieve.php',  { "func": func, "id":id }, function(data) {
            alert(data.toSource()); //uncomment this for debug
            alert (data.content); //further debug
            $(container).html(data.content);
        });
   }  
