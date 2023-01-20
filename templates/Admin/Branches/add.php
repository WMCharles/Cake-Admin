<?php
if (!empty($title)) {
    $this->assign('title', $title);
}
?>
<style>
    #form-add-branch label.error {
        color: red;
    }
</style>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Add Branch</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Branch</li>
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
                        <h3 class="card-title">Add Branch</h3>
                    </div>
                    <div class="card-body">
                        <form id="form-add-branch">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" required name="name" id="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Select College*</label>
                                            <select required name="college_id" id="college_id" class="form-control">
                                                <option value="1">Sample College</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Session Start Date*</label>
                                        <input type="text" min="10" required name="start_date" id="start_date" class="form-control" placeholder="Enter Start Date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Session End Date*</label>
                                        <input type="text" required name="end_date" id="end_date" class="form-control" placeholder="Enter End Date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Total Seats*</label>
                                        <input type="number" required name="total_seats" id="total_seats" class="form-control" placeholder="Enter total seats">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Total Duration*</label>
                                        <input type="number" min="1" name="total_duration" required id="total_duration" class="form-control" placeholder="Enter total_duration"></input>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="description" class="form-control" placeholder="Enter Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status*</label>
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <button name="btn_submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->Html->script([
    "jquery.validate.min.js"
], ["block" => "bottomScriptLinks"]) ?>

<?php
$this->Html->scriptStart(["block" => true]);
echo '$("#form-add-branch").validate();';
$this->Html->scriptEnd();
?>