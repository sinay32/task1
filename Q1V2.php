
<?php
    $whereIs2 = array(1,2,3,4,10,11,12,40,30,32,22,15,16,17,18,19);
    echo "<h2>"."Исходный массив:".implode(",",$whereIs2)."  -".count($whereIs2)."элементов"."</h2>"."<br>";


    for($i = 0; $i< count($whereIs2); $i++)
    {
        if(preg_match('[2]', $whereIs2[$i]))
        {
            $a = "<mark>,GotIt!</mark>";
            $whereIs2[$i] = $whereIs2[$i].$a;

        }
    }


    $arrayOnString = implode(",",$whereIs2);
    $result = explode(",", $arrayOnString);
    echo "<h2><pre>";
    print_r($result);
    echo "</h2></pre>";

    echo "<h2>"."Результат:".implode(",",$whereIs2)."  -".count($result)."элементов"."</h2>"."<br>";
?>


