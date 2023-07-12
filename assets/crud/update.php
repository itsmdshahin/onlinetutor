<?php
include '../../components/config.php';
$id = $_GET['id'];

//UPDATE `product` SET `id`='[value-1]',`name`='[value-2]',`prize`='[value-3]',`image`='[value-4]' WHERE 1
$dataFecthQuery = "SELECT * FROM `product` WHERE id='$id' ";
$result = mysqli_query($conn, $dataFecthQuery);
$row = mysqli_fetch_array($result);
?>
<form action="updateAction.php" method="post" enctype='multipart/form-data'>
    <div class="md-3 lg-6 sm-12">
        <h4>Update Product</h4>
    </div>
    <div class="md-3 lg-6 sm-12">
        <label>Product Name: </label>
        <input type="text" name="u_name" value="<?php echo $row['name'] ?>">
        <br>
    </div>
    <div class="md-3 lg-6 sm-12">
        <label>Product Prize: </label>
        <input type="text" name="u_prize" value="<?php echo $row['prize'] ?>">
        <br>
    </div>
    <div class="md-3 lg-6 sm-12">
        <label>Product Image: </label>
        <input type="file" id="u_image" name="u_image" value="<?php echo $row['image'] ?>">
        <br>
    </div>
    <div class="md-3 lg-6 sm-12">
        <label> Image: </label>
        <img id="preview_image" width="100px" src="<?php echo $row['image'] ?>" alt="Photo">
        <br>
    </div>
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    <br>
    <span id="gettheerrorr"></span>
    <button type="Login" value="Login" class="btn btn-primary">UPDATE</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#u_image').change(function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>