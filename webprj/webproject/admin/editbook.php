
<?php 
include 'header.php'; 

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM books WHERE id = '$id'"; 
    $result = mysqli_query($conn, $sql);
    
    $book = mysqli_fetch_assoc($result);
}

    if(isset($_POST['update'])) {
            $image = $_FILES['image'];
            $image_name = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $path = explode('.', $image_name);
            $ex = end($path);
            $new_img_name = 'm'.time().'_'.rand().'.'.$ex;
            $aloowed = ['png', 'jpg', 'jpeg', 'gif', 'ico', 'heic', 'webp'];
        if(in_array($ex, $aloowed)) {
            move_uploaded_file($image_tmp, '../assets/images/' .$new_img_name);
        }   
        $name=$_POST['name'];
        $price = $_POST['price'];
        $sdes = $_POST['short'];
        $ldes = $_POST['Full'];
        $id = $_GET['edit'];
        $sql = "UPDATE books SET title='$name', img='$new_img_name', price=$price, shortDescription='$sdes', longDescription='$ldes' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
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
                        <li><a href="categories.php" class="active">Books</a></li>
                        <li><a href="#" class="">Users</a></li>
                    </ul>
                </div>
                <div class="edit-book">
                    <div class="head">
                        <h2>Update Book</h2>
                        <a href="#">All Book</a>
                    </div>
                    <div class="line"></div>
                    <form  method="post"  enctype="multipart/form-data">
                        <label for="name">Title</label>
                        <input type="text" name="name" id="name" placeholder="Title" value="<?php echo $book['title'] ?>" required>
                        <label for="image">Image</label>
                        <input class="form-control" type="file" name="image" id="image" multiple>
                        <img src="../user/images/book1.jpg" alt="">
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" placeholder="Price" value="<?php echo $book['price'] ?>" required>
                        <label for="sdes">Short Description</label>
                        <textarea name="Short" id="sdes" rows="2" placeholder="Short Description"><?php echo $book['shortDescription'] ?></textarea>
                        <label for="fdes">Full Description</label>
                        <textarea name="Full" id="fdes" rows="4" placeholder="Full Description"><?php echo $book['longDescription'] ?></textarea>
                        <label for="author">Author</label>
                        <select name="author" id="author" aria-placeholder="omar">
                            <option disabled selected>-- Select --</option>
                            <option value="action">Action</option>
                            <option value="drama">Drama</option>
                            <option value="romantic">Romantic</option>
                        </select>
                        <label for="author">Category</label>
                        <select name="author" id="author">
                            <option disabled selected>-- Select --</option>
                            <option value="action">Action</option>
                            <option value="drama">Drama</option>
                            <option value="romantic">Romantic</option>
                        </select>
                        <button name="update">Update</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'footer.php'; ?>
