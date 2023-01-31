<!DOCTYPE html>
<head>
    <title>Exercise 1</title>
</head>
<body>
    <h1>Function: uppercaseFirstandLast</h1>
    <?php
        function uppercaseFirstandLast($string) {
            $foo = ucwords(strrev(ucwords(strrev($string))));
            echo $foo;
        }
        uppercaseFirstandLast("the earth is round");
    ?>

    <h1>Function: findAverage_and_Median</h1>
    <?php
        function findAverage_and_Median($numbers) {
            $sum = 0;

            for ($i = 0; $i < count($numbers); $i++) {
                $sum = $sum + $numbers[$i];
            }

            $average = $sum/count($numbers);

            sort($numbers);

            $halfLength = count($numbers)/2;

            $median_position = (int) $halfLength;

            $median = $numbers[$median_position];

            $output = array($average, $median);

            return $output;

        }
        $final = findAverage_and_Median(array(2,3,4,5,7,9));
        echo "The average is: ".$final[0]."<br>";
        echo "The median is: ".$final[1];    
    ?>
     
</body>
</html>