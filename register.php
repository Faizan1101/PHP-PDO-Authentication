<?php 
// 
require ("includes/header.php");
require ("includes/nav.php");
if(isset($_SESSION['name']))
{
    header('Location: index.php');
}
?>


<div class="container">
<h3 class="text-center my-4">Registeration form</h3>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="register-logic.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name" required>
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="phone" placeholder="0123456789" required>
                <label for="floatingInput">Phone</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div>
                <input type="submit" name="register" value="Register" class="btn btn-primary px-3">
                <p class="mt-2">Already have an Account? <a href="login.php" class="text-decoration-none">Login</a></p>
            </div>
            </form>
        </div>
    </div>
</div>


<?php
require ("includes/footer.php");
?>