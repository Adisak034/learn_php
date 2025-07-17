<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center">Odd Even Number Checker</h1>
        <hr>
        <p class="text-center">กรุณาใส่ตัวเลขเพื่อทำการตรวจสอบว่าเป็นเลขคู่เลขคี่</p>
        <form action="" method="post" class="text-center">
            <div class="form-group"><input type="number" name="number" class="form-control w-50 mx-auto" placeholder="Enter a number" required></div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Check</button>
        </form>
        <!-- คำนวนหาเลขคู่เลขคี่ -->

        <?php

        $get_number = $_POST['number'] ?? null;
        if ($get_number % 2 == 0) {
            echo "<h3 class='text-success text-center'>The number $get_number is an even number</h3>";
        } else {
            echo "<h3 class='text-danger text-center'>The number $get_number is an odd number</h3>";
        }
        ?>
        <a href="index.php">
            <h5 class="text-center mt-5">Home</h5>
        </a>

    </div>
</body>

</html>