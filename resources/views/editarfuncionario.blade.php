<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="csrf-token" content="{{csrf_token()}}"/>

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema de RH</title>

    <link href="../../css/style.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Entreprise RH</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="index">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Funcionário">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
              <i class="fa fa-fw fa-users"></i>
              <span class="nav-link-text">Funcionário</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                  <a href="funcionario">Cadastrar</a>
              </li>
              <li>
                  <a href="funcionario-gerenciar">Gerenciar</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cargo">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsone">
              <i class="fa fa-fw fa-briefcase"></i>
              <span class="nav-link-text">Cargo</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponentsone">
              <li>
                <a href="cargo">Cadastrar</a>
              </li>
              <li>
                  <a href="cargo-gerenciar">Gerenciar</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Setor">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentstwo">
              <i class="fa fa-fw fa-cubes"></i>
              <span class="nav-link-text">Setor</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponentstwo">
              <li>
                <a href="setor">Cadastrar</a>
              </li>
              <li>
                  <a href="setor-gerenciar">Gerenciar</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rescisão">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsthee">
              <i class="fa fa-fw fa-money"></i>
              <span class="nav-link-text">Rescisão</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponentsthee">
              <li>
                <a href="rescisao">Calcular</a>
              </li>
              <li>
                  <a href="rescisao-gerenciar">Gerenciar</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper py-3">

      <div class="container-fluid">
       <span class="titulo">Edição de Setor</span><br><br>
  <div class="row espaço">
      <div class="col-lg-12">
<form action="/rh/public/setor-gerenciar/editarsetor/form_setor_editar/{{$setores->idsetor}}" method="post">
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
  <div class="form-group">
    <label for="setor">Nome:</label>
    <input type="text" class="form-control" id="setor" name="setor" value="{{$setores->nomeSetor}}">
  </div>
  <button type="submit" class="btn btn-success">Salvar Alterações</button>
</form>
      </div>
  </div>            
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/popper/popper.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../js/sb-admin.min.js"></script>

  </body>

</html>
