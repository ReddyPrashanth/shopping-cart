<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function find(int $id);
    
    public function query(array $filters);

    public function save(array $data);

    public function update($id, array $data);

    public function delete(int $id);
}