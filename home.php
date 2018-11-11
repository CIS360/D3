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
  $('#drop1').change(function () {
    var selectedText = $(this).find("option:selected").text();
    if (selectedText==="Some Green Action"){
      var res = selectedText.concat("(3 Points) X ...");
      $("#results").text(res);
    }else if (selectedText==="Another Green Action"){
      var res = selectedText.concat("5 Points) X ...");
      $("#results").text(res);
    } else {
      var res = selectedText.concat("(10 Points) X ...");
      $("#results").text(res);
    }
});
  $("#drop2").change(function() {
    var selectedText = $(this).find("option:selected").text();
    if (selectedText==="N/A"){
      var res = "1 (No Multiplier)";
      $("#results2").text(res);
    } else if (selectedText==="N/A"){
      var res = "2 (Multiplier)";
      $("#results2").text(res);
    } else {
      var res = "3 (Multiplier)";
      $("#results2").text(res);
    }
  });
  $("#total").click(function() {
    var total = "9";
    $('#totalShow').show(total);
  });
  $("#showLuke").click(function() {
    $('#lukeInfo').show(total);
  });
  $("#comment").click(function() {
    $('#textComment').toggle();
    $('#addComment').toggle();
  });
  $("#addComment").click(function() {
    $('#validComment').show();
    $('#textComment').addClass('is-valid');
    $('#addComment').hide();
  });
  $("#likeBtn").click(function() {
    $('#likeGreen').show();
    $('#unlike').show();
    $('#likeBtn').hide();
    $('#comRem').hide();
  });
  $("#unlike").click(function() {
    $('#likeGreen').toggle();
    $('#unlike').toggle();
    $('#likeBtn').toggle();
    $('#comRem').toggle();
  });
  $("#comment2").click(function() {
    $('#textComment2').toggle();
    $('#addComment2').toggle();
  });
  $("#addComment2").click(function() {
    $('#validComment2').show();
    $('#textComment2').addClass('is-valid');
    $('#addComment2').hide();
  });
  $("#likeBtn2").click(function() {
    $('#likeGreen2').show();
    $('#unlike2').show();
    $('#likeBtn2').hide();
    $('#comRem2').hide();
  });
  $("#unlike2").click(function() {
    $('#likeGreen2').toggle();
    $('#unlike2').toggle();
    $('#likeBtn2').toggle();
    $('#comRem2').toggle();
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
              Luke
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
          Home
        </div>
        <div class="card-body">
          <h5 class="card-title">Welcome!</h5>
          <p class="card-text">Green@CSU is finally here. A one-stop-shop for everything sustainability-related here at CSU.
                            Sustainability is becoming very important in todays society, and we are spearheading the way with this new engaging and fun website!
                            Feel free to explore our site and when you enage in a sustainable action use this site to track your actions. You can compete with 
                            your friends and also earn amazing prizes. Each action you engage in will reward you points based on the certain action and how often you completed it.
		            Practice sustanability and have fun!
                            Go Rams! 
		</p>
        </div>
        <div class="card-footer text-muted">
          2 days ago
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
              <h5 class="card-title">Learn More About Green@CSU</h5>
              <p class="card-text">Want to learn more about how Green@CSU got started and what it is?</p>
              <button class="btn" data-toggle="modal" data-target="#info" style="color:white; background: #286739;">Learn More</button>

              <!--Start of modal for Learn More-->
              <div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Title Here!</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                             <p>
			        <h2>How Green@CSU Started</h2>
                                  Green@CSU got started by 4 CSU students who wanted make a site for sustainability. but make it interative and fun.
                                  The students egaged in sustianable actions but wanted to keep track of what they were doing and come up with a point system
                                  for each action. With the point systen in place they decided to make it a game and came up with prizes for students who had the most points.
                             </p>
			    
			     <p> 
				  <h2>How it works</h2> 
                                  When a student completes a action, they can log into this site using there EID crenditials.
                                  When logged in, students will see Enter a Green Action button, there you can enter a action you believe is sustainable and earn 
                                  points depending on what you did and how many times you have completed this action. Its that easy! Enter as many actions as you would like
                                  and it will update your profile along with your points. Check out your friends profiles and see how you match up! Have fun being sustainable Rams!
                             </p>
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
              <h5 class="card-title">Enter An Action</h5>
              <p class="card-text">Already off to a sustainable start? Go ahead and be rewarded for it!</p>
              <button class="btn" data-toggle="modal" data-target="#greenModal" style="color:white; background: #286739;">Enter an Action</button>

              <!--start of green action modal-->
              <div class="modal fade" id="greenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-center" id="exampleModalLabel">Record your Green Action</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-row">
                          <div class="col-6">
                            <div class="form-group">
                              <select class="custom-select btn" id="drop1" style="border: 3px solid #286739;" required>
                                <option value="">Select A Green Action</option>
                                <option value="1">Some Green Action</option>
                                <option value="2">Another Green Action</option>
                                <option value="3">A Different Category of Green Action</option>
                              </select>
                            </div>
        									</div>
                          <div class="col-6">
                            <button type="button" id="total" class="btn btn-block" style="color:white; background: #c8c372;">Total Points</button>
                            <br />
                            <div id="results" ></div>
                            <div id="results2" ></div>
                          </div>
                        </div>
                        <br />
                        <div class="form-row">
                          <div class="col-6">
                            <div class="form-group">
                              <select class="custom-select btn" id="drop2" style="border: 3px solid #286739;" required>
                                <option value="">Number of Times Completed?</option>
                                <option value="1">N/A</option>
                                <option value="2">Once</option>
                                <option value="3">More than Once</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-6">
                            <div id="totalShow" style="display:none;"><h5>9 Points - Nice!</h5></div>
                          </div>
                        </div>
                      </form>
                      <div class="row">
                        <div class="col-2">
                        </div>
                        <div class="col-8">
                          <h5>Describe Your Green Action</h5>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-2">
                        </div>
                      </div>
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

<!--Start of the Feed area-->

<div class="container text-center">
  <div class="row">
    <div class="col-1">

    </div>
    <div class="col">
      <div class="jumbotron">
        <h1 class="display-4">Feed</h1>
        <p class="lead">Take a look at all the things your peers are doing now to be sustainable!</p>
        <hr class="my-4">
	      
				<!--Start of the actual feed-->
				<div class="accordion" id="accordionExample">
				  <div class="card">
				    <div class="card-header" id="lukeInfo" style="color:white; background: #286739; display:none;">
				      <h5 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none; color: white;">
				          Luke Ewan | Some Green Action | 9 Points
				        </button>
				      </h5>
				    </div>
				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        <div class="row">
									<div class="col-4" style="border-right: 6px solid #286739;">
										<button type="button" class="btn btn-lg btn-block" style="color:white; background: #c8c372;">User Info</button>
										<br /><br />
										<img class="card-img" src="./images/user.png" alt="We look so good!" style="height:100px; width:100px;">
										<br /><br />
										Luke Ewan
										<br /><br />
										<div class="btn" style="color:white; background: #286739;">Total Pts: 27</div>
									</div>
									<div class="col-4" style="border-right: 6px solid #286739;">
										<button type="button" class="btn btn-lg btn-block" style="color:white; background: #c8c372;">Action</button>
                    <br /><br />
                    <strong>Some Green Action</strong> was completed <strong>Once</strong>.
									</div>
									<div class="col-4">
										<button type="button" class="btn btn-lg btn-block" style="color:white; background: #c8c372;">Badges & Points</button>
                    <br /><br />
                    <img class="card-img" src="https://image.shutterstock.com/image-vector/golden-badge-red-ribbon-260nw-600282221.jpg" alt="We look so good!" style="height:100px; width:100px;">
                    <br />
                    Congrats Luke, you earned the 'First Action' Badge.
                    <br /><br />
                    <button type="button" class="btn" style="color:white; background: #286739;">9 Points</button>
                    <br /><br />
									</div>
								</div>
								<br />
								<div row="">
									<h2>Comments</h2>
									<textarea class="form-control" id="exampleFormControlTextarea1" rows="3">I loved completing Some Green Action -  it made me feel like I was actually making a difference in the world even if it just a small action. The 9 points don't hurt, either!</textarea>
                  <br />
                  <div class="modal-footer">
                    <div class="col-7 text-right">
                      <div class="valid-feedback" id="likeGreen2" style="display:none;">
                        Comment Liked!
                      </div>
                      <div class="invalid-feedback" id="comRem2" style="display:none;">
                        Comment Unliked
                      </div>
                    </div>
                    <div class="col-5 text-right">
                      <button type="button" id="comment2" class="btn" style="color:white; background: #286739;">Comment</button>
                      <button type="button" id="likeBtn2" class="btn" style="color:white; background: #286739;">Like</button>
                      <button type="button" id="unlike2" class="btn" style="color:white; background: #286739; display:none;">Unlike</button>
                    </div>

                  </div>
                  <div>
                    <textarea class="form-control" id="textComment2" rows="3" style="display:none;" placeholder="Add Your Comment Here"></textarea>
                    <div class="valid-feedback" id="validComment2" style="display:none;">
                      Comment addded!
                    </div>
                  </div>
                  <br />
                  <button type="button" id="addComment2" class="btn btn-block" style="display:none; color:white; background: #286739;">Comment on Post</button>
                </div>
				      </div>
				    </div>
				  </div>
				  <div class="card">
						<div class="card-header" style="color:white; background: #286739;" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-decoration: none; color: white;">
									Cam the Ram | Another Green Action | 12 Points
								</button>
							</h5>
						</div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  <div class="col-4" style="border-right: 6px solid #286739;">
                    <button type="button" class="btn btn-lg btn-block" style="color:white; background: #c8c372;">User Info</button>
                    <br /><br />
                    <img class="card-img" src="https://i.pinimg.com/originals/1a/82/2b/1a822b19769ac6ab1c31388275d19e4e.jpg" alt="We look so good!" style="height:100px; width:100px;">
                    <br /><br />
                    Cam the Ram
                    <br /><br />
                    <div class="btn" style="color:white; background: #286739;">Total Pts: 1MM</div>
                  </div>
                  <div class="col-4" style="border-right: 6px solid #286739;">
                    <button type="button" class="btn btn-lg btn-block" style="color:white; background: #c8c372;">Action</button>
                    <br /><br />
                    <strong>Another Green Action</strong> was completed <strong>More than Once</strong>.
                  </div>
                  <div class="col-4">
                    <button type="button" class="btn btn-lg btn-block" style="color:white; background: #c8c372;">Badges & Points</button>
                    <br /><br />
                    <img class="card-img" src="https://image.shutterstock.com/image-vector/golden-badge-red-ribbon-260nw-600282221.jpg" alt="We look so good!" style="height:100px; width:100px;">
                    <br />
                    Congrats Cam, you earned the '10th Action' Badge.
                    <br /><br />
                    <button type="button" class="btn" style="color:white; background: #286739;">12 Points</button>
                    <br /><br />
                  </div>
                </div>
                <br />
                <div row="">
                  <h2>Comments</h2>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Wow, this website is so fun and easy to use. What a great application! Bhaa.</textarea>
                  <br />
                  <div class="modal-footer">
                    <div class="col-7 text-right">
                      <div class="valid-feedback" id="likeGreen" style="display:none;">
                        Comment Liked!
                      </div>
                      <div class="invalid-feedback" id="comRem" style="display:none;">
                        Comment Unliked
                      </div>
                    </div>
                    <div class="col-5 text-right">
                      <button type="button" id="comment" class="btn" style="color:white; background: #286739;">Comment</button>
                      <button type="button" id="likeBtn" class="btn" style="color:white; background: #286739;">Like</button>
                      <button type="button" id="unlike" class="btn" style="color:white; background: #286739; display:none;">Unlike</button>
                    </div>

                  </div>
                  <div>
                    <textarea class="form-control" id="textComment" rows="3" style="display:none;" placeholder="Add Your Comment Here"></textarea>
                    <div class="valid-feedback" id="validComment" style="display:none;">
                      Comment addded!
                    </div>
                  </div>
                  <br />
                  <button type="button" id="addComment" class="btn btn-block" style="display:none; color:white; background: #286739;">Comment on Post</button>
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


<div id="textarea">
</div>


                    <!-- Gold: rgb(200, 195, 114)     |     Green: #286739; -->





</body>
</html>
