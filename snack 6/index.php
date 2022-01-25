<?php

$students = [
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'votes' => [6, 4, 8]
    ],
    [
        'name' => 'Roberta',
        'lastname' => 'Verdi',
        'votes' => [7, 7, 6]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for($i = 0; $i < count($students); $i++) { ?>
        <?php $this_student = $students[$i]; ?>
        <div>
            <h2><?php echo $this_student['name']; ?> <?php echo $this_student['lastname']; ?></h2>
            <?php
            // Calcolo media voto
            // Sommare ogni elementi di votes e poi dividerlo per la lunghezza dell'array votes
            // $votes_sum = 0;
            // for($j = 0; $j < count($this_student['votes']); $j++) {
            //     $this_vote = $this_student['votes'][$j];
            //     $votes_sum += $this_vote;
            // }

            $votes_sum = array_sum($this_student['votes']);

            $avg_vote = $votes_sum / count($this_student['votes']);
            ?>
            <div>Media voto: <?php echo round($avg_vote, 1); ?></div>
        </div>
    <?php } ?>
</body>
</html>