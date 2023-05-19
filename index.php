<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> 

    <title>PHP Hotel</title>
</head>
<body>

    <div class="p-4">
        <form method="GET" class="ms-5">

            <div class="form-check d-flex align-items-center">
                <input class="form-check-input" type="checkbox" name="parking" id="parking" style="width: 3%; height: 30px"> 
                <label class="form-check-label text-uppercase ms-2" for="parking"> mostra gli hotel con parcheggio </label> 
            </div>

            <div class="form-check d-flex align-items-center">
                <input class="form-check-input" type="number" name="vote" id="vote" min="1" max="5" placeholder="Inserisci un voto da 1 a 5" style="width: 3%; height: 30px">
                <label class="form-check-label text-uppercase ms-2" for="vote"> scegli le stelle </label>
            </div>
           
            <button type="submit" class="btn btn-primary text-uppercase mt-3"> mostra </button>
        </form>
    </div>

    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> Nome </th>
                    <th> Descrizione </th>
                    <th> Parcheggio </th>
                    <th> Voto </th>
                    <th> Distanza dal centro </th>
                </tr> 
            </thead> 
            
            <tbody>

                <?php foreach ($hotels as $elem){ ?>

                <?php if (!isset($_GET['parking']) || $elem['parking'] == true){ ?>    

                <?php if (isset($_GET['vote']) && $elem['vote'] >= $_GET['vote']){ ?> 

                <tr>
                    <td><?php echo $elem['name']; ?></td>
                    <td><?php echo $elem['description']; ?></td> 
                    <td><?php echo $elem['parking'] ? 'Si' : 'No'; ?></td> 
                    <td><?php echo $elem['vote']; ?></td>
                    <td><?php echo $elem['distance_to_center'] . ' km'; ?></td>
                </tr>

                <?php } ?>

                <?php } ?>

                <?php } ?>

            </tbody>
        </table>
    </div>   
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
</body>
</html>