<?php
    include './database.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="style.css">
    <title>PHP AJAX Dischi</title>
    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        header{
            height: 15vh;
        }
        main{
            height: 85vh;
        }
        .album{
            height: 48%;
            border: none;
        }
        .album img{
            height: 60%;
        }
        .album h5{
            max-height: 15%;
            text-align: center;
        }
        .album span{
            height: calc(25% / 3)
        }

.album span{
    color: silver;
    font-size: 14px;
    padding: 5px 0px;
}
    </style>
</head>
<body>
    <header>
        <div class="header_container">
            <img src="spotyLogo.png">
        </div>
    </header>
    <main>
        <ul class="album_wrapper">
            <?php
                foreach ($albums as $value){
            ?>
            <li class="album"> 
                <img src="<?php echo $value['poster'];?>"/>
                <h5>
                    <?php
                        echo $value['title'];
                    ?>
                </h5>
                <span>
                    <?php
                         echo $value['author'];
                    ?>
                </span>
                <span>
                    <?php
                        echo $value['genre'];    
                    ?>
                </span>
                <span>
                    <?php
                        echo $value['year'];
                    ?>
                </span>
            <?php
                }
            ?>
            </li>
        </ul>
    </main>
</body>
</html>