<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo "php მასივები "  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>


    <h1  class="text-center mb-5 mt-4" >php - მასივები, დავალება 1</h1>

    <div class="d-flex gap-5 justify-content-center">
        <div class="text-center">

            <h6>while loop</h6>
            <?php 
            //create array;
                $array = [10, 34, 23, 45, 20, 87, 99, 50, 29, 12];
            //while loop;
                    $x = 0;

                    while ($x < 10) {           
                    echo $array[$x] . "<br/>";
                    $x++;
                    }

                    echo "<br/>";
            ?>  
        </div>

        <div class="text-center">
            <h6>for loop</h6>
            <?php 
            //for loop;
                for($i=0; $i<10; $i++){
                    echo $array[$i] . "<br/>";
                }
            ?>  
        </div>

        <div class="text-center">
            <h6>foreach loop</h6>
            <?php 
            //foreach loop;
                foreach($array as $results){

                    echo $results. "<br/>";
                }
            ?>  
        </div>
    </div> 
</body>
</html>