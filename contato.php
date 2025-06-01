
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "diego@diegosanches.adv.br";
  $subject = "Novo contato - Kit de Defesa";
  $message = "Nome: ".$_POST["Nome"]."\n";
  $message .= "Email: ".$_POST["Email"]."\n";
  $message .= "WhatsApp: ".$_POST["WhatsApp"]."\n";
  $message .= "Mensagem: ".$_POST["Mensagem"]."\n";
  mail($to, $subject, $message);
  header("Location: obrigado.html");
  exit;
}
?>
