<?php
 session_start();

?>
<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
 ul li a{
text-decoration:none;
color:black;
padding:20px;

 }
 ul li
 {
    margin-top:8px;
 }
li a:hover{
 color:red;
 
}

    </style>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand " href="#"><img src="https://logowik.com/content/uploads/images/apple-black8038.jpg"width="65" height="50">eStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#naveen">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="naveen">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a  href="index.php"><i class="fa-solid fa-house fa-xl " style="color: #3881ff;"></i></a>
        </li>


        <li class="nav-item ">
          <a  href="index.php"><i class="fa-solid fa-bars fa-xl" style="color: #ff00bb;"></i>
          
  
 
        </a>
        </li>

        <li class="nav-item">
          <a href="#"><i class="fa-solid fa-bell fa-shake fa-xl" style="color: #ff1414;"></i></a>
        </li>



        <li class="nav-item">
          <a href="account.php"><i class="fa-solid fa-circle-user fa-xl" style="color: #000000;"></i></a>
        </li>



        <li class="nav-item">
          <a href="#"><i class="fa-solid fa-heart fa-xl " style="color: #ff0000;"></i></a>
        </li>

        <br>
       
            <div>
              <?php 
              $count=0;
              if(isset($_SESSION['cart']))
              {
                $count=count($_SESSION['cart']);
              }
?>






 <a href="mycart.php" class="btn btn-outline-success">My Cart<i class="fa-solid fa-cart-shopping fa-bounce"></i>(<?php echo $count ; ?>)</a></div>
        
      
      
</ul>
    </div>
  </div>
</nav><br><br>
<form class="d-flex mt-2">
  
        <input class="form-control ms-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary ms-2" type="search" href="#">Search</button>
</form>
</body>

</html>