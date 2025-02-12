<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | British Islamic Nursery</title>
  <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center">
          <img src="/assets/img/logo.png" class="w-25" alt="BIN Login">
        </div>
        <div class="card-body">
        <?= isset($error) ? '<div class="alert alert-danger" role="alert">
          '.$error.'
        </div>' : "" ?>
          <form action="/admin/login" method="POST">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
