<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sommaire</title>
</head>
<body>
    <h1>Arnaud-Bourique Sylvain</h1>

    <section id="select">

        <?php 
           //enumere le dossier test
           $cont = scandir('projet');

           foreach($cont as $value){
               if($value[0] != '.' && is_dir($value)){
                   $files = scandir($value);
                   for($i = 0; $i < count($files); $i++){
                      echo '<a href="projet/'.$value.'/'.$files[$i].'">'.$files[$i].'</a></br>';
               }}
           }
        ?>

    </section>
</body>
</html>