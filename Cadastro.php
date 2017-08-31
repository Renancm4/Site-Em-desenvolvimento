<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NETBOOK/CADASTRO</title>
  <!--Materialize Css-->
  <link rel="stylesheet"  href="css/materialize.css">
  <link rel="stylesheet"  href="css/ondex.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<!---NaveBar-->
<body>
<div class="navbar-fixed">
  <nav class="cold-panel black">
    <div class="nav-wrapper container  ">
      <a href="index.php" class="brand-logo"><img class="responsive-img" src="img/Logo.png"></a>
      <a href="#" data-activates="menu-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="Cadastro.html"><i class="material-icons left ">assignment</i>Cadastre-se</a></li>
        <li><a href="Login.html"><i class="material-icons left">account_circle</i>Login</a></li>
        <li><a  class="dropdown-button " data-activates="dropdown" data-beloworigin="true"  href="collapsible.html"><i class="material-icons left">email</i><i class="material-icons right">arrow_drop_down</i>Contato</a></li>
      </ul>
     
    </div>
  </nav>
</div>
<div>
<!--Dropdown-->
  <ul class="dropdown-content" id="dropdown">
    <li><a href="#">Facebook</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Email</a></li>
    <li><a href="#">SAC</a></li>
  </ul>
<!--Menu Mobile-->
 <ul class="side-nav" id="menu-mobile">
        <li class="active"><a href="sass.html"><i class="material-icons left ">email</i>Contato</a></li>
        <li><a href="Login.php"><i class="material-icons left">account_circle</i>Login</a></li>
        <li><a href="Cadastro.php"><i class="material-icons left">assignment</i>Cadastre-se</a></li>
      </ul>
 </div><br><br>     
<!--Area de cadastramento -->
 <div class="row container">
    <form class="col s12 "  method="post"action="cadastrando.php">
      <div class="row">
        <div class="input-field col s6 ">
          <input id="last_name"  type="text" name="Nome" class="validate">
          <label for="last_name">Nome:</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text"  name="Sobrenome" >
          <label for="last_name">Sobrenome:</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s7">
          <input id="password" type="password" name="senha">
          <label for="password"> Senha: </label>
        </div>
      </div>
  
      <div class="row">
        <div class="input-field col s7">
          <input id="password" type="password" >
          <label for="password">Confirmaçao senha: </label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s10">
          <input id="email" type="email"   name="Email">
          <label for="email">Email</label>
        </div>
      </div>
         <p>
      <input type="checkbox" id="indeterminate-checkbox" />
      <label for="indeterminate-checkbox">Aceitar termos e condiçoes</label>
    </p>
    <div class="container right col s7">
    <button type="submit" value ="Salvar" class="btn">Enviar</button>
           <div class="right-align ">
     <a href="index.html" button class="btn waves-effect waves-light " type="submit" name="action">Voltar
      </button></a>
      </div>
    </form>

  </div>
     <!--Cabeçalho-->
 <footer class="page-footer grey lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l4 s12">
                <h4 class="white-text">Sobre nos</h4>
                <p class="grey-text text-lighten-4">Estamos em desenvolvimento e crescimento com  o intuito de ajuda leitores e escritores a esporem suas obras e seus texto , para todos possam adquirir conhecimento , e garantir seu direito de ter sua obra publicada.</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 todos direitos reservados a NETBOOK
            </div>
          </div>
        </footer>





      <!--Materialize Jquery-->
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <!--Materialize Js-->
  <script src="js/materialize.js"></script>
 
  <script>
    $(document).ready(function() {
    Materialize.updateTextFields();
  });
        
  </script>  
   <script>
  $( document ).ready(function(){})
   $(".button-collapse").sideNav();
     </script>
  </body>
</html>                                                