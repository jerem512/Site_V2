<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./assets/css/main2.css">
  <link rel="shortcut icon" href="assets/css/photo/logo.png">
  <title>Inscription</title>
</head>
<body>
  <h1><u><i>Inscrivez-vous !</i></u></h1>
        <div  class="form">
            <form id="contactform" action="cible_inscription.php" method="post">
                <p class="contact"><label for="name">Nom et prénom</label></p>
                <input id="name" name="name" placeholder="Nom et prénom" required="" tabindex="1" type="text">
                <p class="contact"><label for="mail">Email</label></p>
                <input id="email" name="email" placeholder="example@exemple.com" required="" type="email">
                <p class="contact"><label for="username">Nom d'utilisateur</label></p>
                <input id="username" name="login" placeholder="Login" required="" tabindex="2" type="text">
                <p class="contact"><label for="password">Mot de passe</label></p>
                <input type="password" id="password" name="password" required="" type="text" placeholder="Mot de passe">
                <p class="contact"><label for="password">Confirmation du mdp</label></p>
                <input type="password" id="password" name="password2" required="" type="text"
                placeholder="Confirmation">
               <fieldset>
                 <label>Date de naissance</label>
                  <label class="month">
                  <select class="select-style" name="BirthMonth">
                  <option value="">Mois</option>
                  <option value="01">Janvier</option>
                  <option value="02">Fevrier</option>
                  <option value="03">Mars</option>
                  <option value="04">Avril</option>
                  <option value="05">Mai</option>
                  <option value="06">Juin</option>
                  <option value="07">Juillet</option>
                  <option value="08">Aout</option>
                  <option value="09">Septembre</option>
                  <option value="10">Octobre</option>
                  <option value="11">Novembre</option>
                  <option value="12">Decembre</option>
                  </label>
                 </select>
                <label><input class="birthday" maxlength="2" name="BirthDay"  placeholder="Jour" required=""></label>
                <label><input class="birthyear" maxlength="4" name="BirthYear" placeholder="Année" required=""></label>
              </fieldset>
              <label for="question">Question secrète</label>
            <select class="select-style gender" name="question">
            <option value="NULL">- Question secrète -</option>
            <option>Nom de mon meilleur ami d'enfance ?</option>
            <option>Lieu de naissance ?</option>
            <option>Nom de mon professeur en primaire ?</option>
            <option>Couleur de ma voiture ?</option>
            </select><br><br> 
            <p class="contact"><label for="rep">Réponse</label></p>
            <input id="rep" name="rep" placeholder="Réponse" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="S'inscrire!" type="submit">
   </form>
</div>
</body>
</html>