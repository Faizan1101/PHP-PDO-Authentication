<?php 
require ("includes/header.php");
require ("includes/nav.php");
if(isset($_SESSION['name']))
{
    header('Location: index.php');
}
?>


<div class="container">
<h3 class="text-center my-4">Login form</h3>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="login-logic.php" method="post">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div>
                <input type="submit" name="login" value="Login" class="btn btn-primary px-3">
                <p class="mt-2">Don't have an Account? <a href="register.php" class="text-decoration-none">Register</a></p>
            </div>
            </form>
        </div>
    </div>
</div>



<?php
require ("includes/footer.php");
?>