<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Sommaire</title>
</head>
<body>
    <section id="perso">
        <div>
            <p>Arnaud-Bourique</p>
            <p>Sylvain</p>
            <p>24 ans</p>
            <p>Rhone - St Bonnet de mure</p>
            <p>9 Impasse du Matinau</p>
            <p>arnaudbouriquesylvain@gmail.com</p>
            <ol>
                <h6>Restauration</h6>
                <li>- Equipier</li>
                <li>- Chef d'équipe</li>
                <li>- Manager de zone</li>
                <li>- Manager</li>
                <h6>Hors McDo</h6>
                <li>- Barman/Serveur</li>
                <li>- Manutention</li>
            </ol>
            <ol>
                <h6>Experience Developpeur</h6>
                <li>Simplon</li>
                <li>HackaPress 2017</li>
            </ol>
            <p>GitHub : ABSylvain</p>
        <div>
    </section>
    <section class="fenetre1">
    <?php 
        if($dossier = opendir('projet/')) {
            while($fichier = readdir($dossier)) {
                if($fichier !='.' && $fichier != '..' && $fichier != '.DS_Store'){
                    if($dos = is_dir($fichier[0])){
                        if($files = opendir($dos)){
                            echo $files;
                            while($fi = file_get_contents($files)) {
                                echo $fi;
                            }
                        }
                    }
                }
            }
        }
    ?>
    </section>
    <section class="fenetre2">
    <?php 
        if($dossier = opendir('projet/')) {
            while($fichier = readdir($dossier)) {
                if($fichier !='.' && $fichier != '..' && $fichier != '.DS_Store'){
                    $cont = opendir('projet/'.$fichier);
                        echo $cont;
                        }
                    }
                       
                }
            
        
    ?>
    </section>
    <section class="fenetre3">
    <?php 
        if($dossier = opendir('projet/')) {
            while($fichier = readdir($dossier)) {
                if($fichier !='.' && $fichier != '..' && $fichier != '.DS_Store'){
                    echo '<p>'.$fichier.'</p>';
                }
            }
        }
    ?>
    </section>
</body>
</html>