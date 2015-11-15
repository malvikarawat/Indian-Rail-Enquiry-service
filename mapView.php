<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Indian Enquary with map</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/map-view.css" rel="stylesheet">

   
  </head>
  <body>

    <div class="slide" id="map-view">
      <div class="container-fluid">
        <div class="row">


          <!-- map form container -->
          <div class="col-xs-12 col-md-6 col-md-offset-1" id="left-nav">


            <div class="col-xs-12 col-md-4 input-container">
              <div class="form-label">From Station*</div>
              <input type="text" class="form-control" id="srcStn">
              <div id="srcStn-drop">
              </div>
            </div>

            <div class="col-xs-12 col-md-4 input-container">
              <div class="form-label">To Station*</div>
              <input type="text" class="form-control" id="srcStn">
              <div id="srcStn-drop">
              </div>
            </div>

            <div class="col-xs-12 col-md-3 input-container">
              <div class="form-label">Date of journey</div>
              <input type="date" class="form-control" min="<?=date('Y-m-d');?>" id="date_">
            </div>

            <div class="col-xs-12 col-md-1 submit-container">
              <div class="form-label">&nbsp;</div>
              <span class="submit-map"><span class="glyphicon glyphicon-send"></span></span>
            </div>
            
        </div>
         <!-- end map form container -->

         <div class="col-xs-12 col-md-12" id="map-wrapper">
          <div id="map"></div>
         </div>
      </div>
    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
  window.onload = function(){
    $("#map").width($(document).width());
    $("#map").height($(document).height());
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/javascript.js"></script>
  </body>
</html>