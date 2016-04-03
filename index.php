<!DOCTYPE html>
<html lang="en">
<!--Head-->
<head>
	<?php
		require 'all_require.php';
	?>
</head>

<!--Body content-->
<body>
	
<div class="container">    
    <div class="login col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
		<div class="index_image">
			 <img src="img/llama.png">
		</div>
        <div class="panel panel-primary" >
            <div class="panel-heading">
                <div class="text-center">Team Llama</div>
            </div>     

            <div class="panel-body" >

                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="login.php">
                   
                    <div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input id="user" type="text" class="form-control" name="username"  placeholder="Username">                                        
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>                                                                  

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
                        </div>
                    </div>

                </form>     
            </div>                     
        </div>  
    </div>
</div>

<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>