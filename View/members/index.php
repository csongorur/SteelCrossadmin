<?php include('View/layout/head.php'); ?>
<body>
    <?php include('View/components/header.php'); ?>
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-12 text-right">
                <a class="btn btn-success" href="<?php echo url('/members/create'); ?>">Create</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Instrument</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($members as $member) : ?>
                        <tr>
                            <td><?php echo $member['instrument']; ?></td>
                            <td><?php echo $member['name']; ?></td>
                            <td><img width="100px" src="<?php echo assetByUrl($member['image']); ?>" /></td>
                            <td>
                                <a href="<?php echo url('/members/edit?id=' . $member['id']); ?>" class="btn btn-primary mr-3">Edit</a>
                                <button type="button" class="btn btn-primary btn-delete" data-id="<?php echo $member['id']; ?>">Delete</button>
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
                    <p>Do you want to delete this member?</p>
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
            var url = '<?php echo url('/members/delete?id='); ?>';
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