<?php 
include 'inc/header.php';
?>

<?php 
if(isset($_GET['id'])){
     $id=$_GET['id'];
    }else{
    header('location : index.php');
    exit();
}

$data = $posts->fetch_data($id);

?>
<br><br>
<br><br>
<br><br>

<div class="container">
<div class="row">
    <section class="article">
        <ul class="list-group">
        <li class="list-group-item">
            <blockquote>
                <h3><?php echo $data['title']; ?></h3>
                <div><?php echo $data['details'];?> </div>
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
