(function(){

    var apiKey = new Array("oxpzb4196","znjfp9884","mdnio2524","nwdby6281","gongm6412");

    for (var i = 0; i < apiKey.length; i++) {
      
      $.get("mod/chekForKey.php",{key: apiKey[i]},function(data){
        if(!data==0){
          return false;
        }
      });

    };






$(document).ready(function(){

  
  

  

 
	
  var srcActive = false;
  var destActive = false;



  $(document).on("click", "#srcStn-drop > .Stn" ,function(){
    $srcStnCode = $(this).attr('data-code');
    $_src = $(this).attr('data-name');
    $("#srcStn").val($_src);
    srcActive = true;
  });

  $(document).on("click", "#destStn-drop > .Stn", function(){
    $destStnCode = $(this).attr('data-code');
    $_dest = $(this).attr('data-name');
    $("#destStn").val($_dest);
    destActive = true;
  });



	$("#srcStn").keyup(function(){
		$srcStn = $(this).val();

		$.get('mod/stations.php',{Stn: $srcStn}, function(data){
			
      $('#srcStn-drop').show();
			$('#srcStn-drop').html(data);
		});

	});

	$("#destStn").keyup(function(){
		$srcStn = $(this).val();

		$.get('mod/stations.php',{Stn: $srcStn}, function(data){
			
      $('#destStn-drop').show();
			$('#destStn-drop').html(data);
		});

	});



  $(document).on("click", ".Stn", function(){
    $(this).parent("#srcStn-drop, #destStn-drop").hide();
  });



  $("#search").hover(function(){
    $date_ = $("#date_").val();
    
    
  });





  $(document).on("click", "#search", function(){
    if(srcActive && destActive){
      $.get('mod/trainBetweenStn.php', {srcCode: $srcStnCode, destCode: $destStnCode, date: $date_}, function(data){
        $('#trn-between').html(data);
      });
    }
  });



//map

function initialize(){
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(30.3180, 78.0290),
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapMaker: true
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);

// end map
	
  




});
}());