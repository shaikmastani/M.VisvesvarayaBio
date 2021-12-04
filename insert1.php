<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
    <style>
        .box{
            border:2px double black;
            padding: 10px;
            width:400px;
            height:150px;
            margin-top:200px;
            background: pink;
            color:black;
            font-size:19px;
            
        }
    </style>
</head>

<body>
    <center>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Follower";
        $conn = mysqli_connect("localhost", "root", "", "Follower");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $username = $_REQUEST['username'];
       // $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $phonecode = $_REQUEST['phonecode'];
        $phone = $_REQUEST['phone'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO data_follow VALUES ('$username','$email','$phonecode','$phone')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";

            echo nl2br("\n$username\n $email\n $phonecode\n $phone");
        } else{
            echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <button><a href="form_vis.html">Go Back to Subscribe</a></button><br><br><br>
    <center>
        <div class="box mt-4">
            <h2>Project Submitted By:</h2>
            <li class="list-group-item">PATHAN ALI AZAM</li>
            <li class="list-group-item">SHAIK HEENA</li>
            <li class="list-group-item">SHAIK MASTANI</li>
    
        </div>
    </center>
</body>

</html>