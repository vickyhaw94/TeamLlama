<header class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
		<li>
		  <a href="home.php">Home</a>  
		</li>
        <li>
          <a href="prototype.html">Prototype</a>
        </li>
        <li>
          <a href="blog.php" class="navbar-brand">Blog</a>
        </li>
      </ul>
      <ul class="nav navbar-right navbar-nav">
		<?php
		 include "login.php";
		 echo "Hi " . $_SESSION["user"];
		 ?>
        <img src="img/llama2.jpg" class="img-circle" style="padding-top:10px">
      </ul>
    </nav>
  </div>
</header>