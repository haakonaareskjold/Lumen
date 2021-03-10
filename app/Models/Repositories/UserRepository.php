<?php


namespace App\Models\Repositories;


use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(Protected User $user)
    {}

    public function all()
    {
        return $this->user->query()->get();
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function show($id)
    {
        return $this->user->query()->find($id) ?? null;
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
