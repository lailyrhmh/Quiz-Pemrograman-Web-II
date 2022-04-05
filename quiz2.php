<html>
    <head>
        <title>Quiz 2</title>
    </head>
    <body>
        <h1></h1>
        <form action="" method="post">
            <input type="text" name="nim">
            <input type="submit" name="sorting" value="Print Segitiga">
        </form>
    </body>

<?php
    if(isset($_POST["sorting"])){
        $data = $_POST["nim"];
        $nim = str_split($data);
        
        echo "<h1>NIM: $data <br></h1>";
        echo "<h2>Segitiga NIM</h2>";
        //<h1>NIM: $data <br></h1>;

        for($a=0; $a<=12; $a++){
            for($b=0; $b<=$a; $b++){
                echo $nim[$b];
            }
        echo "<br>";
        }
        for($a=12; $a>=0; $a--){
            for($b=0; $b<=$a; $b++){
                echo $nim[$b];
            }
        echo "<br>";
        }
    }
?>

</html>