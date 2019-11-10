<?php 
include 'inc/header.php';
?>

<?php 
if(isset($_GET['ID'])){
     $id=$_GET['ID'];
    }else{
    header('location : index.php');
    exit();
}

$data = $posts->fetch_vedios($id);

?>
<br><br>
<div class="container">
<div class="row">
    <section class="article">
        <ul class="list-group">
        <li class="list-group-item">
            <blockquote>
                <h3><?php echo $data['vedio']; ?></h3>
                <br>
                <p>
                <span class="glyphicon glyphicon-arrow-left"></span>
                    <a href="index.php">Back Home</a>
                </p>
            </blockquote>
            </li>
        </ul>
    
    </section>
    
    
    </div>

</div>



<?php 
?>
