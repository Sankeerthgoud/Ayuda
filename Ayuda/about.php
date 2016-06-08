<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayuda</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet">
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
            <li class="active"><a href="#about">About</a></li>
            <li><a href="Team.php">Team</a></li>
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
    <div id="body"></div>
        <div id="info">
            <h3><u>About Us</u></h3><br>
            <p>Ayuda is a NGO which includes a group of young, motivated individuals working together for the uplift of society with special emphasis on the rights of women. It aims to strengthen the process of socio-economic development and empowerment of the disadvantaged sections of the society, at the grassroots level, through transfer of knowledge without ethnic, political, religious or any other biases.</p>
            <br/><br/>

        </div>
        <div id="textPlace">
            <img id="img" src="img\11.jpg"/>
            <div class="line"></div>
            <div class="content">
                <label><a id="C1">What We Do</a></label><br/>
                <p class="completeData">
                    We at Ayuda aim to provide assistance to underprivileged schools and children .Our goals are to establish a firm student volunteer network which is widespread, multilingual, multi talented and most importantly committed towards the purpose. We also want to make this network easily accessible to the string of underprivileged schools in India and millions of poverty ridden children who do not have basic support to study and grow in life but strive to do so. By making our operations online we want to involve a greater helping population and make it more transparent and easy to approach. As the founding members are students, the organisation understands and relates to the youth of the country and wants to help millions of students to realise their dream of helping build a better country. We also conduct various campaigns and teaching workshops in underprivileged schools on regular basis. The interested person registers himself online as a volunteer and the tasks the organization receives through various schools or other organisations are assigned to the appropriate volunteer base. We also reward the volunteers for the work he/she does towards the cause.
                </p>
            </div>
             <div class="line">
             </div>
            <div class="content">
                <label><a id="C2">Our Philosophy</a></label><br/>
                <p class="completeData">As a catalyst to bring changes in the lives of millions girls and women, who are not privileged, by addressing the real need at the grassroots level and also enabling the civil society across the world to engage proactively in the change process following the philosophy of Civic Driven Change and adopting the highest standard of governance and thereby emerging as a leading knowledge and technology driven, innovative and scalable international development organisation from India.</p>
            </div>
              <div class="line">
              </div>
            <div class="content">
                <label><a id="C3">Photos & Videos</a></label><br/>
                <p class="completeData"> We love to conduct events and create public awareness.<br/>
                View our contributions to the society  with the photo-gallery link provided.<br/><br/>

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
