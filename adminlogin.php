<?php
session_start();
include "config.php";

$result=pg_query($dbconn,"SELECT * FROM admin_login WHERE username='".$_POST["name-admin"]."';");

if($result)
{
    echo "fetch ho rha hai";
    $admin=pg_fetch_assoc($result);
    $admin_name=$admin['username'];
    $admin_password=$admin['password'];
    $password=$_POST["password-admin"];
    $name=$_POST["name-admin"];
    if($name==$admin_name&& $password==$admin_password)
        {
            header("Location: adminpage.html");
        }
    else 
        {
            header("Location: index2.html");
        }
}
else 
    {
        header("Location: index2.html");
    }

?>
