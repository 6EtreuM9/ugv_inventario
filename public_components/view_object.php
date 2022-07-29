<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS body -->
    <?php $url_css_listObj = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/body.css"?>    
    <link rel="stylesheet" href="<?php echo $url_css_listObj ?>">
    <?php $url_css_listObj = "http://".$_SERVER['HTTP_HOST']."/ugv_inventario/css/list_object.css"?>    
    <link rel="stylesheet" href="<?php echo $url_css_listObj ?>">

</head>
<body>
    <?php include "navbar.php"; ?>

    <br>
    <div class="cont_view">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

        <ul id="myUL" class="scroll_css">

            <?php

                include "../administrador/connect/db.php";

                $sql = "SELECT * FROM inventory";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo '    
                        <li>
                            <a href="#">'.$row['object_name'].'</a>
                            <div>
                                <button class="tooltip button_tooltip" href="#">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 283.5 283.5" style="enable-background:new 0 0 283.5 283.5;" xml:space="preserve"  height="20" width="20">
                                        <path d="M-0.4,139.5c1.8-6.4,6.6-10.7,10.8-15.5c14.8-16.9,31.2-32.2,49.9-44.8C78.7,66.6,98.6,57,120.8,52.9
                                            c19.8-3.6,39.3-1.9,58.3,4.5c26.4,8.8,49.2,23.9,69.4,42.7c10.6,9.9,20.3,20.9,30.1,31.6c5.9,6.4,5.7,14.2,0.2,20.8
                                            c-16.5,20-35,38-56.5,52.6c-18.5,12.6-38.4,22.2-60.6,26.3c-19.8,3.7-39.3,1.9-58.3-4.4c-26.4-8.8-49-23.8-69.2-42.5
                                            c-10.8-10-20.5-21.2-30.5-32c-1.9-2.1-2.8-5-4.2-7.6C-0.4,143.2-0.4,141.3-0.4,139.5z M141.3,76.3c-36.4-0.1-65.9,29.3-66.1,65.8
                                            c-0.2,36.3,29.1,65.8,65.8,66.1c36.4,0.3,66.2-29.4,66.2-66C207.2,105.8,177.8,76.4,141.3,76.3z"/>
                                        <path d="M186.8,142.3c-0.1,25.2-20.5,45.5-45.6,45.5c-25.2-0.1-45.5-20.5-45.5-45.6c0.1-25.2,20.5-45.5,45.6-45.5
                                            C166.5,96.8,186.8,117.2,186.8,142.3z M137.8,114c-13.7-1-26.1,12.7-25,24.9c4.8,0,9.7,0,14.5,0c0.9-5.5,3.7-9.1,9.2-10.1
                                            c0.5-0.1,1.2-0.9,1.2-1.4C137.8,123,137.8,118.5,137.8,114z"/>
                                    </svg>
                                    <span class="tooltiptext">Ver</span>
                                </button>                
                            </div>

                        </li>
                    '; 
                }
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>
        </ul>
    </div>
    <script src='../administrador/js/list_user.js'></script>


</body>
</html>