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
    <link href="css/style.css" rel="stylesheet">

   
  </head>
  <body>
    <nav class="navbar navbar-default"></nav>


    <div class="slide" id="landing">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <div class="col-xs-12 col-md-1">
              <div class="tab">Train</div>
            </div>
            <div class="col-xs-12 col-md-12 form-container">
              <div class="col-xs-12 col-md-12">
                <div class="box-heading">Indian Rail Enquiry service with Map</div>
              </div>

              <div class="col-xs-12 col-md-5 input-container">
                <div class="form-label">From</div>
                <input type="text" class="form-control" id="srcStn">
                <div id="srcStn-drop">
                  
                </div>
              </div>

              <div class="col-xs-12 col-md-1"><div class="icon"><i class="glyphicon glyphicon-arrow-right"></i></div></div>

              <div class="col-xs-12 col-md-5 input-container">
                <div class="form-label">to</div>
                <input type="text" class="form-control" id="destStn">
                <div id="destStn-drop">
                  
                </div>
              </div>

              <div class="col-xs-12 col-md-5 input-container">
                <div class="form-label">departure</div>
                <input type="date" class="form-control" min="<?=date('Y-m-d');?>" id="date_">
              </div>

              <div class="col-xs-12 col-md-1">&nbsp;</div>

              <div class="col-xs-12 col-md-5 input-container">
                <div class="form-label">class</div>
                <select class="form-control" id="class">
                  <option>Sleeper Class</option>
                  <option>Third AC</option>
                  <option>Second AC</option>
                  <option>First AC</option>
                  <option>Second Seating</option>
                  <option>AC chair Car</option>
                  <option>First Class</option>
                </select>
              </div>

              <div class="col-xs-12 col-md-5 input-container">
                <div class="form-label">email (MANDATORY)</div>
                <input type="text" class="form-control" id="email">
              </div>

              <div class="col-xs-12 col-md-12" style="border-top: 1px solid lightgray;margin-top: 40px;padding-bottom: 20px;"></div>

              <div class="col-xs-12 col-md-3">
                <div id="search">Search Trains</div>
              </div>


            </div>
          </div>

          <div class="col-xs-12 col-md-4">
            <div class="col-xs-12 col-md-12">
              <div class="tab">Train Between Stations</div>
            </div>
            <div class="col-xs-12 col-md-12" style="paddind:0px;" id="trn-between">

            </div>

          </div>
        </div>
      </div>
    </div>


    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/javascript.js"></script>
  </body>
</html>