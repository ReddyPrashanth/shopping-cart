<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryRepository implements RepositoryInterface
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

    }

    public function save(array $data)
    {

    }

    public function update($id, array $data)
    {
        
    }

    public function delete(int $id)
    {
        return Category::destroy($id);
    }

    /**
     * returns all categories and its children if $children is set
     * @param null|string $children
     */
    public function get($children = null)
    {
        if($children){
            return Category::with($children)->get();
        }
        return Category::all();
    }
}