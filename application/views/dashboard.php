<div class="container-fluid p-0 m-0">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
     
    </ul>

    <div class="mx-auto">
	  	<a href="#" class="navbar-brand">Navbar</a>
	</div>
    
  <?= isset($_SESSION['username']) ? $_SESSION['username'] ."- <a href='http://localhost/casaM/index.php?controller=UserController&task=logout'>Log Out </a>" : ''  ?>
  </div>
</nav>
</div>
<div class="container-fluid">
  <div class="row">
    
  </div>
</div>
