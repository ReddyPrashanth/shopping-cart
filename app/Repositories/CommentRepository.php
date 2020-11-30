<?php

namespace App\Repositories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class CommentRepository implements RepositoryInterface
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
        return Comment::with('user')->where('review_id', $id)->simplePaginate($paginator);
    }

    public function save(array $data)
    {

    }

    public function update($id, array $data)
    {
        
    }

    public function delete(int $id)
    {
        return Comment::destroy($id);
    }

    /**
     * returns all categories and its children if $children is set
     * @param null|string $children
     */
    public function get($children = null)
    {
        if($children){
            return Comment::with($children)->get();
        }
        return Comment::all();
    }
}