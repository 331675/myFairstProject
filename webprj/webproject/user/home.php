<?php 
    include 'header.php'; 
?>
    <main>
        <section class="hero">
            <div class="cover">
                <div class="container">
                    <h2>Search about any Book you need</h2>
                    <form action="#" method="post">
                        <div class="search">
                            <input type="search">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </form>
                    <div class="boxes">
                        <div class="box">
                            <span><i class="fa-solid fa-book"></i></span>
                            <h3>3</h3>
                            <p>Book</p>                            
                        </div>
                        <div class="box">
                            <span><i class="fa-solid fa-user-group"></i></span>
                            <h3>2</h3>
                            <p>Authors</p>
                        </div>
                        <div class="box">
                            <span><i class="fa-solid fa-tags"></i></span>
                            <h3>3</h3>
                            <p>Categories</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <h2>AboutOur Library</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos iure reiciendis laudantium eveniet tenetur 
                commodi excepturi illo provident. Nulla optio labore error praesentium, debitis provident vero eos hic soluta </p>
        </section>
        <section class="expolor">
            <h2>Expolor our latest Categories</h2>
            <div class="boxes">
                <div class="box">
                    <span>Action</span>
                </div>
                <div class="box">
                    <span>Drama</span>
                </div>
                <div class="box">
                    <span>Romantic</span>
                </div>
            </div>
        </section>
        <section class="latest-book">
            <h2>Expolor our latest books</h2>
            <div class="container">
                <div class="boxes">
                <?php
                    $sql = "SELECT * FROM books";
                    $result = mysqli_query($conn, $sql); 
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="box">
                        <img src="../assets/images/<?php echo $row['img'] ?>" alt="book1">
                        <h5><?php echo $row['title'] ?></h5>
                        <p><?php echo $row['shortDescription'] ?></p>
                        <div class="a">
                        <a href="details.php">Read More</a>
                    </div>
                </div>
                <?php } ?>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php' ?>