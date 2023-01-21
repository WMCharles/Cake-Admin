<?php
if (!empty($title)) {
    $this->assign('title', $title);

    $this->Html->css([
        "/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css",
        "/plugins/datatables-responsive/css/responsive.bootstrap4.min.css",
        "/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
    ], ["block" => "TopStyleLinks"]);
}
?>
<style>
    #form-add-college label.error {
        color: red;
    }
</style>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>List Branch</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">List Branch</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">List Branch</h3>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="table-branches" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Branch Info</th>
                                            <th>College Name</th>
                                            <th>Total Seats</th>
                                            <th>Total Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Branch Info</th>
                                            <th>College Name</th>
                                            <th>Total Seats</th>
                                            <th>Total Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->Html->script([
    "jquery.validate.min.js",
    "/plugins/datatables/jquery.dataTables.min.js",
    "/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js",
    "/plugins/datatables-responsive/js/dataTables.responsive.min.js",
    "/plugins/datatables-responsive/js/responsive.bootstrap4.min.js",
    "/plugins/datatables-buttons/js/dataTables.buttons.min.js",
    "/plugins/datatables-buttons/js/buttons.bootstrap4.min.js",
    "/plugins/jszip/jszip.min.js",
    "/plugins/pdfmake/pdfmake.min.js",
    "/plugins/pdfmake/vfs_fonts.js",
    "/plugins/datatables-buttons/js/buttons.html5.min.js",
    "/plugins/datatables-buttons/js/buttons.print.min.js",
    "/plugins/datatables-buttons/js/buttons.colVis.min.js"
], ["block" => "bottomScriptLinks"]) ?>

<?php
$this->Html->scriptStart(["block" => true]);
echo '$("#table-branches").DataTable();';
$this->Html->scriptEnd();
?>