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

      <h1>Bienvenu sur le site !</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <div class="articles">
      <?php foreach ($attributes['articles'] as $article): ?>
        <article>
          <h1><?= $article->getTitle() ?></h1>
          <div class="meta-data">
            <span class="author">Auteur: <?= $article->getAuthor() ?></span> -
            <span class="category">Catégorie: <?= $article->getCategory() ?></span> -
            <span class="creation-date">Date: <?= $article->getCreatedAt() ?></span>
          </div>
          <p><?= $article->getContent() ?></p>
        </article>
      <?php endforeach; ?>
      </div>

    </div>
    
    <script src="/js/nav.js"></script>
  </body>
</html>