<?php require_once 'app/views/components/auth/header.php'; ?>
<?php require_once 'app/views/components/auth/sidebar.php'; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-2">
    <h1>Profile</h1>
    <div class="text-center">
        <img src="/assets/img/logo.png" style="max-width: 100px;" class="img-fluid mx-auto" alt="Profile Picture"><br/>
        <span class="h5">
            Email: <?= $_SESSION['email'] ?>
        </span>
    </div>
    <div class="card m-2 my-3 shadow">
        <div class="card-header h4">
            Change Password
        </div>
        <div class="card-body">
            <?php
                if(isset($error)) {
                     echo '<div class="alert alert-danger">'.$error.'</div>';
                } else if(isset($message)) {
                    echo '<div class="alert alert-success">'.$message.'</div>';
               }
            ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="newPasswordInput">New Password</label>
                    <input type="password" name="newpassword" class="form-control" id="newPasswordInput" aria-describedby="newPassword">
                    <small id="newPassword" class="form-text text-muted">We recommend atleast 8 charcters including captial alphabets and symbols.</small>
                </div>
                <div class="form-group">
                    <label for="confirmPasswordInput">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="confirmPasswordInput" aria-describedby="confirmPassword">
                </div>
                <button class="btn btn-primary my-2" type="submit">Change Password</button>
            </form>
        </div>
    </div>
</main>

<script src="/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>