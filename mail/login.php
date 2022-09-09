<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
<?php

require_once(/config/conexao.php);

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$senha = md5($_POST['senha']);

$sql = 'SELECT * FROM tb_cliente WHERE email_cliente=:email AND senha_cliente=:senha';
$result = $conn->prepare($sql);
$result->execute(['email' => $email, 'senha' => $senha]);
$user = $result->fetch();

if(!empty($user)){
    session_start();

    $_SESSION['id_cliente'] = $user['id'];
    $_SESSION['nome_cliente'] = $user['name'];
    $_SESSION['email_cliente'] = $user['email'];
    header('Location: ../index.php');

}else{
    echo '<div class="container">
                                    <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Ops!</h5>
                                    Cliente não cadastrado
                                  </div>
                                </div>';
}
?>