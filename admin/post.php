
<?php
include "db/db.php";
include "inc/head.php";
include "inc/nav.php";
?>


<div class="row mt-5">

                   
                    <div class="col-4">
                    <h4> Post a Movie</h4>
                    <form action="post.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                    <label ><h4>    Title</h4></label>
                    <input type="text" name="title" placeholder="Title" class="form-control">
                    </div>
                    <div class="form-group">
                    <label ><h4>Description</h4></label>
                    <textarea type="text" id="description" name="description" placeholder="Description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                    <label ><h4>Duration</h4></label>
                    <input type="text" id="duration" name="duration" placeholder="Duration" class="form-control">
                    </div>
                    <div class="form-group">
                    <label ><h4>Language</h4></label>
                    <select name="language" class="form-control">
                    <option value="Language">Language</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Bhojpuri">Bhojpuri</option>
                    </select>
 
                    </div>
                    <div class="form-group">
                    <label ><h4>Genre</h4></label>
                    <select name="genre" class="form-control">
                    <option value="Genre">Genre</option>
                    <option value="Action">Action</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Romance">Romance</option>
                    <option value="Crime">Crime</option>
                    <option value="Crime">Drama</option>
                    </select>
 
                    </div>
                    <div class="form-group">
                    <label ><h4>Image</h4></label>
                    <input type="file" name="img"  class="form-control" >
                    </div>
                    <div class="form-group mt-4">
               
                    <button class="form control btn-primary" type="submit" name="submit" >submit</button>
                    </div>

                    </form>
                    </div>
                    

</div>
<div class="row mt-5">

<div class="col-4">
<h4> Post an Article</h4>
                    <form action="post.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                    <label ><h4>    Title</h4></label>
                    <input type="text" name="title1" placeholder="Title" class="form-control">
                    </div>
                    <div class="form-group">
                    <label ><h4>Description</h4></label>
                    <textarea type="text" id="description" name="description1" placeholder="Description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                    <label ><h4>Image</h4></label>
                    <input type="file" name="img1"  class="form-control" >
                    </div>
                    <div class="form-group">
                    <label ><h4>Date</h4></label>
                    <input type="date" id="date" name="date" placeholder="date" class="form-control">
                    </div>
                    <div class="form-group mt-4">
               
                         <button class="form control btn-primary" type="submit" name="submit1" >submit</button>
                    </div>

               </form>
               </div>
</div>

<?php
include "inc/bottom.php";

?>
<?php

if(isset($_POST['submit'])){

    $title=$_POST['title'];
    $description=$_POST['description'];
    $duration=$_POST['duration'];
    $language=$_POST['language'];
    $genre=$_POST['genre'];
    $imgname=$_FILES['img']["name"];
    $imgtemp=$_FILES["img"]["tmp_name"];
    move_uploaded_file($imgtemp,"../image/$imgname");
    $query="INSERT INTO `movietb`(`title`, `description`, `duration`, `language`, `genre`, `image`) VALUES ('$title','$description','$duration','$language','$genre','$imgname')";
    $run=mysqli_query($con,$query);
    if ($run){
        echo "<script>alert('uploaded')</script>";
    }else{
        echo "<script>alert('not uploaded')</script>";
    }
}

elseif(isset($_POST['submit1'])){

    $title1=$_POST['title1'];
    $description1=$_POST['description1'];
    $date=$_POST['date'];

    $imgname1=$_FILES['img1']["name"];
    $imgtemp1=$_FILES["img1"]["tmp_name"];
    move_uploaded_file($imgtemp1,"../image/$imgname1");
    $query="INSERT INTO `articletb`(`title`, `description`, `date`, `image`) VALUES ('$title1','$description1','$date','$imgname1')";
    $run=mysqli_query($con,$query);
    if ($run){
        echo "<script>alert('uploaded')</script>";
    }else{
        echo "<script>alert('not uploaded')</script>";
    }
}
?>