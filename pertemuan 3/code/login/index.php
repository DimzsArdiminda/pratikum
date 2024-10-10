<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="container mt-5">
    <form action="login-berhasil.php" method="post">
        <div class="mb-3">
            <h1>P, Login</h1>
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" class="sandi">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="sandi">
        </div>
        <button type="submit" class="btn btn-primary" name="masukan">Submit</button>
        <button type="reset" class="btn btn-primary" name="reset">Reset</button>
    </form>
    </div>
</body>
</html>