<!--Pagination-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ví dụ Bootstrap --- dammio.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav aria-label="Page navigation example">
<div class="container">
  <ul class="pagination">
    <?php
      if($page<=1)
        echo "<li class='page-item'><span class='page-link'>Trước</span></li>";
      else
      echo "<li class='page-item'><a class='page-link'".'href="./'.$PageName.'?page='.($page-1).'">Trước</a></li>';
    ?>
 <?php                                    
            $i =1 ;                                         
            for($i; $i <= $pages; $i++){
                if($i == $page)
                    echo "<li class='page-item'><span class='page-link'>".$page."</span></li>";
                else
                  echo "<li class='page-item'><a class='page-link'".'href="./'.$PageName.'?page='.$i.'">'.$i.'</a></li>';
            }
        ?>
    <?php
      if($page>=$pages)
        echo "<li class='page-item'><span class='page-link'>Sau</span></li>";
      else
        echo "<li class='page-item'><a class='page-link'".'href="./'.$PageName.'?page='.($page+1).'">Sau</a></li>';
    ?>
  </ul>
</div>
</nav>
</body>
</html>
