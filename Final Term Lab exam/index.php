<?php
session_start(); 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include("function.php");

$connobj = new CrudApp();
if (isset($_POST['btn1'])) {

    $rtn_msg = $connobj->addInfo($_POST);
}
$edata = $connobj->displayData();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="main">

        <div class="form">
            <h1>Employee Registration</h1>
            <form action="" method = "POST">
                <label for="">Employer Name</label>
                <input type="text" name="Name"><br>
                <label for="cname" id="cname">Company Name</label>
                <input type="text" name="CompanyName" id="companyname"><br>
                <label for="contactn">Contact Number</label>
                <input type="text" name="cn" id="cnumber"><br>
                <label for="uname">Username</label>
                <input type="text" name="username" id="username"><br>
                <label for="">Password</label>
                <input type="text" name="pass" id="password"><br>
                <input type="submit" name="btn1" value="Submit">
                <?php if (isset($rtn_msg)) {
                    echo $rtn_msg;
                } ?>
            </form>
        </div>
       
        <div class="showdb">

            <table>
                <tr>
                    <th>Employe Name</th>
                    <th>Company Name</th>
                    <th>Cotact Number</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
                <?php while ($edatas = mysqli_fetch_assoc(result: $edata)) { ?>
                    <tr>
                        <td><?php echo $edatas['EmployerName'] ?></td>
                        <td><?php echo $edatas['CompanyName'] ?></td>
                        <td><?php echo $edatas['Contact'] ?></td>
                        <td><?php echo $edatas['Username'] ?></td>
                        <td><?php echo $edatas['password'] ?></td>

                    </tr><?php } ?>
            </table>
            
        </div>


    </div>
     <div class="logout">
              <a href="logout.php"><button>Logout</button></a>
        </div>
</body>

</html>