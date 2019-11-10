 <?php 
    $pageTitle = "Articles" ;
    include 'inc/header.php';

    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    
<div class="container">
<div class="row">
    <?php
    foreach($post as $post) : ?>
    <article class="col-sm-6">
    <div class="form-control form-control-lg">
        <div class="caption">
        <h2><a href="post.php?id=<?= $post['id']; ?>"><?php echo$post['title'] ?></a></h2>
            <div><?= $post['details']; ?></div> <br>
            <a href="post.php?id=<?= $post['id']; ?>" class="btn btn-light  btn-lg">Read More</a>
            <br>
        </div>
        </div>
        
        </article>
    <?php endforeach; ?>
    </div>
    <br>
    <br>
    
</div>