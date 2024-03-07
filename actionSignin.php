<?php
function redirect($url)
{
    if (!headers_sent()){
        header("Location: $url");
    }else{
        echo "<script type='text/javascript'>window.location.href='$url'</script>";
        echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
    }
    exit;
}
if (isset($_POST['Name']) && !empty($_POST['Name']) &&
    isset($_POST['UserName']) && !empty($_POST['UserName']) &&
    isset($_POST['Pass']) && !empty($_POST['Pass']) &&
    isset($_POST['Email']) && !empty($_POST['Email'])) {
    $Name = htmlspecialchars($_POST['Name']);
    
    $UserName =htmlspecialchars ($_POST['UserName']);
    $Pass =htmlspecialchars ($_POST['Pass']);
    $Email =htmlspecialchars ($_POST['Email']);
    $hashd_pass = password_hash($Pass,PASSWORD_DEFAULT);
    $hashd_user = password_hash($UserName,PASSWORD_DEFAULT);
    }

 else
    exit("some field did not get value!");
// DATABASE
$conn = new mysqli("localhost", "root", "", "SchoolProject");
$bool = false;
$sql = "Select Username, Email From Users";
$result = $conn->query($sql);
if ($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()) 
      {
        if (password_verify($UserName, $row["Username"]) || $Email === $row["Email"])
        {
          $bool = true;
        }
      }
    }
if($bool === false)
    {
        $sql = "insert into Users(Name,Email, Username, Password) values('$Name','$Email','$hashd_user','$hashd_pass')";
        if (mysqli_query($conn, $sql) === true) 
        {
          redirect("http://localhost/SchoolProject/Index.php");
        }
    }
    else
        {
          redirect("http://localhost/SchoolProject/Signin.php");
        }
?>