<?php
$host="localhost";
$user="root";
$password="";
$db="backend";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection_abroted");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="select *from login where username='".$username."' AND password='".$password."'";
    
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);
    if($row["usertype"]=="user")
    {
        header("location:products.html");
    }
    elseif($row["usertype"]=="admin")
    {
        header("location:conn.php");
    }
    else{
        echo "username or pass is incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="canonical" href="https://uzhavarbumi.com/our-products"/>
  <link defer href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link defer href="https://fonts.googleapis.com/css?family=Lato:400,900|Montserrat:400,500&display=swap" rel="stylesheet">
  <link href="https://uzhavarbumi.com/css/app.css?v=4" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link href="assets/css/main.css" rel="stylesheet">
</head>
<style>
#cart
  {
   position: absolute;
   top: 10px; 
   left: 475px;
   color: azure;
  }
  body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background-image: url('https://animalsss.com/media/Blog_5Ocbf9d');
    background-repeat:no-repeat;
    background-size: cover ;
    background-attachment: fixed;
  }
  
    
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  font-family: 'poppins';
  background-color: #ecedef;
  line-height: 1.8;
}

a{
  text-decoration: none;
}

#container{
  max-width: 430px;
  margin: 30px auto;
  padding: 20px
}

.form-wrap{
  background: #fff;
  padding: 15px 25px;
  color: #333;
  border-top: 4px solid #800000;
  border-radius: 05px;
}

.form-wrap h1,
.form-wrap p{
  text-align: center;
}

.form-wrap .form-group{
  margin-top: 15px;
}

.form-wrap .form-group label{
  display: block;
  color: #666
}

.form-wrap .form-group input{
  width: 100%;
  padding: 10px;
  border: #ddd 1px solid;
  border-radius: 5px;
  font-family: 'poppins';
}

.form-wrap button{
  display: block;
  width: 100%;
  padding: 10px;
  margin-top: 20px;
  background-color: #800000;
  color: #fff;
  cursor: pointer;
  border: 1px solid  #800000;
  font-family: 'poppins';
  font-size: 15px;
  transition: 1s;
}

.form-wrap button:hover{
  background-color: #800000;
  transition: 1s;
}

.form-wrap .bottom-text{
  font-size: 13px;
  margin-top: 20px;
}

footer{
  text-align: center;
  margin-top: 10px;
  color:#49c1a2;
}

footer a{
  color:#800000
}


  </style>    
<title></title>
</head>
<body>
<div id="container">
      <div class="form-wrap">
        <h1>LOG IN</h1>
        <p>Right purchase At The Right Time </p>
        <form action="#" method="post" >
          <div class="form-group">
            <label for="first-name">User Name</label>
            <input type="text" name="username" id="first-name" >
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
          </div>
          <button type="submit" value="Login">LOGIN</button>
          
        </form>
      </div>

      <footer>
        <p>Create account..<a href="signup.html">  Sign Up</a></p>
      </footer>
    </div>
</form>
</div>
</div>
</div>
</body>
</html>