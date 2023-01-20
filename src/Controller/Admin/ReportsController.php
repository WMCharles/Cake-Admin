<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class ReportsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    public function studentsReport()
    {
        $this->set("title", "Students Report | Academics Management");
    }

    public function staffsReport()
    {
        $this->set("title", "Staffs Report | Academics Management");
    }

    public function collegesReport()
    {
        $this->set("title", "Colleges Report | Academics Management");
    }
}
