<?php include('View/layout/head.php'); ?>
<body>
    <?php include('View/components/header.php'); ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="<?php echo url('/members/store'); ?>">
                    <div class="form-group">
                        <input type="text" name="instrument" class="form-control" placeholder="instrument" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="image" class="form-control" placeholder="image ex: /Controllers/images/member.jpg" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Send" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include('View/layout/footer.php'); ?>
