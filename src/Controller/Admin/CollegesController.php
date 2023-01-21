<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class CollegesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        // load model 
        $this->loadModel("Colleges");
        // load layout
        $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $this->set("title", "Colleges | Academics Management");
    }

    public function add()
    {
        $college = $this->Colleges->newEmptyEntity();
        if ($this->request->is("post")) {
            $fileObject = $this->request->getData("cover_image");
            $filename = $fileObject->getClientFilename();
            $fileExtension = $fileObject->getClientMediaType();

            $valid_extensions = array("image/png", "image/jpeg", "image/gif", "image/jpg");

            if (in_array($fileExtension, $valid_extensions)) {
                $destination = WWW_ROOT . "colleges" . DS . $filename;

                $fileObject->moveTo($destination);

                $collegeData = $this->request->getData();
                $collegeData['cover_image'] = "colleges" . DS . $filename;

                $college = $this->Colleges->patchEntity($college, $collegeData);

                if ($this->Colleges->save($college)) {
                    $this->Flash->success("College Successfully Added!");
                    return $this->redirect(["action" => "index"]);
                } else {
                    $this->Flash->error("Failed to create college!");
                }
            } else {
                $this->Flash->error("Uploaded file is not a valid extension!");
            };
        }
        $this->set(compact('college', $college));
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
