<?php include('View/layout/head.php'); ?>
<body>
    <?php include('View/components/header.php'); ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="<?php echo url('/concerts/store'); ?>">
                    <div class="form-group">
                        <input type="date" name="date" class="form-control" placeholder="date" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="place" class="form-control" placeholder="place" />
                    </div>
                    <div class="form-group">
                        <input type="time" name="time" class="form-control" placeholder="time" />
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
