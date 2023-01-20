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
    }

    public function add()
    {
    }

    public function edit($id = null)
    {
    }


    public function delete($id = null)
    {
    }
}
