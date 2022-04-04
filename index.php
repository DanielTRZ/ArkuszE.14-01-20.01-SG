<!DOCTYPE html>
<html lang="pl">
  <head>
     <meta charset="utf-8">
     <title>Nasz sklep komputerowy</title>
     <link rel="stylesheet" href="styl8.css">
  </head>
  <body>
<div id="menu">
    <a href="index.php">Główna</a>
    <a href="procesory.html">Procesory</a>
    <a href="ram.html">RAM</a>
    <a href="grafika.html">Grafika</a>
</div>
<div id="logo">
    <h2>Podzespoły komputerowe</h2>
</div>
<div id="glowny">
    <h1>Dzisiejsze promocje</h1>
    <table>
   <tr>
      <th>NUMER</th> <th>NAZWA PODZESPOŁU</th> <th>OPIS</th><th>CENA</th>
   </tr>
    <?php
    $baza=mysqli_connect('localhost','root','','sklep');
     if(mysqli_connect_errno())
     {echo"wystapil blad polaczenia z baza";}
      $wynik=mysqli_query($baza,'SELECT `id`,`nazwa`,`opis`,`cena` FROM `podzespoly` WHERE `cena` < 1000');
      while($r=mysqli_fetch_array($wynik))
      {
     echo "<tr>";
     echo "<td>";
     echo $r["id"];
     echo "</td>"; 
                
     echo "<td>";
     echo $r["nazwa"];
     echo "</td>";        
          
     echo "<td>";
     echo $r["opis"];
     echo "</td>";  
        
     echo '<td id="right">';
     echo $r["cena"];
     echo "</td>";
     echo "</tr>"; 
      
      }
      
      mysqli_close($baza);
  ?>
</table>
</div>
<div id="stopka1">
    <img src="scalak.jpg" alt="promocje na procesory">
</div>
<div id="stopka2">
    <h4>Nasz Sklep Komputerowy</h4>
    <p>Współpracujemy z hurtownią<a href="http://edata.pl/"target="_blank">edata</a></p>
</div>

<div id="stopka3">
    <p>zadzwoń: 601 602 603</p>
</div>
<div id="stopka4">
    Stronę wykonał:00000000000 
</div>
</body>
</html>
