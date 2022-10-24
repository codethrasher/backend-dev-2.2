<?php echo"Affichage date";
$date=date('d-m-y h:i:s');
echo $date;
echo "<br>";
echo substr($date,-8,2);
if (substr($date,-8,2 )<12)
{
    echo "Bonjour chef";
}
elseif ((substr($date,-8,2)>12) And (substr($date,-8,2)<20))
{
    echo "Bon après midi";

}
elseif ((substr($date,-8,2)>20) && (substr($date,-8,2)<24))
{
    echo "bonne nuit";
}
?>