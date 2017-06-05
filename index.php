<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1.0" name="viewport">
	<title>t1m9m | Portfolio</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link href="css/style.css" media="screen,projection" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//cdn.materialdesignicons.com/1.9.32/css/materialdesignicons.min.css">
</head>
<body>
    <div class="row">
        <div class="col s12 m4 l3">
            <ul id="slide-out" class="side-nav fixed">
                <li class="col s12 li_section" style="text-align: center;">
                    <form>
						<div class="input-field waves-effect waves-light btn black" style="padding: 0 40px 45px 40px">
			                <input placeholder="Search" type="text">
			            </div>
                    </form>
                </li>
                <li class="col s12 li_section" style="line-height: 25px; text-align: justify;">
					<p style="padding: 0 15px">
						It is a long established fact that a reader will 
						be distracted by the readable content of a page 
						when looking at its layout. The point of using 
						Lorem Ipsum is that it has a more-or-less normal 
						distribution of letters, as opposed to using 
						'Content here, content here', making it look 
						like readable English. Many desktop publishing 
						packages and web page editors now use Lorem 
						Ipsum as their default model text, and search.
					</p>
				</li>
                <li class="col s12 li_section">
					<a class="waves-effect waves-light btn black" href="http://support.t1m9m.com" target="_blank">Support</a>
                </li>
                <li class="col s12 li_section" style="text-align: center;">
					<span class="btn-floating waves-effect waves-light black">
						<a href="https://github.com/t1m9m" target="_blank">
							<i class="mdi mdi-github-circle"></i>
						</a>
					</span>
					<span class="btn-floating waves-effect waves-light blue darken-2">
						<a href="https://www.linkedin.com/in/t1m9m/" target="_blank">
							<i class="mdi mdi-linkedin"></i> 
						</a>
					</span>
					<span class="btn-floating waves-effect waves-light green">
						<a href="http://t1m9m.deviantart.com/" target="_blank">
							<i class="mdi mdi-deviantart"></i>
						</a>
					</span>
					<span class="btn-floating waves-effect waves-light red darken-4">
						<a href="https://www.last.fm/user/t1m9m" target="_blank">
							<i class="mdi mdi-lastfm"></i>
						</a> 
					</span>
                </li>
                <li class="col s12 li_section">
					<a class="waves-effect waves-light btn black" href="http://tahsinalam.com" target="_blank">
						&copy;
						<?php echo date('Y'); ?> 
						t1m9m<sup> TM</sup>
					</a>
                </li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>

        <div class="col s12 m8 l9">
            <!-- Projects -->
            <div class="section">
    			<div class="row">
				<?php
					$string 	=	file_get_contents("projects.json");
					$json_data	=	json_decode($string, true);
					
					foreach ($json_data as $key => $value):
				?>
                    <div class="col s12 m4">
                        <div class="card green lighten-1">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="<?php echo $value['image']; ?>">
                            </div>
                            <div class="card-content white-text">
                                <span class="card-title">
									<?php echo $key; ?><i class="material-icons right">more_vert</i>
                                </span>
                                <p>
									<a href="<?php echo $value['url']; ?>" target="_blank">Go Live</a>
                                </p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">
									<?php echo $key; ?><i class="material-icons right">close</i>
                                </span>
                                <p style="text-align: justify"><?php echo $value['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
    		</div>
        </div>
    </div>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
    <script src="greensock/TweenMax.min.js"></script>

    <script>
        // TweenMax.staggerTo(".card", 1, {rotation:360, y:10}, 0.5);
    </script>
</body>
</html>
