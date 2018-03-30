<?php include('View/layout/head.php'); ?>
<body>
    <?php include('View/components/header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="<?php echo url('/about/update'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $about[0]['id']; ?>" />
                    <div class="form-group">
                        <input class="form-control" name="title" placeholder="title" value="<?php echo $about[0]['title']; ?>" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="text" placeholder="text" rows="20"><?php echo $about[0]['text']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Send" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include('View/layout/footer.php'); ?>