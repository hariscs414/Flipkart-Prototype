<?php
   session_start();
   header('Location:login-fitmart.html');
   $con=mysqli_connect('localhost','root');
   if($con){
    echo"connection successfully"; 
   }
   else{
    echo"No connection";
   }
   mysqli_select_db($con,'fitmartVS');
   $name=$_POST['email'];
   $pass=$_POST['password'];

   $quer="select * from usserdata where username = '$name'&& password = '$pass'";
   $result=mysqli_query($con,$quer);
   $num=mysqli_num_rows($result);
   if($num==1)
   {
    echo"Duplicate Data";
   }
   else
   { $querr="insert into usserdata(username,password) values('$name','$pass')";
   mysqli_query($con,$querr);
    }


?>