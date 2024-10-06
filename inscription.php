<?php

require_once "../database/connexion-pdo.php";

if(isset($_POST['sinscrire'])) {

  $requete = "INSERT INTO utilisateurs (prenom, nom, pseudo, mdp, tel, email) VALUES (?,?,?,?,?,?)";

$requete_preparer = $pdoConnect->prepare($requete);

$requete_preparer->execute( 

  [ $_POST['prenom'], $_POST['nom'], $_POST['utilisateur'], $_POST['mdp'], $_POST['contact'], $_POST['email'] ] 

);

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maktaba islam | inscription</title>
    <link rel="stylesheet" href="../Stylesheets/inscription.css">
    <link rel="stylesheet" href="../font-6/css/all.css">
</head>
<body>
  <header>
    <nav class="nav_1">
      <div class="left">
        <ul>
          <li>
            <select name="" id="" class="">
              <option value=""> 2022 </option>
              <option value=""> 2021 </option>
              <option value=""> 2020 </option>
            </select>
          </li>
          <li>
            <select name="" id="" class="">
              <option value="">français</option>
              <option value="">english</option>
              <option value="">عربي</option>
            </select>
          </li>
        </ul>
      </div>
      <div class="right">
        <ul>
          <li class="log"><span><i class="fas fa-sign-in-alt"></i></span><a href="../html/connexion.php">se connecter</a></li>
          <!-- <li><span><i class="fas fa-tools"></i></span><a href="">parametre</a></li> -->
          <li><span><i class="fas fa-hand-holding-heart"></i></span><a href="../html/donation.php">donation</a></li>
          <li><span><i class="fas fa-share"></i></span><a href="">partager</a></li>
        </ul>
      </div>
    </nav>

    <nav class="nav_2">
      <h2><span>Maktaba.</span>islam</h2>
      <div class="search_barre">
        <i class="fa fa-search"></i>
        <input type="text" class="tab" placeholder="Chercher par Titre, Auteur, Genre">
        <div class="filtre">
          <select name="" id="">
            <option value="">Filtrer</option>
            <option value="">Titre</option>
            <option value="">Auteur</option>
            <option value="">thème</option>
          </select>
          <input type="submit" value="chercher">
        </div>
      </div>

      <div class="right">
        <!-- <ul>
          <li><a href=""><i class="fa fa-bell"></i></a></li>
          <li><a href=""><i class="fas fa-quran"></i></a></li>
          <li><a href=""><i class="fas fa-user-circle"></i></a> <i class="fas fa-angle-down"></i></li>
        </ul> -->
      </div>
    </nav>
    <nav class="nav_3">
      <div class="tri">
        <select name="" id="">
          <option value="">Tous les thèmes</option>
          <option value="">Croyance & Sunna</option>
          <option value="">Prière & Purification</option>
          <option value="">Jeûne & Zakât</option>
          <option value="">Hadjj & Umra</option>
          <option value="">Biographie</option>
          <option value="">Hadith</option>
          <option value="">La Femme en islam</option>
          <option value="">Mariage</option>
          <option value="">Exhortation & Méditation</option>
          <option value="">Éducation & Comportement</option>
          <option value="">Invocation & Évocation</option>
          <option value="">Méthodologie</option>
          <option value="">Langue Arabe</option>
          <option value="">Qur'an & Exégèse</option>
          <option value="">Roqya & Médecine</option>
        </select>
      </div>
      <ul>
        <li><span><i class="fas fa-home"></i></span><a href="../html/accueil.html">accueil</a></li>
        <li><span><i class="fas fa-praying-hands"></i></span><a href="../html/adoration.html">adoration</a></li>
        <li><span><i class="fas fa-graduation-cap"></i></span><a href="../html/apprentissage.html">apprentissage</a></li>
        <li><span><i class="fas fa-people-arrows"></i></span><a href="../html/comportement.html">comportement</a></li>
      </ul>
    </nav>
  </header>
    
    <form method="post" action="../html/connexion.php">
        <fieldset>
            <legend>inscription</legend>
            <div class="wrap">
              <div class="row1">

                <div class="champ">
                  
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom" required>
                </div>
    
               <div class="champ">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrer votre nom" required>
               </div>
    
               </div>
    
                <label for="user">Nom d'utilisateur</label>
                <input type="text" name="utilisateur" id="utilisateur" placeholder="Entrez votre nom d'utilisatuer" required>
    
                <div class="row2">
    
                  <div class="champ">
                    <label for="password">Mot de passe</label>
                  <input type="password" name="mdp" id="password" placeholder="taper votre mot de passe" required>
                  </div>
      
                  <div class="champ">
                    <label for="contact">N° de Téléphone</label>
                  <input type="number" name="contact" id="contact" placeholder="Entrez votre numéro" required>
                  </div>
    
                </div>
                <div class="champ">
                  <label for="email">Addresse E-mail</label>
                <input type="email" name="email" id="email" placeholder="Entrez votre addresse email" required>
                </div>
                <input type="submit" name="sinscrire" value="s'inscrire">
            </div>
        </fieldset>
    </form>
</body>
</html>