<?php
  if (isset($_POST['query'])) {
    $loadsp = $this->model("ProductModel");
    $data = $loadsp->LiveSearchSP($_POST['query']);
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_array($data)) {
        echo "<a href='./shopdetail?id=";echo $row[0]."'>";
        echo $row[1]. "<br/>";
      }
    } else {
      echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          Không tìm thấy kết quả
      </div>
      ";
    }
  }
?>