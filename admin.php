<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login</title>
  <link rel="stylesheet" href="css/styles1.css" />
  <style>
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="login-form">
      <h2>Login to your account</h2>
      <form action="php/checklogin.php" method="POST">
        <label>
          Email
          <input type="email" id="email" placeholder="email" name="email" />
        </label>
        <br /><br />
        <label>
          Password
          <input
            type="password"
            id="password"
            placeholder="password"
            name="password"
          />
        </label>
        <br /><br />
        <div class="submit-form">
          <input type="submit" id="login" name="login" value="Login" />
        </div>
      </form>
    </div>
  </div>
</body>
</html>