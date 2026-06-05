<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <h1>งานที่1 ภาณุวิชญ์ คชเวช BIT.1/5 เลขที่ 09</h1>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label>     <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่" . $num;
        }
    ?>

</body>
</html>
