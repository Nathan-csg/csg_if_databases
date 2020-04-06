<?PHP
$titel=strreplace(""," ",substr(FILE,strpos(FILE,"opdracht"),-4));
include('opdracht_begin.php');
/**TYP HIERONDER JOUW PHPCODE**/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);
$floor=floor(1000000*$rec)/1000000;

echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $floor<br>";

$a=2;
$b=4;
$c=sqrt(pow($a,2)+pow($b,2));
echo $c;
/**EINDE VAN JOUW PHPCODE**/
include('opdracht_eind.php');
?>