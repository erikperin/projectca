<?php
$servidor = "SERVIDOR_DO_BANCO";
$login = "LOGIN_DO_BANCO";
$senha = "SENHA_DO_BANCO";
$banco = "NOME_DO_BANCO";

//capta via POST o honeypot
$mel=$_POST['melzinho'];

// Testa Honeypot input
if($mel == ""){

  //essa função pega o IP do aceite (LGPD) e verifica se vem de um proxy ou direto
  function getIPAddress() {
      //Testa se o ip é da internet compartilhada
       if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
                  $ip = $_SERVER['HTTP_CLIENT_IP'];
          }
          /*Testa se o ip é do proxy (sim, caso seja dentro de alguma rede corporativa
           ou algum tipo de Squid), assim conseguimos a validação e origem
            mais correta do usuário. */
          elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
           }
       //se o ip é do endereço remoto (quem está acessando)
      else{ $ip = $_SERVER['REMOTE_ADDR']; }
       return $ip;
     }

  //capta via Função o dado do IP e transforma em variável.
  $ip = getIPAddress();
  //capta via POST o campo Nome e transforma em variável.
  $nome = $_POST['nome'];
  //capta via POST o campo Email e transforma em variável.
  $email = $_POST['email'];
  //capta via POST o campo Aceite e transforma em variável.
  $aceite = $_POST['aceite'];

    //limpa dados imputados
    $nome = trim(htmlspecialchars($nome));
    $email = trim(htmlspecialchars($email));

    //verifica se os campos foram preenchidos
    if (empty($nome) || empty($email) || empty($aceite)) {
           die ('Por favor verifique os campos, faltou algum.');
       }
       /* verifica se o email corresponde a um formato válido, e este
       tipo de validação evita que novos subdomains sejam bloqueados.*/
       elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               die ('Por favor, utilize um email válido');
           }
        //se passou no honeypot e validação dos dados, inicia uma conexão.
         $conn = mysqli_connect($servidor, $login, $senha, $banco);
         // Testa conexão
         if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
         }
            //faz o INSERT dos dados
            $sql = "INSERT INTO leads (nome, email, aceite, ip) VALUES ('$nome', '$email', '$aceite', '$ip')";
              if (mysqli_query($conn, $sql)) {
                  echo "Dados Armazenados!";
                  session_start();
                  $_SESSION["sessao"] = $nome;
                  header('Location: index.php');

                } else {
                  //Encerra com um erro de DB
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                //aqui finalizamos a conexão
                mysqli_close($conn);

}else{
  //finaliza se houver bot
  die('Sai daqui Bot... 🤖');
}
?>
