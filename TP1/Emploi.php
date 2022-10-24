<!DOCTYPE html>
<html lang="en">
<head>
<title>Documents</title>
</head>
<body>
    <?php

    $schedule = ['lundi '=>['s1'=>["mat"=>"prog","salle"=>"li1.1","prof"=>""],
    's2'=>["mat"=>"bd","salle"=>"li1.3","prof"=>""],
's3'=>["mat"=>"","salle"=>"","prof"=>""],
's4'=>["mat"=>"","salle"=>"","prof"=>""],
's5'=>["mat"=>"prog_objet","salle"=>"li2.4","prof"=>""],
's6'=>["mat"=>"framework","salle"=>"li3.3","prof"=>""],
],
' mardi '=>['s1'=>["mat"=>"francais","salle"=>"li1.1","prof"=>""],
's2'=>["mat"=>"anglais","salle"=>"li1.3","prof"=>""],
's3'=>["mat"=>"","salle"=>"","prof"=>""],
's4'=>["mat"=>"prog_objet","salle"=>"li2.4","prof"=>""],
's5'=>["mat"=>"atel_dev","salle"=>"li3.3","prof"=>""],
's6'=>["mat"=>"","salle"=>"","prof"=>""],
],
' mercredi '=>['s1'=>["mat"=>"Modelisation_objet","salle"=>"li1.1","prof"=>""],
's2'=>["mat"=>"Droit","salle"=>"li1.3","prof"=>""],
's3'=>["mat"=>"atelier_bd","salle"=>"li2.4","prof"=>""],
's4'=>["mat"=>"","salle"=>"","prof"=>""],
's5'=>["mat"=>"Preparation_certification","salle"=>"li3.3","prof"=>""],
's6'=>["mat"=>"","salle"=>"","prof"=>""],
], 
' jeudi '=>['s1'=>["mat"=>"prog","salle"=>"li1.1","prof"=>""],
's2'=>["mat"=>"bd","salle"=>"li1.3","prof"=>""],
's3'=>["mat"=>"","salle"=>"","prof"=>""],
's4'=>["mat"=>"","salle"=>"","prof"=>""],
's5'=>["mat"=>"prog_objet","salle"=>"li2.4","prof"=>""],
's6'=>["mat"=>"framework","salle"=>"li3.3","prof"=>""],
],
' vendredi'=>['s1'=>["mat"=>"prog","salle"=>"li1.1","prof"=>""],
's2'=>["mat"=>"bd","salle"=>"li1.3","prof"=>""],
's3'=>["mat"=>"prog_objet","salle"=>"li2.4","prof"=>""],
's4'=>["mat"=>"framework","salle"=>"li3.3","prof"=>""],
's5'=>["mat"=>"","salle"=>"","prof"=>""],
's6'=>["mat"=>"","salle"=>"","prof"=>""],
],
' samedi '=>['s1'=>["mat"=>"prog","salle"=>"li1.1","prof"=>""],
's2'=>["mat"=>"bd","salle"=>"li1.3","prof"=>""],
's3'=>["mat"=>"","salle"=>"","prof"=>""],
's4'=>["mat"=>"","salle"=>"","prof"=>""],
's5'=>["mat"=>"atelier_frame_work","salle"=>"li2.4","prof"=>""],
's6'=>["mat"=>"Preparation_certification","salle"=>"li3.3","prof"=>""],
],
];
echo "<table border =3 ><tr>";
foreach($schedule as $jour=> $séances){
    echo"<td>$jour</td>";

foreach($séances as  $keyséance => $infos )
   {
   // echo"<tr>$keyséance</tr>";
    
   }

    //foreach($infos as $keymeta => $meta)
        //echo"<td>$keymeta</td>";

echo"</table>"
        ?>
</body>
</html>