<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
  	    require_once("admin/resources/utils/conn.php");
	   	include("admin/resources/utils/funcoes.php");
		$exibicao = "Pesquise agora sua agenda.";
	
        $q_subcat = mysql_query("SELECT t.id, s.titulo serie, t.titulo turma FROM turmas t INNER JOIN series s ON t.id_serie = s.id");
 if($_POST){
	 $data	= utf8_decode(anti_sql($_POST['date'],'date'));
	 $turma	= utf8_decode(anti_sql($_POST['tur'],'int'));
		 
	 $conteudo_sql = mysql_query("SELECT
								a.id,
								DATE_FORMAT(data,'%d-%m-%Y') data,
								s.titulo serie,
								t.titulo turma,
								d.titulo disciplina,
								a.texto
							FROM agendas a
							INNER JOIN disciplinas d
								ON a.id_disciplina = d.id
							INNER JOIN turmas t
								ON a.id_turma = t.id
							INNER JOIN series s
								ON t.id_serie = s.id WHERE data = '$data' AND t.id = '$turma'
							ORDER BY
								data DESC,
								serie, turma, disciplina 
						");						
						
                                          } ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Escolinha Pituchinha</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/estilos_2.css" rel="stylesheet" />
</head>
<body>
<!-- TOPO PAGINA -->
<div class="container-fluid topo-01">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <ul class="social-redes">
          <li><a href="https://pt-br.facebook.com/pages/Escolinha-Pituchinha/200120380014253" target="_blank" ><font><i class="fa fa-facebook fa-2x"></i></font></a></li>
          <li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-envelope fa-2x"></i></a></li>
        </ul>
      </div>
      <div class="col-md-2">
       <!-- <ul class="local-net">
          <li><a href="#"><i class="fa fa-map-marker fa-1x"><span  class="cor"> Cidade Nova</span></i></a></li>
          <li><a href="#"><i class="fa fa-phone fa-1x"><span  class="cor"> (75)81950449</span></i></a></li>
        </ul> -->
      </div>
      <div class="col-md-5">
        <ul class="local-net">
          <li class="log">
           <a data-toggle="modal" href="#myModal4"><i class="fa fa-lock cor"></i> PORTAL EDUCACIONAL</a>
            <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Portal Educacional</h4>
        </div>
        <div class="modal-body">
            <a href="http://maisinformatica.com.br/sistema.php" target="_blank"><div class="nova">
               <i class="fa fa-user" aria-hidden="true"></i><span>  ÁREA EDUCACIONAL</span>
            </div></a>
            <a href="http://escolapituchinha.com.br:2095/" target="_blank"><div class="nova">
               <i class="fa fa-envelope" aria-hidden="true"></i><span>  WEBMAIL</span>
            </div></a>
            
         
            <!-- <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-graduation-cap" aria-hidden="true"></i> ÁREA DO ALUNO</li>
              <li class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i> ÁREA EDUCACIONAL</li>
              <li class="list-group-item"><i class="fa fa-envelope" aria-hidden="true"></i> WEBMAIL</li>
            </ul> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
          </li>
        </ul>         
        </div>
      </div>
    </div>
  </div>
</div>
<!-- FIM TOPO PAGINA --> 
<!--- MENU TOPO -->
<div class="container-fluid lg">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar corback">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="height:70px;">
              <button  style="border-color:#262969;position:relative"type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand position" href="index.php"> <img alt="Brand" src="imagens/logo._escola.png" width="150px" class="img-responsive"> </a> </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse marg" id="bs-example-navbar-collapse-1">
              <ul id="int" class="nav navbar-nav" style="margin-top:10px;">
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-building fa-2x" aria-hidden="true"></i> ESCOLA<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="nossahistoria.php">Nossa Hist&oacute;ria</a></li>
                    <li><a href="depoimentos.php">Depoimentos</a></li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="nossoensino.php"><I class="fa fa-book fa-2x"></I>  NOSSO ENSINO</a>
                </li>
                 <li class="dropdown"> <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><I class="fa fa-folder-open fa-2x"></I>  PROJETOS<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="projetosinfantil.php">Projetos da Educação Infantil</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="projetosfundamental.php">Projetos do Fundamental I</a></li>
                  </ul>
                </li>
                 <li class="dropdown"> <a href="calendario.php"><I class="fa fa-calendar fa-2x"></I>  CALENDÁRIO</a></li>
                 <li class="dropdown"> <a href="contatos.php"><I class="fa fa-address-card fa-2x"></I>  CONTATOS</a></li>
                 <li class="dropdown"> <a href="matriculas.php"><I class="fa fa-file-text fa-2x"></I>  MATR&Iacute;CULAS</a></li>
                 <li class="dropdown"> <a href="agenda.php"><I class="fa fa-calendar-check-o fa-2x"></I> AGENDA</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse --> 
          </div>
          <!-- /.container-fluid --> 
        </nav>
      </div>
    </div>
</div>
<!-- FIM TOPO MENU -->
<!-- CONTEUDO DA PAGINA -->
<div class="container">
  <div class="row" >
      <div class="col-md-12 text-center">
         <h2 style="font-weight:300">AGENDA</h2><br/>
         <div class="col-md-12 text-left" style="border-radius:10px; padding:10px 15px 10px 10px; background-color:#e3ebf7">
            <span class="text-agenda"><b>Selecione os dados abaixo:</b></span>
            <form action="#" method="post">
             <div class="col-md-2">
              <input type="date" class="form-control" name="date" required="required"/>
             </div>
             <div class="col-md-8">
              <select name="tur" class="form-control">
               <? while($r_subcat = mysql_fetch_object($q_subcat)){
							?>
                          <option value="<?=$r_subcat->id;?>">
                            <?=utf8_encode($r_subcat->serie);?>
                            -
                            <?=utf8_encode($r_subcat->turma);?>
                          </option>
                          <? } ?>
              </select>
             </div>
             <div class="col-md-2 text-left">
              <input type="submit" class="btn btn-success btn-block" value="Pesquisar"/>
             </div>            
            </form>
         </div><br/>
         <div class="row">
          <div class="col-md-12">
          <?php 
		   if($conteudo_sql){
		     while($r_dados = mysql_fetch_object($conteudo_sql)){
				 foreach($r_dados as $k=>$v){
			        $r_dados->$k = utf8_encode($v);
				 }
		  ?>
            <div class="row" style="margin-top:10px;">
              <div class="col-md-6 text-left">
                  <h3><?php echo $r_dados->disciplina;?></h3>
                  <p><?php echo $r_dados->texto;?></p>
              </div>
            </div>
			<?Php			
				   }
			   }else{ ?>
				   <div class="row" style="margin-top:10px;">
              <div class="col-md-6 text-left">
                  <b><p><?php echo $exibicao; ?></p></b>
              </div>
            </div>
				  <?php }?>
          </div>
         </div> 
      </div>
  </div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<!-- CONTEUDO DA PAGINA -->
<a href="#top" class="glyphicon glyphicon-chevron-up"></a>
<!-- INICIAL FOOTER -->

<footer>
      <div class="container-fluid" style="background-color:#252b69">
       <div class="container">
          <div class="row">
            <div class="col-md-4 margin-two">
               <img src="imagens/logo._escola2.png" alt="Escola Pituchinha" class="img-responsive" />
            </div>
            <div class="col-md-4 margin">
               <i class="fa fa-phone cor margin-one"><span class="txtfont"> (75)3221-5761</span></i><br/>
               <i class="fa fa-whatsapp cor margin-one"><span class="txtfont"> Sem Numero</span></i>
               <i class="fa fa-envelope cor margin-one"><span class="txtfont"> diretoria@escolapituchinha.com.br</span></i>
            </div>
            <div class="col-md-4">
             <i class="fa fa-map-marker cor margin-four"></i><span class="margin-five cor"> LOCALIZA&Ccedil;ÃO</span>
              <div class="row">
               <div class="col-md-12">
                <div class="google-maps">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d974.7444635766022!2d-38.95141347883225!3d-12.249777831372423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7143786b5345ccb%3A0x70c9cbb4385a6e37!2sEscola+Pituchinha!5e0!3m2!1spt-BR!2sbr!4v1496772085887" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div><!-- coluna md 4 -->
              </div> <!-- ROW MAPS -->
            </div>  <!-- COLUNA MAPA -->
          </div> <!-- ROW -->
       </div> <!-- CONTAINER -->
        <div class="container">
            <div class="row foot">
                <div class="col-md-5 foot-one fa-align-center">
                    <span class="copyright cor">Todos direitos resevados &copy; Escola Pituchinha 2017</span>
                </div>
                <div class="col-md-4 foot-two fa-align-center">
               <ul class="list-inline social-buttons">
                 <li><a href="https://www.facebook.com/Petrus-Rh-1388278034530978/"><i class="fa fa-facebook fa-2x"></i></a></li                 ><li><a href="https://www.facebook.com/Petrus-Rh-1388278034530978/"><i class="fa fa-youtube fa-2x"></i></a></li>
                 <li><a href="https://www.facebook.com/Petrus-Rh-1388278034530978/"><i class="fa fa-instagram fa-2x"></i></a></li>
                 <li><a href="https://www.facebook.com/Petrus-Rh-1388278034530978/"><i class="fa fa-envelope fa-2x"></i></a></li>
              </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-group-horizontal" style="display:inline">
                        <li style="display:inline"><a href="http://www.deivitepopo.com.br/" target="_blank"><img class="foot-thre" src="imagens/popo.png" width="45px" height="auto"/></a>
                        </li>
                        <li style="display:inline">
                        <a href="http://maissistemas.com.br" target="_blank"><img class="foot-thre" src="imagens/mais.png" width="90px" height="auto"/></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       </div>
</footer>
<!-- FIM FOOTER -->
<script src="js/jquery-3.2.1.min.js" ></script> 
<script src="js/bootstrap.min.js"></script>
<!-- subir topo -->
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('a[href="#top"]').fadeIn();
        } else {
            $('a[href="#top"]').fadeOut();
        }
    });

    $('a[href="#top"]').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
</script>
<!-- fim subir topo -->
<!-- MUDA CLASSE COM RESOLUCAO -->
<script>
if ($(window).width() <= 767){
  $('.dropdown').removeClass('dropdown').addClass('dropdown-menu-one');
  var A = 1;
} 
</script>
<!-- FIM RESOLUCAO -->
</body>
</html>
