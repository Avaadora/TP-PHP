<!DOCTYPE HTML>
<!--
  Industrious by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
  <head>
    <title>Articles | ArticlesPlus</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload">

    <!-- Header -->
      <header id="header">
        <a class="logo" href="/">Articles</a>
        <nav>
          <a href="#menu">Menu</a>
        </nav>
      </header>

    <!-- Nav -->
      <nav id="menu">
        <ul class="links">
          <li><a href="/">Accueil</a></li>
          <li><a href="/admin">Admin</a></li>
        </ul>
      </nav>

    <!-- Heading -->
      <div id="heading" >
        <h1>Articles</h1>
      </div>

    <!-- Main -->
      <section id="main" class="wrapper">
        <div class="inner">
          <div class="content">
              <div class="articles">
              <?php foreach ($attributes['articles'] as $article):?>
                <article>
                  <h2><?= $article->getTitle() ?></h2>
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
          </div>
        </div>
      </section>
    <!-- Footer -->
      <footer id="footer">
        <div class="inner">
          <div class="content">
            <section>
              <h4>Contact et Menu</h4>
              <ul class="alt">
                <li><a href="contact.html">Me Contacter</a></li>
                <li><a href="#menu">Menu</a></li>
              </ul>
            </section>
            <section>
              <h4>Liens</h4>
              <ul class="plain">
                <li><a href="https://feedly.com/" target="_blank"><i class="icon fa-rss">&nbsp;</i>Feedly</a></li>
                <li><a href="href="contact.html><i class="icon fa-envelope">&nbsp;</i>Mail</a></li>
              </ul>
            </section>
          </div>
          <div class="copyright">
            <p>Vincent BARTHE | 2020 Tous droits réservés</p>
          </div>
        </div>
      </footer>

    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>