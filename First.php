<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>First Page</h2>

<br>

<form action="Insert.php" method="get">
 <label for="First Name">First Name</label>
 <input type="text" name="FName">
 <br>
 <label for="Second Name">Second Name</label>
 <input type="text" name="LName">
 <br>
 <button type="submit">Submit</button>
</form>


    <?php
    // $Var1 = 123;
    // $Var2 = "Testing Message...";
    // echo "Help ".$Var1." Again ".$Var2;
    

    // DRY RUN
    //5 condition 5>=5; print <br>
    //4 


    function MyFunc($a, $b, $c){
        echo "Hello";
        return "Test";
    }

    // MyFunc();

    // Arrays

    $Array1 = [1,2,3,4,5];

    $Array2 = array('key1' => "Value1", 0 => 123, 'key3' => 12.45);

    $Array3 = array(0 => "Value1", 1 => "Value2", 2 => "Value3");

    $Array4 = array(1,2,3,4,5);

    // foreach ($Array2 as $key => $value) {
    //     # code...
    //     echo $value."<br>";
    //     echo $key."<br>";
    // }

    define("myvar", "Testing My Variable...", true);
    // echo MYVAR;

    ?>
</body>
</html>