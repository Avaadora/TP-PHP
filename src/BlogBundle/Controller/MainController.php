<?php

require_once __DIR__.'/../Repository/ArticleRepository.php';

class MainController {
  private $path_of_views = __DIR__."/../Resources/views";

  public function homeAction() {
    $articles = (new ArticleRepository())->findAll();

    $response = array(
      "view" => $this->path_of_views."/home.php",
      "attributes" => [
        "articles" => $articles
      ]
    );
    
    return $response;
  }

  public function adminAction() {
    $response = array(
      "view" => $this->path_of_views."/admin.php",
      "attributes" => []
    );
    return $response;
  }

  public function notFoundAction() {
    $response = array(
      "view" => $this->path_of_views."/404.php",
      "attributes" => []
    );
    return $response;
  }

  public function connexionAction() {
    $response = array(
      "view" => $this->path_of_views."/edit.php",
      "attributes" => []
    );
    return $response;
  }

  public function checkLogin() {

    if ( (isset($_POST["pseudo"]) && "" != $_POST["pseudo"]) && (isset($_POST["password"]) && "" != $_POST["password"]) ) {
      $pseudo = htmlspecialchars(trim($_POST["pseudo"]));
      $password = htmlspecialchars(trim($_POST["password"]));
      if ($pseudo == "Laxri" && $password == "mdp"){
        $_SESSION['pseudo'] = $pseudo;
        return true;
      }
    }
    return false;
  }
}
