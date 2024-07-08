
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <header>
       <nav class="navbar">
         <div class="container">

                <div class="navbar-header">
                        <button class="navbar-toggler" data-toggle="open-navbar1"></button>
                        <a href="#"><h4>Elit<span>Car</span></h4></a>   
                </div>

                    <div class="navbar-menu" id="open-navbar1">
                    <ul class="navbar-nav">
                        <!-- <li class="active"><a href="#">Se connecter</a></li> -->
                        <li class="navbar-dropdown">
                        <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">Se connecter <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown" id="my-dropdown-id">
                            <li><a href="#">Admin</a></li>
                            <li class="separator"></li>
                            <li><a href="#">Professionnel</a></li>
                            <li class="separator"></li>
                            <li><a href="#">particulier</a></li>
                        </ul>
                        </li>
                        <li><a href="#">Agences</a></li>
                        <li><a href="#">F&Q</a></li>
                       
                    </ul>
                    </div>
                </div>
                </nav>
</header>

<nav>
  <ul>
    <li class="deroulant"><a href="#">Cours Complets &ensp;</a>
      <ul class="sous">
        <li><a href="#">Cours HTML et CSS</a></li>
        <li><a href="#">Cours JavaScript</a></li>
        <li><a href="#">Cours PHP et MySQL</a></li>
      </ul>
    </li>
    <li class="deroulant"><a href="#">Articles &ensp;</a>
      <ul class="sous">
        <li><a href="#">CSS display</a></li>
        <li><a href="#">CSS position</a></li>
        <li><a href="#">CSS float</a></li>
      </ul>
    </li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">A propos</a></li>
  </ul>
</nav>

<div class="conteneur">
  <p>Du contenu sous le menu</p>
</div>
<main class="main-18">
    
    <div id="account" class="tab-content" style="display: none;">
        <aside>
            <ul>
                <li><button class="side-button active" onclick="showAccountTab('profile')">Modifier mon profile</button></li>
                <li><button class="side-button" onclick="showAccountTab('settings')">Paramètres du compte</button></li>
                <li><button class="side-button" onclick="showAccountTab('payment')">Moyens de paiement</button></li>
            </ul>
        </aside>
    </div>
</main>