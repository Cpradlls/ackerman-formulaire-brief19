<?php

  $userNom = $_POST["user-nom"] ?? false;
  $userNom = $_POST["user-nom"] ?? false;
  $userPrenom = $_POST["user-prenom"] ?? false;
  $userAdresse = $_POST["user-adresse"] ?? false;
  $userCP = $_POST["user-cp"] ?? false;
  $userVille = $_POST["user-ville"] ?? false;
  $userPays = $_POST["user-pays"] ?? false;
  $userTel = $_POST["user-tel"] ?? false;
  $userLogin = $_POST["user-login"] ?? false;
  $userPwd = $_POST["user-password"] ?? false;
  $mail = $userLogin;
  $sujet = "Confirmation création du compte";
   // message
   $message = "
   <html>
    <head>
     <title>Confirmation création de votre compte client</title>
     <style>
        table{
            border: solid 2px black;
        }
        td{
            border: solid 2px black;
        }
     </style>
    </head>
    <body>
     <table>
      <tr>
       <td>Envoyé par</td><td>Alain Ackerman ne-pas-repondre@alainackerman.com</td>
      </tr>
      <tr>
       <td>Sujet</td><td>Confirmation création de votre compte client</td>
      </tr>
      <tr>
       <td>Message</td><td>Bonjour <?php echo $userNom; ?> <?php echo $userPrenom; ?><br><br>Nous vous remercions d avoir créé votre compte client et vous souhaitons la bienvenue sur le site d’Alain Ackerman !<br><br>Vos données de connexion vous permettent d accéder à l’intégralité du site. Vous pouvez à tout moment gérer les données de votre compte (https://alainackerman.com/account).<br><br>Meilleures salutations<br>L’équipe du site Alain Ackerman</td>
      </tr>
     </table>
    </body>
   </html>";

   // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
   $headers[] = "MIME-Version: 1.0";
   $headers[] = "Content-type: text/html; charset=iso-8859-1";

   // Envoi
   mail($mail, $sujet, $message, implode("\r\n", $headers));

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account-create--process.php</title>
  <style>code{background:#FF0}</style>
</head>
<body>
  <main>
    <p>Bien le bonjour, je suis le fichier <code>account-create--process.php</code> et voici les valeurs que je viens tout juste de recevoir par la méthode <code>POST</code>:</p>
    <ul>
      <li>Nom : <?php echo $userNom; ?></li>
      <li>Prénom : <?php echo $userPrenom; ?></li>
      <li>Adresse : <?php echo $userAdresse; ?></li>
      <li>Code postal : <?php echo $userCP; ?></li>
      <li>Ville : <?php echo $userVille; ?></li>
      <li>Pays : <?php echo $userPays; ?></li>
      <li>Téléphone : <?php echo $userTel; ?></li>
      <li>Adresse électronique : <?php echo $userLogin; ?></li>
      <li>Mot de passe : <?php echo $userPwd; ?></li>
    </ul>
  </main>
</body>
</html>
