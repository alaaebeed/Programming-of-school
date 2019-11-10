 <?php 
    $pageTitle = "course" ;
    include 'inc/header.php';

    ?>
      <br><br>
  <br><br>  <br><br>
  <br><br>
<div class="container">
<div class="row">
  <br><br>
      <?php
    foreach($course as $course) : ?>
    <article class="col-md-6">
    <div class="form-control form-control-lg">
        <div class="">
        <h2><a href="courseName.php?id=<?= $course['id']; ?>"><?php echo$course['courseName'] ?></a></h2>
            <div><?= $course['details']; ?></div> <br>
            <a href="courseName.php?id=<?= $course['id']; ?>" class="btn btn-light  btn-lg">Take Course <br> </a>
                
        </article>
             
             <?php endforeach;?>
</div>
</div>

     <br><br>
  <br><br>  <br><br>
  <br><br>
<footer class="footer">

  <div class="container text-center">
  <h4>All copyright &copy; school of proramming  </h4>
  <?php echo "20".date("y");
  ?>
  <br>

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-youtube"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
   
  </div>
</footer>



