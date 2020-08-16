
<?php
include "inc/head.php";
include "inc/nav.php";
include "inc/bottom.php";
include "db/db.php";

?>
<?php




if(isSet($_POST['searchButton'])){
    $search=$_POST['search'];
    $sql="SELECT * FROM movietb where title='$search'";
    $run =mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run)){
      echo "<div id='img_div'>";
echo "<img src='../image/".$row['image']."'>";

echo "</div>";
echo "<div id='col'>";
echo "<p>Title:".$row['title']."</p>";
echo "</div>";
echo "<div class='col'>";
echo "<p> Description:" .$row['description']."</p>";
echo "</div>";
echo "<div id='col'>";
echo "<p>Duration:".$row['duration']."</p>";
echo "</div>";

echo "<div id='col'>";
echo "<p>Language".$row['language']."</p>";
echo "</div>";
echo "<div id='col'>";
echo "<p>Genre:".$row['genre']."</p>";
echo "</div>";

  
    }
  }





else{
$sql="SELECT * FROM `movietb`";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res)){
echo "<div id='getImage'>";
echo "<img src='../image/" .$row['image']."'>";
echo "</div>";
echo "<div class='col'>";
echo "<p> Title:" .$row['title']."</p>";
echo "</div>";
echo "<div class='col'>";
echo "<p> Description:" .$row['description']."</p>";
echo "</div>";
echo "<div class='col'>";
echo "<p> Duration:" .$row['duration']."</p>";
echo "</div>";
echo "<div class='col'>";
echo "<p> Language:" .$row['language']."</p>";
echo "</div>";


}
};

$sql1= "SELECT * FROM `articletb`";
$limit=2;
$result1=mysqli_query($con,$sql1);
if(mysqli_num_rows($result1)>0){
  $total_records=mysqli_num_rows($result1);
 
  $total_page=ceil($total_records/ $limit);
  echo '<ul class="pagination admin-pagination">';
  for($i=1; $i <= $total_page; $i++){
    echo '<li><a href="user.php?page='.$i.'">'.$i.'</a></li>';
  }

  echo '</ul>';

}

  
  $page=$_GET['page'];
  $offset=($page-1)*$limit;
$sql1= "SELECT * FROM `articletb`LIMIT {$offset},{$limit}";
  while($row=mysqli_fetch_array($result1)){
    
    echo "<div id='getImage'>";
    echo "<img src='../image/" .$row['image']."'>";
    echo "</div>";
    echo "<div class='col'>";
    echo "<p> Title:" .$row['title']."</p>";
    echo "</div>";
    echo "<div class='col'>";
    echo "<p> Description:" .$row['description']."</p>";
    echo "</div>";
    echo "<div class='col'>";
    echo "<p> Date:" .$row['date']."</p>";
    echo "</div>";
 
    
  

}



?>