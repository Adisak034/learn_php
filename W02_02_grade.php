<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculater</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center">PHP Check Grade A-E form Score</h1>
        <hr>
        <p class="text-center">กรุณากรอกคะแนนเพื่อทำการตรวจสอบว่าได้เกรดอะไร</p>
        <form action="" method="post" class="text-center">
            <div class="form-group"><input type="number" id="score" name="score" value="<?php echo isset($_POST['score']) ? $_POST['score'] : ''; ?>" class="form-control w-50 mx-auto" placeholder="Enter a score" required></div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Check</button>
            <button type="button" class="btn btn-secondary mt-3 mb-3" onclick="clearGrade()">Reset</button>
        </form>
        <!-- คำนวนหาเลขคู่เลขคี่ -->

        <div id="grade" class="mt-3">
            <?php
            $get_score = $_POST['score'] ?? null;
            if ($get_score >= 80) {
                echo "<h3 class='text-success text-center'>Your grade is A</h3>";
            } else if ($get_score >= 70) {
                echo "<h3 class='text-success text-center'>Your grade is B</h3>";
            } else if ($get_score >= 60) {
                echo "<h3 class='text-success text-center'>Your grade is C</h3>";
            } else if ($get_score >= 50) {
                echo "<h3 class='text-success text-center'>Your grade is D</h3>";
            } else {
                echo "<h3 class='text-danger text-center'>Your grade is E</h3>";
            }
            ?>
        </div>
        <a href="index.php">
            <h5 class="text-center mt-5">Home</h5>
        </a>
        <script>
            // ฟังก์ชันสำหรับล้างผลลัพธ์เกรดและช่องกรอกคะแนน
            function clearGrade() {
                document.getElementById('grade').innerHTML = '';
                document.getElementById('score').value = '';
            }
        </script>
    </div>
</body>

</html>