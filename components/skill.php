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
                    include './config.php';
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
                                <a class='btn btn-danger' href='delete.php? id=$row[id] '> Delete </a>
                            </td>
                        </tr>
                        ";
                    }
                    ?>

                </tbody>
            </table>
