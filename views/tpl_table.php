<?php if (isset($_POST['table']) && !empty($_POST['table'])): ?>
    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <?php foreach ($_POST['table']['table_headers'] as $header): ?>
                                <th><?php echo $header; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <?php foreach ($_POST['table']['table_headers'] as $header): ?>
                                <th><?php echo $header; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($_POST['table']['table_data'] as $row): ?>
                            <tr>
                                <?php foreach ($_POST['table']['table_headers'] as $header): ?>
                                    <td><?php echo $row[$header]; ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php endif; ?>