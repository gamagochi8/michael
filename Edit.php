<?php

include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $name=$_POST['name'];
    $NPM=$_POST['NPM'];
    $Kelas=$_POST['Kelas'];

     $result = mysqli_query($mysqli, "UPDATE users SET name='$name',NPM='$NPM',Kelas='$Kelas' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $NPM = $user_data['NPM'];
    $Kelas = $user_data['Kelas'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="Kelas" value=<?php echo $Kelas;?>></td>
            </tr>
            <tr> 
                <td>NPM</td>
                <td><input type="text" name="NPM" value=<?php echo $NPM;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>