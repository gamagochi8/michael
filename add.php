<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="NPM"></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="Kelas"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $NPM = $_POST['NPM'];
        $Kelas = $_POST['Kelas'];
       
        include_once("config.php");


        $result = mysqli_query($mysqli, "INSERT INTO users(name,Kelas,NPM) VALUES('$name','$Kelas','$NPM')");

  
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>