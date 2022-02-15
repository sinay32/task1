
<?php

    $whereIs2 = array(1,2,3,4,10,11,22,12,40,30,32,15,16,17,18,19);
    echo "<h2>"."Исходный массив:".implode(",",$whereIs2)."</h2>"."<br>";


   for($i = 0; $i< count($whereIs2); $i++)
   {
        if(preg_match('[2]', $whereIs2[$i]))
        {
        $a = " Найдено!";
        $whereIs2[$i] = $whereIs2[$i].$a;
        }
   }

    echo "<h2><pre>";
    print_r($whereIs2);
    echo "</h2></pre>";

    
?>


