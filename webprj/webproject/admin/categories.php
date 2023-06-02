<?php 
    include 'header.php';
    if(isset($_GET['del'])) {
        $id = $_GET['del'];
        $sql = "DELETE FROM categories WHERE id = '$id'";

        if(mysqli_query($conn, $sql)) {
            header("Location: categories.php");
        }
    }
?>
    <main>
        <div class="dboard-body">
            <div class="dboard-list">
                <ul>
                    <li><a href="index.php" class="">Dashboard</a></li>
                    <li><a href="categories.php" class="active">Categories</a></li>
                    <li><a href="#" class="">Authors</a></li>
                    <li><a href="book.php" class="">Books</a></li>
                    <li><a href="#" class="">Users</a></li>
                </ul>
            </div>
            <div class="categories">
                <div class="head">
                    <h2>All Categories</h2>
                    <a href="categories.php">Add New Category</a>
                </div>
                <div class="line"></div>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM categories";
                            $result = mysqli_query($conn, $sql); 
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td>
                                    <a href="editcat.php?edit=<?php echo $row['id'] ?>"><span><i class="fa-solid fa-pen-to-square" style="color: #005eff;"></i></span></a>
                                    <a onclick="return confirm('Are You Sure ?!')" href="categories.php?del=<?php echo $row['id'] ?>"><span><i class="fa-solid fa-trash" style="color: #ff0000;"></i></span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include 'footer.php'; ?>