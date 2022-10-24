<?php 
$voitures=[["nombre"=>3,"prix"=>10000],["nombre"=>5,"prix"=>7000],["nombre"=>3,"prix"=>15000],["nombre"=>5,"prix"=>20000]];
$motos=[["nombre"=>5,"prix"=>5000],["nombre"=>10,"prix"=>3000],["nombre"=>8,"prix"=>4000]];

$prix_total_voitures=0;
$prix_total_motos=0;

foreach ($voitures as  $voituretes)
{
    
      foreach($voituretes as $b  )
      {
           $prix_total_voitures= $prix_total_voitures+($voituretes["nombre"]*$voituretes["prix"]);
      }
    }
foreach($motos as $motoettes)
{
  {
    $prix_total_motos+=($motoettes["nombre"]*$motoettes["prix"]);
  }
}
echo("prix total de voitures : ");
echo  ($prix_total_voitures) . "<br>" . "prix total de motos: ";
echo($prix_total_motos). "<br>";
if ($prix_total_voitures>$prix_total_motos)
{
  echo("Le prix le plus élevé est le prix total de voitures : ");  echo( $prix_total_voitures);

}
else 
{
  echo("Le prix le plus élevé est le prix total de motos : "); echo($prix_total_motos);
}

?>