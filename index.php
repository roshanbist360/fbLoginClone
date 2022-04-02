<?php
   
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="web";

   //Creating connection
   $conn=mysqli_connect($servername,$username,$password,$dbname);

   //Check connection
   if(!$conn){
   	   die("Connection Failed:".mysqli_connect_error());
   }

   //Inserting multiple data to database
   if($_SERVER["REQUEST_METHOD"]=="POST"){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $sql="INSERT INTO web(Username,Password) VALUES('$username','$password')";

      // Checking record inserted to database or not
      if(mysqli_multi_query($conn,$sql)){
      	 echo"Records are inserted successfully";
      }
      else{
      	echo"Error".$sql."<br>".msqli_error($conn);
      }
   }
   

?>