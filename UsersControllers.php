<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;
use CodeIgniter\RESTful\ResourceController;


class Users extends ResourceController
{

    protected $modelName = 'App\Models\UsersModel';
    protected $format = 'json';
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        return $this->respond($this->model->findAll());
    }
    public function create()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];
        $data = $this->request->getPost();
        $validate = $this->validation->run($data, 'register');
        $errors = $this->validation->getErrors();

        if ($errors) {
            return $this->fail($errors);
        }
        $user = new \App\Entities\Users();
        $user->fill($data);

        if ($this->model->save($user)) {
            return $this->respondCreated($user, 'user created');
        }
    }
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        $validate = $this->validation->run($data, 'update_user');
        $errors = $this->validation->getErrors();

        if ($errors) {
            return $this->fail($errors);
        }
        if (!$this->model->findById($id)) {
            return $this->fail('id tidak ditemukan');
        }


        $user = new \App\Entities\Users();
        $user->fill($data);


        if ($this->model->save($user)) {
            return $this->respondUpdated($user, 'user updated');
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('id tidak ditemukan');
        }

        if ($this->model->delete($id)) {
            return $this->respondDeleted(['Id' => $id . ' Deleted']);
        }
    }
    public function show($id = null)
    {
        $data = $this->model->findById($id);
        if ($data) {
            return $this->respond($data);
        }
        return $this->fail('id tidak ditemukan');
    }
}
