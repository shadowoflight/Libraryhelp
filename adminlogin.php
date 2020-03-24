<?php
session_start();



include "config.php";

$result=pg_query($dbconn,"SELECT username FROM admin_login");
if($result)
{
    echo "fetch ho rha hai";
}
while($admin=pg_fetch_assoc($result))
{
    $admin_name=$admin['username'];
    $admin_password=$admin['password'];
 echo $admin_name;
//if($_SERVER["REQUEST_METHOD"]=="POST")
//{
    $password=$_POST["password-admin"];
    $name=$_POST["name-admin"];
//}
if($name==$admin_name&& $password==$admin_password)
{

    header("Location: adminpage.html");
break;
}
}

header("Location: index2.html");
?>
