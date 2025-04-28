
<?php include 'header.php' ?>
<?php
session_start();
if(isset($_SESSION['user']))
{
echo "Hello there,".$_SESSION['user'];  
}
else
{
 header('Location:login.html');
} ?>
<?php include 'footer.php' ?>


