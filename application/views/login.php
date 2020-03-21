<div class="body">
<div class="container">
  <div class="card card-login mx-auto text-center bg-dark">
    <div class="card-header mx-auto bg-dark">
      <span> <img src="https://amar.vote/assets/img/amarVotebd.png" class="w-75" alt="Logo"> </span><br />
      <span class="logo_title mt-5"> Login Mandrosò </span>
    </div>
    <div class="card-body">

      <form action="http://localhost/casaM/index.php?controller=UserController&task=auth" method="post">
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-danger float-right login_btn">Login</button>
        
        </div>
      </form>
    </div>
  </div>
</div>
</div>

