<?php
if (!empty($title)) {
    $this->assign('title', $title);
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
                <h3>Add College</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add College</li>
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
                        <h3 class="card-title">Add College</h3>
                    </div>
                    <div class="card-body">
                        <?= $this->Form->create($college,  ["id" => "form-add-college", "type" => "file"]) ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" required name="name" id="name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Short Name*</label>
                                    <input type="text" required name="short_name" id="short_name" class="form-control" placeholder="Enter Short Name">
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
                                    <label>Location*</label>
                                    <textarea name="location" required id="location" class="form-control" placeholder="Enter location"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Total Faculty*</label>
                                    <input type="number" min="10" required name="total_faculty" id="total_faculty" class="form-control" placeholder="Enter Total Faculty">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Contact Number*</label>
                                    <input type="text" required name="contact_number" id="contact_number" class="form-control" placeholder="Enter Contact Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" required name="email" id="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Cover Image*</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" required name="cover_image" id="cover_image" class="custom-file-input form-control">
                                            <label class="custom-file-label" for="exampleInputFile">Upload image</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
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
                        <?= $this->Form->end() ?>
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
echo '$("#form-add-college").validate();';
$this->Html->scriptEnd();
?>