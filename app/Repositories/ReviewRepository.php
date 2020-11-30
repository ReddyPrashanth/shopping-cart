<?php

namespace App\Repositories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;

class ReviewRepository implements RepositoryInterface
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

    public function paginate(int $paginator, $id)
    {
        return Review::withCount('comments')->where('product_id', $id)->simplePaginate($paginator);
    }

    public function save(array $data)
    {

    }

    public function update($id, array $data)
    {
        
    }

    public function delete(int $id)
    {
        return Review::destroy($id);
    }

    /**
     * returns all categories and its children if $children is set
     * @param null|string $children
     */
    public function get($children = null)
    {
        if($children){
            return Review::with($children)->get();
        }
        return Review::all();
    }
}