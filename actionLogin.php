<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashd_pass = password_hash($password,PASSWORD_DEFAULT);
    //DATABASE
    $conn = new mysqli("localhost", "root", "", "SchoolProject");
    $sql = "Select  Password, Username, ID, Name, Email, Wallet From Users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc()) 
        {
            if (password_verify($password, $row["Password"]) && password_verify($username, $row["Username"])) 
            {
                $_SESSION['ID'] = $row["ID"];
                $_SESSION['Name'] = $row["Name"];
                $_SESSION['Email'] = $row["Email"];
                $_SESSION['Wallet'] = $row["Wallet"];
                $_SESSION['Username'] = $username;
                $_SESSION['Password'] = $password;
                echo $_SESSION['ID']. $_SESSION['Password']."________". $_SESSION['Username'];
                echo $row["Username"];
            }
        }
    }
?>