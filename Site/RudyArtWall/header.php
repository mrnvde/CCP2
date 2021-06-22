<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Lien pourcharger les differents fichier CSS necessaires-->
        <link rel="stylesheet" href="CSS/design.css">
        <link rel="stylesheet" href="CSS/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/fontawesome/css/all.css">
        <!-- Lien pour metre un icone au site web-->
        <link rel="icon" href="CSS/pictures/canon_eos.ico" />

        <!-- titre du site internet-->
        <title>Rudy Art Wall</title>
    </head>

    <body class="container-fluid" id="default">
        <header class="row" id="entete">
            <div class="col-4 px-0 text-center d-none d-sm-block" id="logoSite">
                <img class="img-fluid" src="CSS/pictures/canon_eos.ico" alt="logo" id="logo">
            </div>
            <div class="col-12 col-sm-8 px-0 d-flex justify-content-center align-items-center" >
                <h1 id="nomSite" class="display-1"> Rudy Art Wall</h1>
            </div>
            <div class="col-sm-12" id="menu">
                <nav class="navbar navbar-expand-md nav-pills p-0">
                    <div class="d-flex justify-content-around m-0 p-0">
                        <div class="nav-link pl-0 py-0">
                            <a class="nav-link p-1" href="index.html"><i class="fas fa-home fa-lg"></i></a>
                        </div>
                        <div class="dropup nav-link pl-0 py-0" id="colorTheme">
                            <a class="nav-link dropdown-toggle p-1" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-paint-brush fa-flip-both"></i></a>
                            <div class="dropdown-menu dropdown-menu-left px-1 py-0" aria-labelledby="navbarDropdownMenuLink" id="dropdownMenuStyle">
                                <p class="d-inline p-1" data-color="black"><i id="blackTheme" class="fas fa-fill-drip fa-lg"></i></p>
                                <p class="d-inline p-1" data-color="grey"><i id="greyTheme" class="fas fa-fill-drip fa-lg"></i></p>
                                <p class="d-inline p-1" data-color="white"><i id="whiteTheme" class="fas fa-fill-drip fa-lg"></i></p>
                            </div>
                        </div>
                    </div>
                    <button class="navbar-toggler nav-link p-1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="nav-link p-1"><i class="fas fa-angle-double-down"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <div class="container-fluid p-0 m-0">
                            <ul class="navbar-nav col-12 d-flex p-0 justify-content-around">
                                <li class="nav-item nav-link flex-fill">
                                    <a class="nav-link p-1 d-flex justify-content-center align-items-center" href="photographe.php"><i class="far fa-address-card fa-lg"></i><span> Photographe </span></a>
                                </li>
                                <li class="nav-item nav-link flex-fill">
                                    <a class="nav-link p-1 d-flex justify-content-center align-items-center" href="categories.php"><i class="far fa-images fa-lg"></i><span> Catégories </span></a>
                                </li>
                                <li class="nav-item nav-link flex-fill">
                                    <a class="nav-link p-1 d-flex justify-content-center align-items-center" href="techniques.php"><i class="fas fa-film fa-lg"></i><span> Techniques </span></a>
                                </li>
                                <li class="nav-item nav-link flex-fill">
                                    <a class="nav-link p-1 d-flex justify-content-center align-items-center" href="connexion.php"><i class="fas fa-fingerprint fa-lg"></i><span> Connexion </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>