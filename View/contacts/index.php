<?php include('View/layout/head.php'); ?>
<body>
    <?php include('View/components/header.php'); ?>

    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-12 text-right">
                <a href="<?php echo url('/contacts/create'); ?>" class="btn btn-success">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Telefon</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact) : ?>
                        <tr>
                            <td class="text-center"><?php echo $contact['name']; ?></td>
                            <td class="text-center"><?php echo $contact['telefon']; ?></td>
                            <td class="text-center"><?php echo $contact['email']; ?></td>
                            <td class="text-center">
                                <a class="btn btn-primary mr-3" href="<?php echo url('/contacts/edit?id=' . $contact['id']); ?>">Edit</a>
                                <a class="btn btn-primary btn-delete" data-id="<?php echo $contact['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="delete-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Contact delete</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you want to delete this contact?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="">Yes</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            var url = '<?php echo url('/contacts/delete?id='); ?>';
            // open delete modal
            $(document).on('click', '.btn-delete', function() {
                var modal_obj = $('#delete-modal');
                var id = $(this).attr('data-id');
                $('#delete-modal a').attr('href', url + id);
                modal_obj.modal('show');
            });
        });
    </script>
</body>
<?php include('View/layout/footer.php'); ?>
