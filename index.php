<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sum($first, $second){
        return $first + $second;
    }

    function subtract($first, $second){
        return $first - $second;
    }

    function multiply($first, $second){
        return $first * $second;
    }

    function divide($first, $second){
        return $first / $second;
    }

   
    ?>

    <form action="index.php" method="post">
        <input type="text" name="one">
        <input type="text" name="two">
        <select name="options" id="">
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <button type="submit" name="click">Run</button>
</form>

<h2>Answer: 
    <?php
    if (isset($_POST['click'])){
        # code...... 
        $first = $_POST['one'];
        $second = $_POST['two'];
        $operator = $_POST['options'];

        if ($operator == "Add") {
            echo sum($first, $second);
        }elseif($operator == "Subtract"){
            echo subtract($first, $second);
        }
        elseif($operator == "Multiply"){
            echo multiply($first, $second);
        }
        elseif($operator == "Divide"){
            echo divide($first, $second);
        }
    }
?>
</h2>
</body>
</html>