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
    <button id="openFiche">Un peut plus sur moi</button>
    <section id="perso">
        <button id="closeFiche">Retour au projet</button>
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
    
    <?php 

    $i=1;
    
    if($dossier = opendir('projet/')) {
        while($fichier = readdir($dossier)) {
            if($fichier !='.' && $fichier != '..' && $fichier != '.DS_Store'){
                if ($file = opendir('projet/'.$fichier)) {
                    while($files = readdir($file)){
                        if($files == 'index.php'){
                            echo '<section class="fenetre1">';
                            echo '<a href="projet/'.$fichier.'/'.$files.'">'.$fichier.'</a>';
                            echo '</section>';
                            $i++;
                        }
                    }
                }
            }
        }
    }
                
            
        
    ?>
    <script src="script.js"></script>
</body>
</html>