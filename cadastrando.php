            
    <?php
         $con = mysqli_connect('localhost', 'root', '', 'cadastro') or die(mysqli_error());
    
    if($con){
        echo 'conectado';
    }
     $nome=$_post['Nome'];    
    $Sobrenome=$_post ['SobreNome'];
        $senha=$_post ['Senha'];
        $Email=$_post ['Email'];
        $sql = mysqli_query($con, " INSERT INTO usuario (Nome, SobreNome,Email, Senha) VALUES('$Nome', '$SobreNome','$Email','$Senha')");
    echo $nome,$Sobrenome,$senha,$Email,$sql;

    ?>