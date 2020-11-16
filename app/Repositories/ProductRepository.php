<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductRepository implements RepositoryInterface
{
    public function find(int $id)
    {

    }

    public function findByTag(string $tag)
    {

    }

    public function query(array $filters)
    {

    }

    public function paginate(int $paginator)
    {
        return Product::simplePaginate($paginator);
    }

    public function save(array $data)
    {

    }

    public function update(Model $model, array $data)
    {
        
    }

    public function delete(int $id)
    {

    }

    public function featured(int $limit = 8)
    {
        return Product::where('featured', true)->offset(0)->limit($limit)->get();
    }
}