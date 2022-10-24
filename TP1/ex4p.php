<?php
$txtfile=fopen("ex4","r");
while(!feof($txtfile))
{
    $ligne=fgets($txtfile);
    $tab=explode("|",$ligne);
    for($i=0;$i<sizeof($tab);$i++)
    echo"$tab[$i]". '<br>';
}
?>