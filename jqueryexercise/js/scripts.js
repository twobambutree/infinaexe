$( document ).ready(function() {
    console.log( "ready!" );

	$(".next").click(function() {
  		var from = $(this).parent().parent().parent().attr("id");
  		from = '#' + from;
  		$( from ).addClass( "hide" );
  		var to = from.substr(from.length -1);
  		to = parseInt(to) + 1;
  		to = '#page-' + to;
  		$( to ).removeClass( "hide" );
	});

  $(".previous").click(function() {
      var from = $(this).parent().parent().parent().attr("id");
      from = '#' + from;
      $( from ).addClass( "hide" );
      var to = from.substr(from.length -1);
      to = parseInt(to) - 1;
      to = '#page-' + to;
      $( to ).removeClass( "hide" );

  });

  $(".start").click(function() {
      var from = $(this).parent().parent().parent().attr("id");
      from = '#' + from;
      $( from ).addClass( "hide" );
      to = '#page-1';
      $( to ).removeClass( "hide" );

  });
});
