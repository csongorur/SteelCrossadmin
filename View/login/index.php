<?php include('View/layout/head.php'); ?>
<body>
    <?php include ('View/components/header.php'); ?>

    <div class="container">
        <div class="row">
            <form class="col-12 mt-4" method="POST" action="<?php echo url('/login'); ?>">
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="username" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="password" />
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Send" />
                </div>
            </form>
        </div>
    </div>
</body>
<?php include('View/layout/footer.php'); ?>
