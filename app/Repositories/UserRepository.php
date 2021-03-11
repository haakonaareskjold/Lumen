<?php


namespace App\Repositories;


use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(Protected User $model)
    {}

    public function index()
    {
        return $this->model->query()->get();
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function show($id)
    {
        return $this->model->query()->find($id) ?? null;
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
