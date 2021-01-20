<!-- Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
$matches = [
  // primo livello
  [
    // secondo livello
    "team1"=>"Toronto",
    "team2"=>"Chicago",
    "score1"=>35,
    "score2"=>54
  ],
  [
    "team1"=>"Cleveland",
    "team2"=>"Baltimore Orioles",
    "score1"=>53,
    "score2"=>55
  ],
  [
    "team1"=>"Cleveland",
    "team2"=>"Baltimore Orioles",
    "score1"=>29,
    "score2"=>46
  ],
];
  $j = count($matches);
  // var_dump($matches);
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <h1> Games:</h1>
        <h2>  <?php
                for ($i = 0; $i < $j; $i++) {
                  $game=$matches[$i];
                  echo $game["team1"]." - ".$game["team2"]." | ".$game["score1"]." - ".$game["score2"]."<br>";
                }
              ?>
        </h2>
    </body>
  </html>
