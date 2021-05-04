<?php

  // Creiamo un array 'matches' contenente altri array i
  // quali rappresentano delle partite di basket di
  // un’ipotetica tappa del calendario. Ogni array della
  // partita avrà una squadra di casa e una squadra
  // ospite, punti fatti dalla squadra di casa e punti fatti
  // dalla squadra ospite.
  // Stampiamo a schermo tutte le partite con questo
  // schema:
  // Olimpia Milano - Cantù | 55 - 60

  $matches = [
    [
      'squadraCasa' => 'Olimpia Milano',
      'squadraOspite' => 'Cantù',
      'puntiSquadraCasa' => 20,
      'puntiSquadraOspite' => 55,
    ],
    [
      'squadraCasa' => 'Virtus Basket Padova',
      'squadraOspite' => 'Basket Mestre',
      'puntiSquadraCasa' => 60,
      'puntiSquadraOspite' => 50,
    ]

  ];

  foreach($matches as $partita){

    echo $partita['squadraCasa']." - ".$partita['squadraOspite']." | ".$partita['puntiSquadraCasa']." - ".$partita['puntiSquadraOspite'];
  }
?>



