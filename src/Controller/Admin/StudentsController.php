<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class StudentsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $this->set("title", "List Students | Academics Management");
    }

    public function add()
    {
        $this->set("title", "Add Student | Academics Management");
    }

    public function edit($id = null)
    {
        $this->set("title", "Edit Student | Academics Management");
    }


    public function delete($id = null)
    {
    }
}
