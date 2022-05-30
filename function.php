<?php

session_start();
$conn= new mysqli('localhost','root','','project_ajax');
if(isset($_POST["action"])){
    if($_POST["action"] == "register"){
      register();
     
   }
    else if($_POST["action"] == "login"){
      login();
    }
}

//for registration

function register(){
    global $conn;
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($name) || empty($email) || empty($cell) || empty($username) || empty($password)){
            echo "Please fill out the form";
            exit;
        }
        $user=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
        if(mysqli_num_rows($user)>0){
            echo "Username has already taken";
            exit;
        }
        $user=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
        if(mysqli_num_rows($user)>0){
            echo "Email has already taken";
            exit;
        }
        $user=mysqli_query($conn,"SELECT * FROM users WHERE cell='$cell'");
        if(mysqli_num_rows($user)>0){
            echo "Cell has already taken";
            exit;
        }
    
    $conn-> query("INSERT INTO users(name, email, cell, username, password) VALUES('$name','$email','$cell','$username','$password')");

    echo "Register Successfull";



    
    exit;

}

//for login
function login(){
    global $conn;
  
    $email = $_POST["email"];
    $password = $_POST["password"];
  
    $user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  
    if(mysqli_num_rows($user) > 0){
  
      $row = mysqli_fetch_assoc($user);
  
      if($password == $row['password']){
      
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        echo "Login Successfull";

      }
      else{
        echo "Wrong Password";
        exit;
      }
    }
    else{
      echo "User Not Registered";
      exit;
    }
  }
?>