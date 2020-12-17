<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <title>TP PHP Manon</title>

    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>

    <div class="wrapper">

      <nav class="enabled">
        <ul>
          <li><a href="/">Acceuil</a></li>
          <li><a href="/admin">Admin</a></li>
        </ul>
      </nav>

      <h1>Page d'administration</h1>
      <form id="form-traitement">
        <fieldset>
          <label for="edit">Editer un article</label>
          <input type="text" name="edit">
          <button>Editer</button>
        </fieldset>
        <fieldset>
          <label for="delete">Supprimer un article</label>
          <input type="text" name="delete">
        </fieldset>
        <button>Supprimer</button>
      </form>
      <?php
        if ( (isset($_POST["pseudo"]) && "" != $_POST["pseudo"]) && (isset($_POST["password"]) && "" != $_POST["password"]) ) {
          $pseudo = htmlspecialchars(trim($_POST["pseudo"]));
          $password = htmlspecialchars(trim($_POST["password"]));
          if ($pseudo == "Laxri" && $password == "mdp"){
            $_SESSION['pseudo'] = $pseudo;
            return true;
          }
        }
        return false;
      ?>
    
    </div>
    
    <script src="/js/nav.js"></script>
  </body>
</html>