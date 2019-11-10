<?php 
include 'inc/header.php';
$pageTitle = "CourseName";
    
?>
<br><br><br><br>
<?php 
if(isset($_GET['id'])){
     $id=$_GET['id'];
    }else{
    header('location : index.php');
    exit();
}
$data = $courses->fetchCoursesData($id);
?>
<br><br>
<div class="container">
<div class="row">
    <section class="article">
        <ul class="list-group">
        <li class="list-group-item">
            <blockquote>
                <h3><?php echo $data['courseName']; ?></h3>
                <div><?php echo $data['details'];?> </div>
                <br>
                <p>
                <span class="glyphicon glyphicon-arrow-left"></span>
                    <a href="course.php">Back To courses</a>
                    <button type="button" class="btn btn-light  btn-lg" data-toggle="modal" data-target="#myModalII">Start Now</button>

                </p>
            </blockquote>
            </li>
        </ul>
       </div>
  </div>
  </section>
    </div>
</div>

 <div class="container">
 
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModalII" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content modalSize" >
        <div class="modal-header">
        <br>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $data['courseName']; ?></h4>
        </div>
        <div class="modal-body">
        <iframe width="965" height="495" 
        src="<?php echo $data['url']; ?>" 
        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
    </iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
