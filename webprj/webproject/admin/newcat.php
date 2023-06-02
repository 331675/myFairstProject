<?php 
    include 'header.php';

    if(isset($_POST['add'])) {
        $name = $_POST['name'];
        $sql = "INSERT INTO categories (name) VALUES ('$name')";
        if(mysqli_query($conn, $sql)){
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
        <div class="add-category">
            <div class="head">
                <h2>Add New Categories</h2>
                <a href="categories.php">All Categories</a>
            </div>
            <div class="line"></div>
            <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" required>
                <button name="add">Add</button>
            </form>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>