<!DOCTYPE php>
<?PHP 
session_start();
include "register/config/db.php";
if (!isset($_SESSION['admin_name'])) {
    header("location:register/login.php");
}
?>



<!---delete method--->


 

<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Royal Spring || admins</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <style>
    input{
      background:none;
      border:1px solid gray;
      color:#fff;
    }
  </style>

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="../css/main.css.map">
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Royal Spring  - v4.10.0
  * Template URL: https://bootstrapmade.com/Royal Spring -free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    main{
      overflow-x: hidden;
    }
    body{
      overflow-x: hidden;
    }
  </style>
</head>

<body>
<title>Landing Page || with bootstrap</title>
</head>
<body class="bg-dark">
<header class="bg-dark">

<!-----
  <section class="text-light hero text-light" id="hero" dir="rtl">

    <div class="container my-5" data-aos="fade-up" data-aos-delay="100">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3  shadow-lg">
        <div class="col-lg-5 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-5" src="assets/uploads/882B1607-D8E2-4D17-B64F-C97E362979B2.JPG" id="mx-image" alt="" width="1000">
      </div>
        <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1 mb-3" data-aos="fade-up" >יהונתן גבאי</h1>
          <h2 class="lead fw-bold mb-3" data-aos="fade-down"><span id="element" class="mb-3"></span></h2>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 mt-5">
            <form action="#contact" method="post">
              <button type="submit"  class="btn btn-primary btn-lg px-4 me-sm-3 w-100 text-light rounded-5 fw-bold w-100 mx-3" data-aos="fade-up">פרטים נוספים</button>
            </form>
            <form action="#portfolio" method="post">
              <button type="submit"  class="btn btn-outline-light btn-lg px-4 rounded-5 w-100 mx-3" data-aos="fade-up">תיק עבודות</button>
            </form>
          </div>
          <div class="col-lg-4 d-flex" id="social-links-col">
            <button class="btn btn-outline-light rouned-pill text-light bg-dark m-3 mb-5" data-aos="flip-up" id="social-link"><i class="fa-brands fa-instagram"></i></button>
            <button class="btn btn-outline-light rouned-pill text-light bg-dark m-3 mb-5" data-aos="flip-up" id="social-link"><i class="fa-brands fa-whatsapp"></i></button>
            <button class="btn btn-outline-light rouned-pill text-light bg-dark m-3 mb-5" data-aos="flip-up" id="social-link"><i class="fa-brands fa-tiktok"></i></button>  
          </div>
        </div>

      </div>
    </div>
    
  </section>
--->


  <section class="text-light hero shadow-lg rounded-5 h-100" id="hero">

    
   
    <div class="container-fluid d-flex justify-content-center align-items-center" id="p-ab">
      <div class="overlay" id="">

      <div class="px-4 py-5 my-5 text-center mt-5" data-aos="fade-up">
       
        
        <h1 class="display-5 text-light fw-bold mt-5" data-aos="fade-up" >headline of the page</h1>
         
        <h2 data-aos="fade-down" class="mt-5">  </h2>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5 mt-5">
            <form action="../index.html" method="post">
              <button type="submit"  class="btn btn-primary btn-lg px-4 me-sm-3 w-100 text-light rounded-5 fw-bold">Home Page</button>
            </form>
            <form action="register/logout.php" method="post">
              <button type="submit"  class="btn btn-outline-light btn-lg px-4 rounded-5 w-100">Log out</button>
            </form>
          </div>
          <button class="btn btn-outline-light rouned-pill text-light  m-3 mb-5" data-aos="flip-up" id="social-link"><i class="fa-brands fa-instagram"></i></button>
          <button class="btn btn-outline-light rouned-pill text-light  m-3 mb-5" data-aos="flip-up" id="social-link"><i class="fa-brands fa-whatsapp"></i></button>
          <button class="btn btn-outline-light rouned-pill text-light  m-3 mb-5" data-aos="flip-up" id="social-link"><i class="fa-brands fa-tiktok"></i></button>

      
  
  
      </div>
    </div>
  
    


    
  </section>
</header>


      

<main>
   <!------contact table start----->
  <section class="text-light w-100 m-5" id="contact">
  <h2 id="contact" class="">contact users</h2>
      <div class="table-responsive" >
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" class="text-light">#</th>
              <th scope="col" class="text-light">Name</th>
              <th scope="col" class="text-light">Email</th>
              <th scope="col" class="text-light">Phone</th>
              <th scope="col" class="text-light">Message</th>
              <th scope="col" class="text-light">Remove</th>
            </tr>
          </thead>
          <tbody>
    <?php
        $sql= "SELECT * FROM `contact`";
        $result = mysqli_query($conn,$sql);
        $datas = Array();
        if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
        $id   =  $row['id'];
        $name = $row['name']."<br>";
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['mess'];
   
    ?>
            <tr>
              <td class="text-light"><?php echo $row['id'];?></td>
              <td class="text-light"><?php echo $row['name'];?></td>
              <td class="text-light"><?php echo $row['email'];?></td>
              <td class="text-light"><?php echo $row['phone'];?></td>
              <td class="text-light"><?php echo $row['mess'];?></td>
              <form action="remove.php" method="post"> 
              <td class="text-light"><button class="btn btn-primary" type="submit" name="delete" class="remove"><?php echo 'Remove';?></button></td>
              <td class="text-light"><input type="hidden" name="un_id" value="<?php echo $row['id']; ?>"></td>
            </tr>
      </div>
    </form>
    
    <?php }}   ?>
    </tbody>
        </table>
        <!------table contact end ----->
  </section>
 
  
</section>





<section class="text-light w-100 m-5" id="admin-users">
  <h2 id="contact" class="">Admin users</h2>
      <div class="table-responsive" >
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th class="text-light" scope="col">#</th>
              <th class="text-light" scope="col">full name</th>
              <th class="text-light" scope="col">user name</th>

            </tr>
          </thead>
          <tbody>
    <?php
        $sql= "SELECT * FROM `users`";
        $result = mysqli_query($conn,$sql);
        $datas = Array();
        if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
        $id   =  $row['id'];
        $admin_name = $row['admin_admin_name']."<br>";
        $user_name = $row['user_name'];
        $password = $row['password'];
   
    ?>
            <tr>
              <td class="text-light"><?php echo $row['id'];?></td>
              <td class="text-light"><?php echo $row['admin_name'];?></td>
              <td class="text-light"><?php echo $row['user_name'];?></td>
              <form action="remove.php" method="post"> 
              <td class="text-light"><button class="btn btn-primary" type="submit" name="delete" class="remove">Remove</button></td>
              <td class="text-light"><input type="hidden" name="admin_id" value="<?php echo $row['id']; ?>"></td>
            </tr>
      </div>
    </form>
    
    <?php }}   ?>
    </tbody>
        </table>
        <!------table contact end ----->
  </section>




  <section class="text-light w-100 d-flex justify-content-start align-items-start m-5 ">
<!------insert start----->
<div class="container-fluid" id="insert-admin">
      <h2 class=" ">Insert admin users</h2>

      <div class="col-lg  ">

        <form action="insert-admin.php" class="d-block mt-3" method="post" enctype="multipart/form-data">


          <div class="col-lg m-2">
          <input type="text" class="w-50" name="admin_name" placeholder="Enter your name">
          </div>

          <div class="col-lg m-2">
          <input type="text" class="w-50" name="uname" placeholder="Enter your user name">
          </div>

          <div class="col-lg m-2">
          <input type="password" class="w-50" name="password" placeholder="Enter your password">
          </div>

          <div class="col-lg m-2">
          <input type="password" class="w-50" name="re_password" placeholder="Enter your password again">
          </div>

          <div class="col-lg m-2">
          <input type="submit" class="btn btn-primary w-25 " name="sbmt" value="submit">
          </div>

        </form>
      </div>

      </div>

<!------insert end----->
</section>








    </main>
  </div>
</div>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2023 company name</p>


   <!---- logo possible
    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>
    -->

    <ul class="nav col-md-4 justify-content-end">
      
    </ul>
  </footer>
</div>

  <a href="index.php#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>


  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/main.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
      once: false
  });
</script>
<script src="https://kit.fontawesome.com/6d6e978759.js" crossorigin="anonymous"></script>

  </body>
            </html>
