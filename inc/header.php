<head>
<?php $title="School Of Programming" ;?>
<title><?php echo $title;?> | <?php echo $pageTitle;?></title> 
<?php 
require 'inc/connection.php';
require 'inc/functions.php';
$posts = new Post;
$vedios = new Vedio;
$courses = new  Courses ;
$post = $posts->fetch_all();
$vedio = $vedios->fetchVedios();
$course = $courses->fetchCourses();

?>    
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>مدرسة البرمجة</title>
 <!-- Bootstrap -->
<link  href="style/style.css" rel="stylesheet">

    <!-- Fonts -->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   



    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <nav class="navbar navbar-light bg-light ">
          
            <a class="navbar-brand " href="#">
              <img src="img/9.png" width="30" height="30" class="d-inline-block align-top" alt="">
              مدرسة البرمجة
            </a>
          </nav>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if ($pageTitle == "home"){echo "active";}?>">
              <a class="nav-link" href="contact.php">تواصل معنا   <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($pageTitle == "course"){echo "active";}?>" href="course.php">الكورسات</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link <?php if ($pageTitle == "Articles"){echo "active";}?>" href="Articles.php">المقالات</a>
            </li>


            <li class="nav-item">
                <a class="nav-link <?php if ($pageTitle == "contact"){echo "active";}?>" href="index.php">الرئيسية  </a>
              </li>

          </ul>
          
        </div>
      </nav>

	
	</head>

        

