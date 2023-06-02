<?php 
    include 'header.php';
    if(isset($_POST['add'])) {
            $image = $_FILES['image'];
            $image_name = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $path = explode('.', $image_name);
            $ex = end($path);
            $new_img_name = 'm'.time().'_'.rand().'.'.$ex;
            $aloowed = ['png', 'jpg', 'jpeg', 'gif', 'ico', 'heic'];
            if(in_array($ex, $aloowed)) {
                move_uploaded_file($image_tmp, '../assets/images/' .$new_img_name);
            }   
        $name=$_POST['name'];
        $price = $_POST['price'];
        $sdes = $_POST['short'];
        $ldes = $_POST['full'];
        $sql = "INSERT INTO books (title,img,price,shortDescription,longDescription) VALUES ('$name','$new_img_name','$price','$sdes','$ldes')";

        if(mysqli_query($conn, $sql)){
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
                <div class="add-book">
                    <div class="head">
                        <h2>Add New Book</h2>
                        <a href="book.php">All Book</a>
                    </div>
                    <div class="line"></div>
                    <form  method="post"   enctype="multipart/form-data">
                        <label for="name">Title</label>
                        <input type="text" name="name" id="name" placeholder="Title" required>
                        <label for="image">Image</label>
                        <input class="form-control" type="file" name="image" id="image" multiple>
                        <label for="price">Price</label>
                        <input type="text" name="price" id="price" placeholder="Price" required>
                        <label for="sdes">Short Description</label>
                        <textarea name="short" id="sdes" rows="2" placeholder="Short Description"></textarea>
                        <label for="fdes">Full Description</label>
                        <textarea name="full" id="fdes" rows="4" placeholder="Full Description"></textarea>
                        <label for="author">Author</label>
                        <select name="author" id="author" aria-placeholder="omar">
                            <option disabled selected>-- Select --</option>
                            <option value="moath">Moath</option>
                            <option value="basheer">Basheer</option>
                        </select>
                        <label for="author">Category</label>
                        <select name="author" id="author">
                            <option disabled selected>-- Select --</option>
                            <option value="action">Action</option>
                            <option value="drama">Drama</option>
                            <option value="romantic">Romantic</option>
                        </select>
                        <button name="add">Add</button>
                    </form>
                </div>
            </div>
        </main>
        <?php include 'footer.php'; ?>
