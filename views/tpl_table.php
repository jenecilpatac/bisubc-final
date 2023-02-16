<?php if (isset($_POST['table']) && !empty($_POST['table'])): ?>
    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="<?php echo $_POST['table']['table_id'] ?>" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <?php foreach ($_POST['table']['table_headers'] as $header): ?>
                                <th><?php echo $header; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <?php if (!isset($_POST['table']['no_footer']) || !$_POST['table']['no_footer']): ?>
                    <tfoot>
                        <tr>
                            <?php foreach ($_POST['table']['table_headers'] as $header): ?>
                                <th><?php echo $header; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </tfoot>
                    <?php endif; ?>
                    <tbody>
                        <?php foreach ($_POST['table']['table_data'] as $row): ?>
                            <tr>
                                <?php foreach ($_POST['table']['table_headers'] as $col => $header): ?>
                                    <td><?php echo $row[$col]; ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>