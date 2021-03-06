<?php
    $myurl= $_SERVER['REQUEST_URI'];
    $server = $_SERVER['HTTP_HOST'];
    session_start();
    if (isset($_SESSION['user'])) {
    } else {
    echo "
            <script type='text/javascript'>
            window.location='https://$server/login/'
            </script>
            ";
    }
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand col-md-2" href="/"><img src="<?php if ($myurl == '/') { print('/assets/img/logo.jpg');} else {print('../assets/img/logo.jpg');}
                    ?>" alt="" height="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-md-7 offset-md-2" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='<?php echo "https://$server/patients/"; ?>'>Pacientes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href='<?php echo "https://$server/new-patient/"; ?>'>Nueva persona</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href='<?php echo "https://$server/appointments/"; ?>'>Citas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href='<?php echo "https://$server/tickets/"; ?>'>Facturas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href='<?php echo "https://$server/close/"; ?>'>Cerrar sesión</a>
        </li>
      </ul>
      <form class="d-flex" method="POST">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>