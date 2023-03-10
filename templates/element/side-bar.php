<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <?= $this->Html->image('/dist/img/AdminLTELogo.png', [
            'alt' => "AdminLTE Logo",
            'class' => "brand-image img-circle elevation-3",
            'style' => "opacity: .8"
        ]) ?>
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">AgriAI College</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= $this->Html->image('/dist/img/user2-160x160.jpg', [
                    'class' => "img-circle elevation-2",
                    'alt' => "User Image"
                ])?>
                <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <a href="#" class="d-block">Charles Masinde</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="<?= $this->Url->build('/admin', ['fullBase' => true])?>" class="nav-link">
                        <i class="fa fa-tachometer nav-icon"></i>
                        <p>Dashboards</p>
                    </a>
                </li>
                <!-- College -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-university"></i>
                        <p>
                            Manage College
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/add-college', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add College</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/list-colleges', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List College</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Branch -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>
                            Manage Branch
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/add-branch', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Branch</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/list-branches', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Branch</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Staff -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Manage Staff
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/add-staff', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/list-staffs', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Staff</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Student -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Manage Student
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/add-student', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Students</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/list-students', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Students</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Reports -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Reports
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/colleges-report', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Colleges Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/students-report', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Students Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= $this->Url->build('/admin/staffs-report', ['fullBase' => true])?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staff Report</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="pages/charts/flot.html" class="nav-link">
                        <i class="fa fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>