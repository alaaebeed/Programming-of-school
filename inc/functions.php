<?php 
require 'connection.php';

class Post {
    
  public function fetch_all(){
       global $pdo ;
       $query = $pdo->prepare("SELECT id ,title,details, LEFT(details,200) AS details  FROM post");
       $query->execute();
       return $query->fetchAll();
       }
    
    public function fetch_data($id){
        global $pdo ;
        $query = $pdo->prepare("SELECT * from post WHERE  id=?");
        $query->bindValue(1,$id);
        $query->execute();
        return $query->fetch();
        }
        
  } 

  class Vedio {
    public function fetchVedios(){
      global $pdo ;
      $query = $pdo->prepare("SELECT vedios FROM vedio");
      $query->execute();
      return $query->fetchAll();
      }
 }

 class Courses{
  public function fetchCourses(){
    global $pdo ;
    $query = $pdo->prepare("SELECT id,courseName, details,url,LEFT(details,200) AS details  FROM courses ");
    $query->execute();
    return $query->fetchAll();
    }

    public function fetchCoursesData($id){
      global $pdo ;
      $query = $pdo->prepare("SELECT * from courses WHERE  id=? ");
      $query->bindValue(1,$id);
      $query->execute();
      return $query->fetch();
      }


 }



?>
