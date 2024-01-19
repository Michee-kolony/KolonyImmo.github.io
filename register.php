<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="KXczmoSTSaTGgtUBgnSv407dLYquCi9OWfb6Me9Bf18" />
    <meta nane="description" content="malachite-sarl.com">
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="stylesheet" type="text/css" href="fontawesome-free-6.5.1-web/css/all.min.css"> 
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" href="images/ICON ORIGINALE.png" type="image/x-icon">

    <title>Immo</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg fixed-top" style="border-bottom: 1px solid gray;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Immo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: white;"><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="propos.php">Apropos</a>
        </li>
      </ul>
    </div>
    <a href="login.php" class="btn btn-danger" style="border-radius: 200px; font-weight: bold;">Connexion<i class="fa-solid fa-bell"></i></a>
  </div>
</nav>

<section style="margin-top: 55px; background-color: #130D38; padding-bottom: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
         <p style="color: white; font-size: 30px; font-weight: bold; margin-top: 200px; left: 100px; text-align: center;" data-aos="zoom-in-up" data-aos-duration="3000">
        Trouvez des <span style="color:#5C4BC2;">appartements</span> <br>et<span style="color:#5C4BC2;"> Espace à louer </span>avec <span style="color:#5C4BC2;"> meilleurs prix offerts  </span><br> sur ce connectez-vous.
        </p>
      </div>
       <div class="col-md-7">
         <form     style="margin-top: 150px;">
          <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="color: white; font-weight: bold;">Nom</label>
  <input type="texte" class="form-control" id="exampleFormControlInput1">
         </div>
          <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="color: white; font-weight: bold;">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1">
         </div>
          <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="color: white; font-weight: bold;">Tel</label>
  <input type="texte" class="form-control" id="exampleFormControlInput1" placeholder="+243" value="+243">
         </div>
         <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="color: white; font-weight: bold;">Mot de passe</label>
  <input type="password" class="form-control" id="exampleFormControlInput1">
         </div>
         <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label" style="color: white; font-weight: bold;">Confirmer Mot de passe</label>
  <input type="password" class="form-control" id="exampleFormControlInput1">
         </div>
<div class="mb-3">
  <button style="border-radius: 200px;" class="btn btn-outline-danger" type="reset">Annuler</button>
  <button style="border-radius: 200px;" class="btn btn-outline-light">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
</div>
        </form>
<p style="color: white; font-size: 12px;">Nous respectons la politique de confidentialité de vos données personnelles votre mot de passe est chiffré de bout en bout.</p>
       </div>
    </div>
  </div>
</section>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script src="bootstrap-5.0.2-dist//js/bootstrap.bundle.min.js"></script>
  </body>
</html>