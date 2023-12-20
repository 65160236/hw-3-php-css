<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div class = "ex1" >

    <table>
        <tbody>
            <?php 
             for($i = 1 ; $i <= 24 ; $i++){
                echo "<tr>" ; 
                echo "<td>$multi_x x $i = ".$i*$multi_x."</td>" ;
                echo "</tr>" ;
             }
            ?>
        </tbody>
    </table>
            </div>

    <style>
        
        table {
            width: 150px;
            height: 200px;
        }

        div.ex1 {
        text-shadow: 0 0 0 transparent, 0 0 5px #FF1493, 0 0 10px #FF1493, 0 0 20px #FF1493, 0 0 40px #FF1493,
         0 0 100px #FF1493, 0 0 200px #FF1493, 0 0 500px #FF1493;
        height: 270px;
        width: 200px;
        overflow-y: scroll;
        
        }
    </style>
</body>

</html>