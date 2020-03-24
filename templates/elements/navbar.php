<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
  <a class="navbar-brand" href="#">CasaMofo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
       
      </li>
      <li class="nav-item">
       
      </li>
    </ul>
    <span class="navbar-text">
      <i class="fa fa-user px-3"></i>
     <?= isset($_SESSION['username']) ? '<b class="navbar-text">'.$_SESSION['username'].'</b>' : ''?>
    </span>
    <span class="navbar-text px-3">
    <?= isset($_SESSION['username']) ? "<a href='http://localhost/casaM/index.php?controller=UserController&task=logout'>Log Out </a>" : ''  ?>
    </span>
  </div>
</nav>

