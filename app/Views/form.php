<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just log in</title>
    <style>
        body {
            background-color: #f2f2f2;
            margin: 100px;
        }

        .container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.invalid-feedback {
    color: red;
    margin-top: 5px;
}

.btn {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary {
    background-color: gray;
    color: #fff;
}

.btn-primary:hover {
    background-color: black;
}
    </style>
</head>
<body>
    <div class="container">
        <h2 style = "font-weight: bolder">Login</h2>
        <?php echo form_open('validation/submit', ['class' => 'needs-validation', 'novalidate' => '']); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control <?php echo isset($validation) && $validation->hasError('name') ? 'is-invalid' : ''; ?>" value="<?php echo isset($old['name']) ? $old['name'] : ''; ?>">
                <div class="invalid-feedback"><?php echo isset($validation) ? $validation->getError('name') : ''; ?></div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control <?php echo isset($validation) && $validation->hasError('email') ? 'is-invalid' : ''; ?>" value="<?php echo isset($old['email']) ? $old['email'] : ''; ?>">
                <div class="invalid-feedback"><?php echo isset($validation) ? $validation->getError('email') : ''; ?></div>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control <?php echo isset($validation) && $validation->hasError('password') ? 'is-invalid' : ''; ?>" value="<?php echo isset($old['password']) ? $old['password'] : ''; ?>">
                <div class="invalid-feedback"><?php echo isset($validation) ? $validation->getError('password') : ''; ?></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
    </div>

    <!-- Bootstrap JavaScript (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
