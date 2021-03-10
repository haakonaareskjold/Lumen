<?php


namespace App\Models\Repositories;


/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */
interface UserRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function show($id);

    public function update(array $data, $id);

    public function delete($id);

}
