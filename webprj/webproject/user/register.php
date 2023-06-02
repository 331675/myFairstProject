<?php include 'header.php' ?>
    <main>
        <div class="container">
            <div class="register-container">
                <h2>Create new account</h2>
                <form id="register-form" onsubmit="register(event)" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Emai </label>
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>
                
                <div class="form-group">
                <label for="url">URL</label>
                <input type="text" id="url" name="url" required placeholder=" https//exmaple.com">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" required placeholder="18">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" required placeholder="Country">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm Password">
                </div>
                <button required>Register</button>
                </form>
            </div>
        </div>
    </main>
<?php include 'footer.php' ?>