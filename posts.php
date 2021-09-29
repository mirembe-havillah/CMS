<?php


class Post extends ADM{

     


public function registerposts($posttitle,$content){
        
        $result = mysqli_query($this->connection,"INSERT INTO aigposts(posttitle,content)VALUES('$posttitle','$content')");
         return $result;
        
    }

     public function selectposts()
     {
         $result = mysqli_query($this->connection,"SELECT * FROM aigposts");
         return $result;
     }
 //     public function displayposts()
 //     {
       
 //       $hkl=$this->selectposts();
      
    
 // }
public function registercomments($comments){
        
        $result = mysqli_query($this->connection,"INSERT INTO aigposts(comments)VALUES($comments)");
         return $result;
        
    }

 }
 ?>


<!-- // if ( $hkl->num_rows > 0) {
  
//   while ($a= mysqli_fetch_assoc($hkl)) {
    
//     $posttitle = stripslashes($a['posttitle']);
//     $content = stripslashes($a['content']);
   
   
//    echo "<h5> ".$posttitle."</h5>";

//    echo "<p> ".$content." </p>";
 
//   }
// }else{
//   echo "<p> No Entry has been made </p>";
// }

//      }

// <!DOCTYPE html>
// <html>
// <head>
//   <title>POSTS</title>
//  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
//    <div class="card" style="width: 18rem;">
//   <div class="card-body">
//     <h5 class="card-title">$posttitle</h5>
//     <p class="card-text">$content</p>
//   </div>
// </div>
// </head>
// <body>
//  </body>
//  </html>  -->