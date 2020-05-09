<?php if (count($errors) > 0): ?>

    <div class="error">
        <?php foreach($errors as $error):
        if($error == "Wrong email/password combination" || $error == "Parolile nu se potrivesc" || $error == "email already exists"): ?>
            <p><?php echo $error; ?></p>
            <?php endif ;
            endforeach; ?>
    </div>
    <style>
        .error p{
            font-size: 16px;
            color: red;
            background-color: #FFF0F5;
            display: inline-block;
        }
    </style>
<?php endif ?>

