<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>smart watch</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div class ="container">
            <h2>welcome to smart watch app</h2>
            <div class="content">
               <div class="box">
                    <div class="data">
                        <?php
                            $time = $connection->prepare("SELECT* FROM smart_data");
                            $time->execute();
                            $data = $time->fetch();
                            echo date("h:i:sa");
                        ?>
                    </div>
               </div>
                <div class="box">
                    <div class="watch">
                         <?php
                            $time = $connection->prepare("SELECT* FROM smart_data");
                            $time->execute();
                            $data = $time->fetch();
                            echo date("Y/m/d");
                        ?>
                    </div>
                </div>
                <div class="box">
                    <div class="status">
                        <?php
                            $time = $connection->prepare("SELECT* FROM smart_data");
                            $time->execute();
                            $data = $time->fetch();
                            echo $data['status'];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>