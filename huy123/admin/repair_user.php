<?php
include 'header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $danhmuc = mysqli_query($conn,"SELECT * FROM danhmuc WHERE id_danhmuc = '$id' ");
    $ten_danhmuc = mysqli_fetch_assoc($danhmuc);
}

if(isset($_POST['submit'])){
    $ten_danhmuc = $_POST['ten_danhmuc'];
    $query = mysqli_query($conn,"UPDATE danhmuc SET ten_danhmuc = '$ten_danhmuc' WHERE id_danhmuc = '$id'");
    if($query) {
        header("location: category.php");
    }
}
?>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Trang chính</a>
  </li>  <li class="nav-item">
    <a class="nav-link active" href="category.php"><i class="fas fa-align-justify"></i> Danh mục</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="product.php"><i class="fas fa-tshirt"></i> Sản phẩm</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="carousel.php"><i class="fas fa-images"></i> Ảnh carousel</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="users.php"><i class="fas fa-address-card"></i> Khách hàng</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="donhang.php"><i class="fas fa-truck"></i> Đơn hàng</a>
  </li>
</ul>
<br>
<table class="table table-striped">
    <thead>
        <tr >
            <th>STT</th>
            <th>Tên khách hàng</th>
            <th>email</th>
            <th>Số đt</th>
            <th>Password</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
    </thead>

</table>
<?php
include 'footer.php';
?>
