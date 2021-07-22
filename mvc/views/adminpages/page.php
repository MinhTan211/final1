<nav aria-label="Page navigation example">
<div class="container" style="margin-left: 500px;">
  <ul class="pagination">
    <?php
      $SoTrang = 5;
      if($SoTrang>$pages){
        $TrangBD = 1;
        $TrangKT = $pages;
      }
      else{
        $TrangBD = $page - floor(($SoTrang-1)/2);
        $TrangKT = $TrangBD + ($SoTrang-1);
        if($TrangBD<1){
          $TrangBD = 1;
          $TrangKT = $TrangBD + ($SoTrang-1);
        }
        else if($TrangKT>$pages){
          $TrangKT = $pages;
          $TrangBD = $TrangKT - ($SoTrang-1);
        }
      }
      if($page<=1){
        echo "<li class='page-item'><span style = 'color: #733619' class='page-link'>Đầu</span></li>";
        echo "<li class='page-item'><span style = 'color: #733619' class='page-link'>Trước</span></li>";
      }
      else
      {
        echo "<li class='page-item'><a class='page-link '".'href="./'.$PageName.'?page=1">Đầu</a></li>';
        echo "<li class='page-item'><a class='page-link '".'href="./'.$PageName.'?page='.($page-1).'">Trước</a></li>';
      }
    ?>
 <?php                                                                           
            for($TrangBD; $TrangBD <= $TrangKT; $TrangBD++){
                if($TrangBD == $page)
                    echo "<li class='page-item active'><span class='page-link '>".$page."</span></li>";
                else
                  echo "<li class='page-item'><a class='page-link'".'href="./'.$PageName.'?page='.$TrangBD.'">'.$TrangBD.'</a></li>';
            }
        ?>
    <?php
      if($page>=$pages)
      {
        echo "<li class='page-item'><span class='page-link'>Sau</span></li>";
        echo "<li class='page-item'><span class='page-link'>Cuối</span></li>";
      }
      else
      {
        echo "<li class='page-item'><a style = 'color: #733619' class='page-link'".'href="./'.$PageName.'?page='.($page+1).'">Sau</a></li>';
        echo "<li class='page-item'><a style = 'color: #733619' class='page-link'".'href="./'.$PageName.'?page='.$pages.'">Cuối</a></li>';
      }
    ?>
  </ul>
</div>
</nav>
