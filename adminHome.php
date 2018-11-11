<!DOCTYPE html>
<html lang="en-US" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="format-detection" content="telephone=no">

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/mobile.css" media="only screen and (max-device-width: 480px), (max-width:480px)" />
<link rel="stylesheet" type="text/css" href="css/mid.css" media="only screen and (max-device-width: 768px) and (min-device-width:481px), (min-width:481px) and (max-width:768px)" />
<link rel="stylesheet" type="text/css" href="css/max.css" media="only screen and (min-device-width: 769px) and (min-width:769px)" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.js" integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
.vl {
    border-left: 6px solid green;
    height: 500px;
}
</style>

<script>
$(document).ready(function(){
  $("#rem").click(function() {
    $('#rem1').hide();
    $('#rem').replaceWith('<td><button type="button" class="btn btn-primary">Activate</button></td>');
    $('#rem2').show();
  });
  $("#medApp").click(function() {
    $('#med').hide();
  });
  $("#goodApp").click(function() {
    $('#good').hide();
  });
});
</script>

<title>Green@CSU</title>

</head>

<body>

<div id="greenstripe">

	<div id="logocontainer">

		<div style="height:20px;">
        </div>

		<a href="http://colostate.edu/">
        <span class="NotToShow">CSU</span>
			<div id="csulogo">
			</div>
		</a>
		<div id="collegelogo">
			<a href="http://www.natsci.colostate.edu/">
        <span class="rwd-line">Sustainability</span>
			</a>
		</div>

	</div>

	<div id="greenstripe2">
    	<div id="deptcontainer">
        <div style="height:8px;"><h2 class="text-left" style="color:white">
          <div class="row">
            <div class="col-2">
              Green@CSU
            </div>
            <div class="col-8">

            </div>
            <div class="col-2 text-right">
              Admin
            </div>
          </div>
        </div>
      </div>
	</div>

</div>

<div style="height:32px;">
</div>

<div class="container text-center">
	<div class="row">
		<div class="col-2">

		</div>
		<div class="col">
      <div class="card border-success text-center">
        <div class="card-header">
          Admin
        </div>
        <div class="card-body">
          <h5 class="card-title">Hey there super user</h5>
          <p class="card-text">No new updates. <br />
            Auto Post: Last user action completed this morning at 9:54am.</p>
        </div>
        <div class="card-footer text-muted">
          1 Hour Ago by sysAdminStaff
        </div>
      </div>
		</div>
		<div class="col-2">

		</div>
	</div>
  <br />
  <div class="row">
    <div class="col">
      <div class="row">
        <div class="col-1">

    		</div>
        <div class="col-sm-5">
          <div class="card border-success">
            <div class="card-body">
              <h5 class="card-title">Add/Remove User</h5>
              <button class="btn" data-toggle="modal" data-target="#info" style="color:white; background: #286739;">Make Changes</button>

              <!--Start of modal for Learn More-->
              <div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Active Users</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">eID</th>
                            <th scope="col">Active?</th>
                            <th scope="col">Remove User</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Luke</td>
                            <td>Ewan</td>
                            <td>ewanlp</td>
                            <td>Yes</td>
                            <td><button type="button" class="btn btn-danger">Remove</button></td>
                          </tr>
                          <tr>
                            <td>Cam</td>
                            <td>the Ram</td>
                            <td>camram</td>
                            <td id="rem1">Yes</td>
                            <td id="rem2" style="display:none;">No</td>
                            <td id="rem"><button type="button" class="btn btn-danger">Remove</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="card border-success">
            <div class="card-body">
              <h5 class="card-title">Green Actions</h5>
              <button class="btn" data-toggle="modal" data-target="#greenModal" style="color:white; background: #286739;">Make Changes</button>

              <!--start of green action modal-->
              <div class="modal fade" id="greenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-center" id="exampleModalLabel">Approve or Remove Propsed Actions</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Action Name</th>
                            <th scope="col">Total Points</th>
                            <th scope="col">Suggest By</th>
                            <th scope="col">Approve?</th>
                            <th scope="col">Remove?</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr id="meh">
                            <td>A New Green Action</td>
                            <td>30</td>
                            <td>ewanlp</td>
                            <td><button type="button" class="btn btn-primary">Approve</button></td>
                            <td><button type="button" class="btn btn-danger">Remove</button></td>
                          </tr>
                          <tr id="good">
                            <td>An Awesome Green Action</td>
                            <td>1MM</td>
                            <td>camram</td>
                            <td><button type="button" id="goodApp" class="btn btn-primary">Approve</button></td>
                            <td><button type="button" class="btn btn-danger">Remove</button></td>
                          </tr>
                          <tr id="med">
                            <td>Mediocre Action</td>
                            <td>5</td>
                            <td>ewanlp</td>
                            <td><button type="button" class="btn btn-primary">Approve</button></td>
                            <td><button type="button" id="medApp" class="btn btn-danger">Remove</button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="col-1">

    		</div>
      </div>
      <br /><br />
      <div class="row">
        <div class="col-1">

        </div>
        <div class="col-sm-5">
          <div class="card border-success">
            <div class="card-body">
              <h5 class="card-title">Make Announcement</h5>
              <button class="btn" data-toggle="modal" data-target="#post" style="color:white; background: #286739;">Post Something</button>

              <!--Start of modal for Learn More-->
              <div class="modal fade" id="post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tell the People What They Want to Hear</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <textarea class="form-control" id="textComment" rows="3" placeholder="Announcement Here"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" id="addComment" class="btn btn-primary" data-dismiss="modal">Post</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="card border-success">
            <div class="card-body">
              <h5 class="card-title">Generate Report</h5>
              <button class="btn" data-toggle="modal" data-target="#report" style="color:white; background: #286739;">View Students</button>

              <!--start of green action modal-->
              <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-center" id="exampleModalLabel">Record your Green Action</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">actionID</th>
                            <th scope="col">Time</th>
                            <th scope="col">Date</th>
                            <th scope="col">Title</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Likes</th>
                            <th scope="col">eID</th>
                            <th scope="col">pointsEarned</th>
                            <th scope="col">Recurring?</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>123</td>
                            <td>0954</td>
                            <td>11-11-2018</td>
                            <td>Some Green Action</td>
                            <td>NULL</td>
                            <td>1</td>
                            <td>ewanlp</td>
                            <td>9</td>
                            <td>Once</td>
                          </tr>
                          <tr>
                            <td>132</td>
                            <td>0950</td>
                            <td>11-11-2018</td>
                            <td>Another Green Action</td>
                            <td>NULL</td>
                            <td>2</td>
                            <td>camram</td>
                            <td>1MM</td>
                            <td>Once</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" id="showLuke" class="btn" style="color:white; background: #286739;">Submit Action</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="col-1">

        </div>
      </div>
    </div>
  </div>
</div>
<br /><br />



                    <!-- Gold: rgb(200, 195, 114)     |     Green: #286739; -->





</body>
</html>
