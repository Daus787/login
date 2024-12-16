<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Form</title>
    <!-- <link rel="stylesheet" href="login.css"> -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

* {
  box-sizing: border-box;
}

html,
body .wrapper {
  height: 100%;
}

body {
  display: grid;
  place-items: center;
  margin: 0;
  padding: 0 24px;
  background-color: aqua;
  font-family: "roboto", sans-serif;
  color: #000;
  animation: rotate 6s infinite alternate linear;
}

.login-card {
  position: relative;
  z-index: 3;
  width: 100%;
  margin: 0 20px;
  padding: 70px 30px 44px;
  bottom: -100px;
  border-radius: 1.25rem;
  background: #fff;
  text-align: center;
}

.login-card > h2 {
  font-size: 36px;
  font-weight: 600;
  margin: 0 0 12px;
}

.login-card > h3 {
  color: rgba(0, 0, 0, 0.38);
  margin: 0 0 30px;
  font-weight: 500;
  font-size: 1rem;
}

.login-form {
  width: 100%;
  margin: 0;
  display: grid;
  gap: 16px;
}

.login-form > input,
.login-form > button {
  width: 100%;
  height: 50px;
}

.login-form > input {
  border: 2px solid #ebebeb;
  font-family: inherit;
  font-size: 15px;
  padding: 0 16px;
  border-radius: 1.25rem;
  transition: all 0.375s;
}

.login-form > input:hover {
  border: 2px solid #10449a;
}

.login-form button {
  cursor: pointer;
  width: 100%;
  padding: 0 16px;
  border-radius: 1.25rem;
  background: #216ce7;
  color: #f9f9f9;
  border: 0;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 600;
  text-align: center;
  letter-spacing: 2px;
  transition: all 0.375s;
}

.login-form > button:hover {
  background: #10449a;
}

.login-form > a {
  color: #216ce7;
  font-size: 0.9rem;
  text-align: left;
  text-decoration: none;
  margin-bottom: 6px;
  transition: all 0.375s;
}

.login-form > a:hover {
  color: #10449a;
}
.error-message {
  color: red;
  font-size: 12px;
  display: none;
}

@keyframes rotate {
  100% {
    background-position: 15% 50%;
  }
}

@media (width >= 500px) {
  body {
    padding: 0;
  }
  .login-card {
    margin: 0;
    width: 400px;
  }
}

    </style>
  </head>
  <body>
    <div class="login-card">
      <h2>Login</h2>
      <h3>Silahkan masuk ke akun Anda</h3>

      <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <a href="#">Lupa Password?</a>
        <button type="submit">LOGIN</button>
      </form>
    </div>
  </body>
</html>
