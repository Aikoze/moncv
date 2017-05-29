<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Portfolio';
    $to = 'youenn.toullec@gmail.com';
    $subject = 'message portfolio';

    $body = "Expéditeur: $name\n Adresse mail: $email\n Message:\n $message";

     if ($_POST['submit']) {
         if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
             echo "<p>Tous les champs doivent être remplis, veuillez s'il vous plaît réessayer.</p>";
             return;
         }
         else if (mail ($to, $subject, $body, $from)) {
             echo "<p class='success'>Votre message a bien été envoyé : nous vous recontacterons dans les plus brefs délais.</p>";
         } else {
             echo "<p class='failure'>Quelque chose n'a pas fonctionné, veuillez s'il vous plaît réessayer.</p>";
         }
     }
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur le portfolio de Youenn Toullec">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Toullec Youenn</title>
</head>
<body>
    <header>
        <nav id="menu">
            <ul>
                <li>
                    <a href="#scroll">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="container">
        <div id="photo">
            <img src="images/photo.png" width="200px" height="200px" alt="photo_identite">
            <h2>Youenn Toullec</h2>
            <p>youenn.toullec@gmail.com
            <br>Bordeaux</p>
            <a class="CV" href="#">Download CV</a>

        </div>
        <div id="Objectif">
            <h3>Objectif</h3>
            <p><span>"</span> Développeur passionné depuis maintenant 1 an j'apprends tous les jours de nouvelles choses. L'univers du
                developpeur est vaste en lignes de codes
                et <b>mon objectif</b> est de pouvoir en maitriser le maximum ! <span>"</span></p>
        </div>
    </div>
    <hr width="90%">
    <h3>Skills</h3>
    <div id="skills">
        <div id="1column">
            HTML
            <div class="myProgress">
                <div class="myBar_html">80%</div>
            </div>
            CSS
            <div class="myProgress">
                <div class="myBar_css">60%</div>
            </div>
            PHP/MYSQL
            <div class="myProgress">
                <div class="myBar_php">60%</div>
            </div>
            JAVASCRIPT
            <div class="myProgress">
                <div class="myBar_java">40%</div>
            </div>
        </div>
            SASS
            <div class="myProgress">
                <div class="myBar_sass">50%</div>
            </div>
            PRESTASHOP
            <div class="myProgress">
                <div class="myBar_presta">50%</div>
            </div>
            JAVA
            <div class="myProgress">
                <div class="myBar_android">40%</div>
            </div>
            WORDPRESS
            <div class="myProgress">
                <div class="myBar_wordpress">60%</div>
            </div>
            GIT
            <div class="myProgress">
                <div class="myBar_git">60%</div>
            </div>
            ANGLAIS
            <div class="myProgress">
                <div class="myBar_anglais">70%</div>
            </div>
            VOLONTÉ
            <div class="myProgress">
                <div class="myBar_volonte">100%</div>
            </div>
            BONNE HUMEUR
            <div class="myProgress">
                <div class="myBar_humeur">100%</div>
            </div>
    </div>
    <hr width="90%">
    <h3>Références</h3>
    <table>
        <div id="reference">
            <div id="oze">
                <tr>
                    <td><img src="images/oze-moz-logo.jpg"></td>
                    <td><p class="description">Aout 2016
                        <br>Création d'un site e-commerce réalisé à l'aide du thème<br> de base proposé par Prestahop</p></td>
                </tr>
            </div>

            <div id="persD">
                <tr>
                    <td><img src="images/logo1.svg" width="300" height="150"></td>
                    <td><p>Mai 2017<br>Refonte du site perspectives-digitales.com from scratch<br>
                        - Ajout d'un back office<br>- Login/mdp sécurisé<br>- Page de création/modification d'article<br>- Ajout/Suppression d'utilisateur<br>- Page de paramètre utilisateur</p></td>
                </tr>
            </div>
        </div>
    </table>
    <footer>
        <h3 id="scroll">Vous voulez me contacter ?</h3>
                <form method="post"  action="index.php" id="contact">
                        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="name" />

                        <input name="email" type="email" class="validate[required,custom[email]] feedback-input"  placeholder="Adresse e-mail" />

                        <textarea name="message" class="validate[required,length[6,800]] feedback-input"  placeholder="Votre message"></textarea>

                        <input name="submit" type="submit" value="Envoyer votre message"/>
                </form>
        <p>Youenn Toullec 2017 all rights reserved.</p>
    </footer>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
