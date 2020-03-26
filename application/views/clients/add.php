<?php

// $_SESSION['nonRempli'] = $nonRempli ?? ''; 
// $_SESSION['success'] = $success ?? '' ;
// $_SESSION['errorPassword'] = $errorPassword ?? '' ;

 
  
  ?>
<div class="container-fluid">
  <div class="row">
    <div class="list-group col-2 ml-5 itemListFixed">
    
      <a href="http://localhost/casaM/index.php?controller=User&task=create" class="list-group-item list-group-item-action list-group-item-secondary">Gérer les membres</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Ajouter</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Gestion clients</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Caisse</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Etat caisse client</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Magasin</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Stock matières premières</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">matières premières</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Stock Produits finis</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Etat de vente</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Vente</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary mt-2">Service Traiteur</a>

    </div>
    <div class="col-8 ml-2">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Lists users</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="col mt-4  ">
        <?php
        // if(isset($_SESSION['nonRempli']))
        // {
        //   echo $_SESSION['nonRempli'];
        //   unset($_SESSION['nonRempli']);
        // }
        // if(isset($_SESSION['success']))
        // {
        //   echo $_SESSION['success'];
        //   unset($_SESSION['success']);
        // }
        // if(isset($_SESSION['errorPassword'])){
        //   echo $_SESSION['success'];
        //   unset($_SESSION['success']);
        // }


?>
            <form method="POST" action="http://localhost/casaM/index.php?controller=User&task=create">
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="username" class="form-control" placeholder="Nom d'utilisateur" type="text">
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name = "password" class="form-control" placeholder=" Creéer un mot de passe" type="password">
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input name ="checkPassword" class="form-control" placeholder="Répéter le mot de passe" type="password">
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select name="categorie" class="form-control">
                  <option  selected="">Séléctionnz un catégorie</option>
                  <option value="Patron">Patron</option>
                  <option value="Superviseur">Superviseur</option>
                  <option value="Caissier">Caissier</option>
                  <option value="Magasinier">Magasinier</option>
                  <option value="Vendeur">Vendeur</option>
                  <option value="Traiteur">Traiteur</option>
                </select>
              </div> <!-- form-group end.// -->

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Creer un utilisateur</button>
              </div> <!-- form-group// -->
            </form>
          </div>
        </div>

        <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">

          <table class="table table-striped custab">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Catégories</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
         
            <?php foreach($allUsers as $user): ?>
            <tr>
              <td><?= $user->id ?></td>
              <td><?= $user->username ?></td>
              <td><?= $user->categorie ?></td>
              <td class="text-center"><a class='btn btn-info btn-xs' href=""><span class="fa fa-edit"></span> </a> <a href="http://localhost/casaM/index.php?controller=User&task=delete&id=<?=$user->id?>" class="btn btn-danger btn-xs"><span class="fa fa-user-times"></span></a></td>
            </tr>
            <?php endforeach ?>
          </table>
          <nav aria-label="...">
            <ul class="pagination pagination-md float-right">
              <li class="page-item ">
                <a class="page-link" href="#" tabindex="-1">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>