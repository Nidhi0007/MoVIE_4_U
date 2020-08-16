<?php
include "db/db.php";
include "inc/head.php";
include "inc/nav.php";
?>

<div class="row">
            <form action="" method ="post">
                        <div class=" col dropdown">
                        <h2> FILTER BY LANGUAGE</h2>
                        <select class="form-control" name="filterLanguage" >
                        <?php
                        $sql ="SELECT language, count(*) FROM movietb GROUP BY language HAVING count(*)";
                        $run = mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($run)){
                        
                            echo "<option value=" .$row['language'].">" .$row['language']."</option>";
                        }
                        ?>
                        </select>
                        </div>
            <button name="language" class="btn btn-outline-success my-2 my-sm-o" type="submit"> Search</button>
            </form>
            <form action="" method ="post">
                    <div class=" col dropdown">
                    <h2> FILTER BY GENRE</h2>
                    <select class="form-control" name="filterGenre" >
                    <?php
                    $sql ="SELECT genre, count(*) FROM movietb GROUP BY genre HAVING count(*)";
                    $run = mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($run)){
                    
                        echo "<option value=" .$row['genre'].">" .$row['genre']."</option>";
                    }
                    ?>
                    </select>
                    </div>
            <button name="genre" class="btn btn-outline-success my-2 my-sm-o" type="submit"> Search</button>
            </form>
            <form action="" method ="post">
            <div class=" col ">
                    <h2> SORT BY </h2>
                 <button name="fresh" class="btn btn-success" >Freshness</button>
                 
                 <button name="dura" class="btn btn-success" >Duration</button>
          
            </div>

        </div>
<?php
if(isSet($_POST['language'])){
    $lang=$_POST['filterLanguage'];
    $sql="SELECT * FROM movietb where language='$lang'";
    $run =mysqli_query($con,$sql);
    echo "<h3>filtered by language:" .$row['language']."</h2>";
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
  elseif(isSet($_POST['genre'])){
    $gen=$_POST['filterGenre'];
    $sql="SELECT * FROM movietb where genre='$gen'";
    $run =mysqli_query($con,$sql);
    echo "<h3>filtered by genre:" .$row['genre']."</h2>";
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
  elseif(isSet($_POST['fresh'])){
   
    $sql="SELECT * FROM movietb ORDER BY id DESC";
    $run =mysqli_query($con,$sql);
    echo "<h3>Sort by freshness:</h2>";
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
  elseif(isSet($_POST['dura'])){
    $sql="SELECT * FROM movietb ORDER BY duration +0";
    $run =mysqli_query($con,$sql);
    echo "<h3>Sort by Duration:</h2>";
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

?>



<?php
include "inc/bottom.php";

?>
<?php
?>