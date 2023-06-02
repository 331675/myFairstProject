<?php 
    include 'header.php';
    if(isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $sql = "SELECT * FROM categories WHERE id = '$id'"; 
        $result = mysqli_query($conn, $sql);
        
        $category = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['update'])) {
        $name = $_POST['title'];
        $sql = "UPDATE categories SET name='$name' WHERE id = $id"; 
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
        <div class="edit-category">
            <div class="head">
                <h2>Edit Categories</h2>
                <a href="categories.php">All Categories</a>
            </div>
            <div class="line"></div>
            <form action="#" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="title"value="<?php echo $category['name'] ?>" required>
                <button name="update">edit</button>
            </form>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
