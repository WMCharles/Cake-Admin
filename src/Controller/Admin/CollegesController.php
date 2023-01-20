<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class CollegesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $this->set("title", "Colleges | Academics Management");
    }

    public function add()
    {
        $this->set("title", "Add College | Academics Management");
    }

    public function edit($id = null)
    {
        $this->set("title", "Edit College | Academics Management");
    }


    public function delete($id = null)
    {
    }
}
