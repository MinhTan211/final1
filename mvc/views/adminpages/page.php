<nav aria-label="Page navigation example">
<div class="container">
  <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Trước</a></li>
 <?php                                    
            $i =1 ;                                         
            for($i; $i <= $pages; $i++){
                if($i == $page){
                    echo "<li class='page-item active'><a class='page-link' href='#'>$page</a></li>";
                }
                else
                echo "<li class='page-item'><a class='page-link'".'href="./'.$PageName.'?page='.$i.'">'.$i.'</a></li>';
                
            }
        ?>
    <li class="page-item"><a class="page-link" href="#">Sau</a></li>
  </ul>
</div>
</nav>
