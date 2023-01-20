<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class StaffsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $this->set("title", "List Staff | Academics Management");

    }

    public function add()
    {
        $this->set("title", "Add Staff | Academics Management");

    }

    public function edit($id = null)
    {
        $this->set("title", "Edit Staff | Academics Management");

    }


    public function delete($id = null)
    {
    }
}
