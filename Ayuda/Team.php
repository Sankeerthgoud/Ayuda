<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayuda</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AYUDA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="active"><a href="#">Team</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help Us <b class="caret"></b></a>
              <ul class="dropdown-menu">

                <li><a href="donate.php">Donate</a></li>
                <li><a href="volunteer.php">Volunteer</a></li>
              </ul>
            </li>
            <li><a href="#contact" data-toggle="modal">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="Team-Members">
            <div class="container">
                <h2>Team</h2>
                <p>These are the board members of Ayuda for the Year 2015-2016 and these guys rocks.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                             <img src="img\sankeerth.jpg"  >

                        </div>
                         <div class="thumbnail">
                             <img src="img\pooja1.jpg" >
                        </div>
                        <div class="thumbnail">
                            <img src="img\suder.jpg" >
                       </div>
                       <div class="thumbnail">
                           <img src="img\saurav.jpg" >
                      </div>

                    </div>

                     <div class="col-sm-4">
                        <div class="thumbnail">

                              <img src="img\balaji.jpg" >
                        </div>
                         <div class="thumbnail">
                             <img src="img\waqar.jpg" >
                        </div>
                        <div class="thumbnail">
                            <img src="img\swadha.jpg" >
                       </div>
                    </div>

                     <div class="col-sm-4">
                        <div class="thumbnail">
                             <img src="img\linga.jpg" >
                        </div>
                        <div class="thumbnail">
                            <img src="img\sucheta.jpg">
                        </div>
                        <div class="thumbnail">
                            <img src="img\nikhil.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Fixed footer -->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
    	<div class="container">
    		<div class="navbar-text pull-left">
    			<p>© Sankeerth</p>
    		</div>
    		<div class="navbar-text pull-right">
          <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
    			<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
    			<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
    		</div>
    	</div>
    </div>

    <?php
             if(isset($_POST['sub'])) {
                $dbhost = 'localhost:3306';
                $dbuser = 'root';
                $dbpass = '';
                $dbname = 'ayuda';
                $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

                if($conn->connect_error) {
                   die('Could not connect: ' . $conn->connect_error);
                }


                   $name = $_POST['contact-name'];
                   $email = $_POST['contact-email'];
                   $message = $_POST['contact-message'];

                $sql = "INSERT INTO contact ". "(name,email,message) ". "VALUES('$name','$email','$message')";
                if ($conn->query($sql) === TRUE) {
                    echo "Message Sent successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();

             }else {
                ?>
    <!-- Bootstrap core JavaScript-->
    <div class="modal fade" id="contact" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<form method = "post" action = "<?php $_PHP_SELF ?>" class="form-horizontal" role="form">
    				<div class="modal-header">
    					<h4>Contact<h4>
	    			</div>
	    			<div class="modal-body">
    					<div class="form-group">
    						<label for="contact-name" class="col-sm-2 control-label">Name</label>
    						<div class="col-sm-10">
    							<input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="First & Last Name">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-email" class="col-sm-2 control-label">Email</label>
    						<div class="col-sm-10">
    							<input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="example@domain.com">
    						</div>
    					</div>
    					<div class="form-group">
    						<label for="contact-message" class="col-sm-2 control-label">Message</label>
    						<div class="col-sm-10">
    							<textarea class="form-control" name="contact-message" id="contact-message" rows="4" ></textarea>
    						</div>
    					</div>
	    			</div>
	    			<div class="modal-footer">
    					<a class="btn btn-default" data-dismiss="modal">Close</a>
    					<button type="submit" class="btn btn-primary" name="sub" id="sub">Send</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
    <?php
         }
      ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
