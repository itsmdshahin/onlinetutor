<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Crud Operation</title>
</head>

<body>
    <div id="container">
        <h1>Insertion From</h1>
        <form action="insert.php" method="post" enctype='multipart/form-data'>
            <div class="md-3 lg-6 sm-12">
                <label>Product Name: </label>
                <input type="text" name="p_name" placeholder="Product Name" require>
                <br>
            </div>
            <div class="md-3 lg-6 sm-12">
                <label>Product Prize: </label>
                <input type="text" name="p_prize" placeholder="Product Prize" require>
                <br>
            </div>
            <div class="md-3 lg-6 sm-12">
                <label>Product Image: </label>
                <input type="file" name="p_image" require>
                <br>
            </div>
            <br>
            <span id="gettheerrorr"></span>
            <button type="Login" value="Login" class="btn btn-primary">Insert</button>
        </form>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product id</th>
                    <th>Product Name</th>
                    <th>Product Prize</th>
                    <th>Product image</th> 
                    <th>Product Update</th>
                    <th>Product Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../../components/config.php';
                $alldata =  mysqli_query($conn, "SELECT * FROM `product`");
                //<img width='100px height=auto' src='$row[image]' alt='product image'>
                while ($row = mysqli_fetch_array($alldata)) {
                    echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$$row[prize]</td>
                            <td><img width='100px height=auto' src='$row[image]' alt='product image'></td>
                            <td>
                                <a class='btn btn-warning' href='update.php? id=$row[id]'> Update </a>
                            </td>
                            <td>
                                <a class='btn btn-danger' href='delete.php? id=$row[id] '> Delete </a>
                            </td>
                        </tr>
                        ";
                }
                ?>

            </tbody>
        </table>

    </div>

    <script src="../assets/script.js"></script>

</body>

</html>