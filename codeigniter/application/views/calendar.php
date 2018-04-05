<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charse t="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  

        <title>Calendar Display</title>
        <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" >
        <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css.map"); ?>" rel="stylesheet" >
        <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet" >
        <link rel="stylesheet" href="<?php echo base_url("assets/style.css"); ?>" type="text/css">
        <link href='assets/bootstrap/css/fullcalendar.min.css' rel='stylesheet' />
        <link href='assets/bootstrap/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <script src='assets/js/moment.min.js'></script>
        <script src='assets/js/jquery.js'></script>
        <script src='assets/js/bootstrap.min.js'></script>
        <script src='assets/js/fullcalendar.min.js'></script>
<script type="text/javascript">
var date_last_clicked = null;
$(document).ready(function() {
    $('#calendar').fullCalendar({
     eventSources: [
         {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>calendar/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             }
         },
     ],
    eventClick: function(event, jsEvent, view) {
          $('#name').val(event.title);
          $('#category').val(event.kategori);
          $('#description').val(event.description);
          $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          if(event.end) {
            $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
          } else {
            $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
          }
          $('#event_id').val(event.id);
          $('#editModal').modal();
   },
 });
});
</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body id="body">
  <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
             <div class="container-fluid">
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url('assets/img/fti.png'); ?>" width="50" height="45" class="logo" alt="">
                </a>
                 </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">
                 <!--li><img src="img/logo.png" alt="logo-ukdw " id="logo"></li-->
                 <li class="active kategori" id="home" ><a href="HalamanUtama.html" ><span id="kategori">Beranda</span></a></li>
                 <li class="kategori" ><a href="MuscleBuild.html"><span id="kategori">Partner</span></a></li>
                 <li class="kategori"><a href="Healthy.html"><span id="kategori">Contact Us</span></a></li>
             </ul>
             <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                    <div class="input-group" id="search">
                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                    </form>
                    </div>
             </div><!-- /.navbar-collapse -->

         </div><!-- /.container-fluid -->

 </nav>
  <div id='calendar'></div>

        <h4 class="modal-title" id="myModalLabel">Create MOU</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendar/add_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Category</label>
                <div class="col-md-8 ui-front">
                    <select class="selectpicker" name="category">
    			<option>Vacancy</option>
    			<option>Sponsorship</option>
    			<option>Internship</option>
	      </select>
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Event">
        <?php echo form_close() ?>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Calendar Event</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendar/edit_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="" id="name">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description" id="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Category</label>
                <div class="col-md-8 ui-front">
                    <select class="selectpicker" name="category" id="category">
    			<option>Vacancy</option>
    			<option>Sponsorship</option>
    			<option>Internship</option>
	      </select>
                </div>
        </div>        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Delete Event</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
            <input type="hidden" name="eventid" id="event_id" value="0" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>


</body>
</html>