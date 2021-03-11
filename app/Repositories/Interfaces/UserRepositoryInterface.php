<?php


namespace App\Repositories\Interfaces;



interface UserRepositoryInterface
{
    public function index();

    public function create(array $data);

    public function show($id);

    public function update(array $data, $id);

    public function delete($id);

}
