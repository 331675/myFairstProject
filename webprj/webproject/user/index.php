<?php 
    include 'header.php' ;
    // var_dump($_POST);
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass = sha1( $_POST['password'] );
        $sql = "SELECT * FROM user WHERE email = '$email' and password = '$pass'";
        // echo $sql; 
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        if($user){
            $_SESSION['user_id'] = $user['id'];
            if($user['type']  == 'admin') {
                $_SESSION['is_admin'] = true;
                header("Location: ../admin/index.php");
                }else{
                header("Location: home.php");
                }
        }else{
            $error = "Invalid Credential";
        }
    }
?>
    <main>
        <div class="login-container">
            <h2>Login to your account</h2>
            <form id="loginForm" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required >
            
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required >
            
                <button name="login">Login</button>
                <?php if(isset ($error)){ ?>
                    <div class="alert alert-danger">
                        <?php echo $error ?>
                    </div>
                <?php } ?>
            </form>
        </div>
    </main>
<?php include 'footer.php' ?>
