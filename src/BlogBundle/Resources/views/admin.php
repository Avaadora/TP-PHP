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

      <form id="form-connexion" method="POST" action="/edit">
        <fieldset>
          <label for="pseudo">Pseudo :</label>
          <input type="text" name="pseudo" autofocus value="">
        </fieldset>
        <fieldset>
          <label for="password">Mot de passe :</label>
          <input type="password" name="password">
        </fieldset>
        <button type="submit">Valider</button>
      </form>
    
    </div>
    
    <script src="/js/nav.js"></script>
  </body>
</html>