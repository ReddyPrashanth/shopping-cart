<?php

namespace App\Repositories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryRepository implements RepositoryInterface
{
    public function find(int $id)
    {

    }

    public function findByTag(string $tag)
    {
        return SubCategory::where('tag', $tag)->firstOrFail();
    }

    public function query(array $filters)
    {

    }

    public function paginate(int $paginator)
    {
    
    }

    public function save(array $data)
    {

    }

    public function update($id, array $data)
    {
        
    }

    public function delete(int $id)
    {

    }
}