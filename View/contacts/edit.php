<?php include('View/layout/head.php'); ?>
<body>
    <?php include('View/components/header.php'); ?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="<?php echo url('/contacts/update?id=' . $contact['id']); ?>">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="<?php echo $contact['name']; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefon" class="form-control" value="<?php echo $contact['telefon']; ?>" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="<?php echo $contact['email']; ?>" />
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