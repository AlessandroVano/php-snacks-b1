<?php
//Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
      $arrayDb = array_keys($db);
      var_dump($arrayDb);

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
    <div style="display:flex">
        <div style="background-color: lightblue; width:150px; text-align:center; padding-bottom:10px; margin-left: 20% "> 
          <h2>
            <?php echo $arrayDb[0]; ?>
          </h2>
           <span>
            <?php for ($i = 0; $i < count($db[$arrayDb[0]]); $i++) {
                echo $db[$arrayDb[0]][$i]['name'].' '. $db[$arrayDb[0]][$i]['lastname'].'<br>';
            } ?>
           </span>
        </div>
        <div style="background-color: coral; width:150px; text-align:center; padding-bottom:10px; margin-left: 20% "> 
          <h2>
            <?php echo $arrayDb[1]; ?>
          </h2>
           <span>
            <?php for ($i = 0; $i < count($db[$arrayDb[1]]); $i++) {
                echo $db[$arrayDb[1]][$i]['name'].' '. $db[$arrayDb[1]][$i]['lastname'].'<br>';
            } ?>
           </span>
        </div>


    </div>
</body>
</html>

