<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/mystylecss.css">
</head>
<body>
    <?php
        function set_bilangan_1()
        {
            if (isset($_GET['bilangan_1'])){
                return $_GET['bilangan_1'];
            }
        }

        function set_bilangan_2()
        {
            if (isset($_GET['bilangan_2'])){
                return $_GET['bilangan_2'];
            }
        }

        function set_bilangan_3()
        {
            if (isset($_GET['bilangan_3'])){
                return $_GET['bilangan_3'];
            }
        }
    ?>
    <main>
        <h1>Form Menghitung Rata-Rata dari Tiga Buah Bilangan</h1>
        <form action="proses/proses.php" method="post">
            <label for="input_bilangan_1">Inputkan Bilangan 1 :</label>
            <input type="text" name="input_bilangan_1" id="input_bilangan_1" value="<?php echo set_bilangan_1()?>">

            <?php
            if(isset($_GET['error_bilangan_1'])){
                echo "<p class='error-message'>" . $_GET['error_bilangan_1'] . "</p>";
            }
            ?>

            <label for="input_bilangan_2">Inputkan Bilangan 2 :</label>
            <input type="text" name="input_bilangan_2" id="input_bilangan_2" value="<?php echo set_bilangan_2()?>">

            <?php
            if(isset($_GET['error_bilangan_2'])){
                echo "<p class='error-message'>" . $_GET['error_bilangan_2'] . "</p>";
            }
            ?>

            <label for="input_bilangan_3">Inputkan Bilangan 3 :</label>
            <input type="text" name="input_bilangan_3" id="input_bilangan_3" value="<?php echo set_bilangan_3()?>">

            <?php
            if(isset($_GET['error_bilangan_3'])){
                echo "<p class='error-message'>" . $_GET['error_bilangan_3'] . "</p>";
            }
            ?>

            <input type="submit" value="submit">
        
        </form>
        <?php
            if (isset($_GET['hasil'])){
                echo "<h2 class='hasil'>Rata - Rata = " . $_GET['hasil'] . "</h2>";
            }
        ?>
    </main>
</body>
</html>