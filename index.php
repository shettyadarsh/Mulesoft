<?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('charlie' , 'rakshit' , 'charlie' , 'adarsh' , 2001),('thavare' , 'ramesh' , 'shreenidhi' , 'prashanth' , 2015),('beast' , 'vijay' , 'pooja' , 'nelson' , 2021),('A' , 'upendra' , 'rakshitha' , 'adarsh' , 2001),('ramaramana' , 'rakshit' , 'charlie' , 'adarsh' , 2001)";  

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert("movie details added successfully");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>