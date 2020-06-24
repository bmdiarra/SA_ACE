<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?=BASE_URL?>/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=BASE_URL?>/public/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">SA_ACE </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?=BASE_URL?>/security/vlisteretudiant" class="list-group-item list-group-item-action bg-light">Lister Etudiant</a>
        <a href="<?=BASE_URL?>/security/vajouteretudiant" class="list-group-item list-group-item-action bg-light">Enregistrer Etudiant</a>
        <a href="vlisterchambre" class="list-group-item list-group-item-action bg-light">Lister Chambre</a>
        <a href="vajouterchambre" class="list-group-item list-group-item-action bg-light">Enregistrer Chambre</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Affichage Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
      </nav>


      <!--      -->
      <div class="container-fluid">
        <!-- Afficher Les Vues du Layout -->
        <?php echo  $content_for_layout?>
    
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?=BASE_URL?>/public/vendor/jquery/jquery.min.js"></script>
  <script src="<?=BASE_URL?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
