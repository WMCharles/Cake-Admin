<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class BranchesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $this->set("title", "List Branches | Academics Management");
    }

    public function add()
    {
        $this->set("title", "Add Branches | Academics Management");
    }

    public function edit($id = null)
    {
        $this->set("title", "Edit Branches | Academics Management");
    }


    public function delete($id = null)
    {
    }
}
