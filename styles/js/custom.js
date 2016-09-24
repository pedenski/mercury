/* Load apps status from ajax_getapps.php */
$(document).ready(function(){
    
  /*app status */	
  $( "#status" ).load( "./widgets/ajax_getapps.php", function( response, status, xhr ) {
  $('#loading').hide();

});
  /* load sms from db */
  $( "#sms" ).load( "./widgets/ajax_sms.php", function( response, status, xhr ) {
  $('#loading').hide();

  /*activate time ago - must above #sms widget to work */
  jQuery("time.timeago").timeago();
  $("[data-toggle='tooltip']").tooltip();
 	 
  $('.digits').click(function(e) {
  	$("[data-toggle='tooltip']").tooltip();
    e.preventDefault();
	});
  });

   $(".showmore").click(function(){
         $('.composer_checkb').toggle();

    });

  /** SHOW OPTIONS CHECKBOX 
  $('.show_num').change(function(){
  if($(this).prop("checked")) {
    $('.composer_checkb').show();
    $(".composer_area").animate({height : "135px"}, "fast");
    $(".composer_control").slideDown("fast"); 


  } else {
    $('.composer_checkb').hide();
    $(".composer_area").animate({height : "48px"}, "fast");
    $(".composer_control").slideUp("fast"); 
  }
});**/


  /* AJAX - submit comment to database and display comment without refresh */

  $(".fcomposer").submit(function(e) {
      var url = "./widgets/ajax_submitsms.php"; // the script where you handle the form input.

      $.ajax({
             type: "POST",
             url: url,
             data: $(".fcomposer").serialize(), // serializes the form's elements.
             success: function(data)
             {
                 $(data).fadeIn("slow").prependTo('ul.timeline');
                 $(".composer").val('');
                 console.log(data); // show response from the php script.
             }
           });

      e.preventDefault(); // avoid to execute the actual submit of the form.
  });





}); /* $(document).ready





/* COMPOSER */
$(function() {
    $('.composer').focus(function() {

    	$(".composer_area").animate({height : "62px"}, "fast");
    	$(".composer_control").slideDown("fast"); 
});
});



/* COMPOSER COUNT */

function countChar(val) {
        var len = val.value.length;
        if (len >= 80) {
          val.value = val.value.substring(0, 80);
        } else {
          $('#charNum').text(80 - len);
        }
};


/* AJAX - LOAD MORE */
/* ANIMATION NOT WORKING */

$(function() {
	$(document).on('click','.widget_load_more', function() {

		var last_id = $(this).attr('last_id');
		//console.time("loadoldpost");
		$.ajax({
			type:'POST',
			url:"./widgets/ajax_moresms.php",
			data: "last_id="+last_id,
			success: function(html) {
				console.log(html); //success
				var data = html; // insert to var data

				$('.widget_load_more').remove(); //remove load more

				$(data).fadeIn("slow").appendTo('#sms'); //display data
				$("time.timeago").timeago(); //must be below after the append of data to render the timeago() 
				$("[data-toggle='tooltip']").tooltip(); //must be below after the append of data to render the tooltip() 

			}
		}); 

		console.timeEnd("loadoldpost");
	return false; /* avoid being directed to top when <a href="#" is clicked */
	});
});


//[^@][0-9]{1,3} @1234


/* AJAX - submit comment to database and display comment without refresh */
$(document).ready(function() {
  
});
	
