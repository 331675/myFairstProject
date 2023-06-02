<?php 

    include 'header.php';
    if(isset($_GET['del'])) {
        $id = $_GET['del'];
        $sql = "DELETE FROM books WHERE id = '$id'";

        if(mysqli_query($conn, $sql)) {
            header("Location: book.php");
        }
    }
?>
<main>
    <div class="dboard-body">
        <div class="dboard-list">
            <ul>
                <li><a href="index.php" class="">Dashboard</a></li>
                <li><a href="categories.php" class="">Categories</a></li>
                <li><a href="#" class="">Authors</a></li>
                <li><a href="book.php" class="active">Books</a></li>
                <li><a href="#" class="">Users</a></li>
            </ul>
        </div>
        <div class="books">
            <div class="head">
                <h2>Books</h2>
                <a href="newbook.php">Add New Books</a>
            </div>
            <div class="line"></div>
            <table>
                <thead>
                    <tr>
                        <td>Serial</td>
                        <td>Title</td>
                        <td>Image</td>
                        <td>Price</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM books";
                        $result = mysqli_query($conn, $sql); 
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><img src="../assets/images/<?php echo $row['img'] ?>" alt="book image"></td>
                        <td><?php echo $row['price'] ?>$</td>
                        <td>
                            <a href="editbook.php?edit=<?php echo $row['id'] ?>"><span><i class="fa-solid fa-pen-to-square" style="color: #005eff;"></i></span></a>
                            <a onclick="return confirm('Are You Sure ?!')" href="book.php?del=<?php echo $row['id'] ?>><span><i class="fa-solid fa-trash" style="color: #ff0000;"></i></span></a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include 'footer.php';?>