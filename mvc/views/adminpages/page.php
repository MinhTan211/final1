<nav aria-label="Page navigation example">
<div class="container" style="margin-left: 500px;">
  <ul class="pagination">
    <?php
      if($page<=1)
        echo "<li class='page-item'><span class='page-link'>Trước</span></li>";
      else
      echo "<li class='page-item'><a class='page-link '".'href="./'.$PageName.'?page='.($page-1).'">Trước</a></li>';
    ?>
 <?php                                    
            $i =1 ;                                         
            for($i; $i <= $pages; $i++){
                if($i == $page)
                    echo "<li class='page-item active'><span class='page-link '>".$page."</span></li>";
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
