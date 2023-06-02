<?php include 'header.php' ?>
    <main>
        <div class="cart">
            <div class="container">
                <h2>Your Cart</h2>
                <table>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Image</td>
                            <td>Book</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Toyal</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="../assets/images/book1.jpg" alt=""></td>
                            <td>هاري بوتر 1</td>
                            <td>125.00$</td>
                            <td>2</td>
                            <td>200$</td>
                            <td><span><i class="fa-solid fa-square-xmark" style="color: #ff0000;"></i></span></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="../assets/images/book2.webp" alt=""></td>
                            <td>هاري بوتر 2</td>
                            <td>125.00$</td>
                            <td>2</td>
                            <td>200$</td>
                            <td><span><i class="fa-solid fa-square-xmark" style="color: #ff0000;"></i></span></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="total" colspan="5">Total</td>
                            <td>202</td>
                            <td> </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>
<?php include 'footer.php' ?>