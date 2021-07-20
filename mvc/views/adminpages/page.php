<!--Pagination-->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php                                    
            $i =1 ;                                         
            for($i; $i <= $pages; $i++){
                if($i == $page)
                     echo '<span>'.$page.'</span>';
                else
                    echo '<a href="./'.$PageName.'?page='.$i.'">'.$i.'</a>';
            }
        ?>
    </ul>
</nav>