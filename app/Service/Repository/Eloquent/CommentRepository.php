<?php

namespace App\Service\Repository\Eloquent;

use App\Models\Comment;
use App\Service\Repository\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{

    private Comment $comment;

    /**
     */
    public function __construct()
    {
        $this->comment = new Comment();
    }


    public function getCommentProduct()
    {
        // TODO: Implement getCommentProduct() method.
    }

    public function addCommentProduct($idUser, $idProduct, $comment, $rating)
    {
        try {
            return $this->comment->create(array(
                'id_user' => $idUser,
                'id_product' => $idProduct,
                'comment' => $comment,
                'rating' => $rating
            ));
        } catch (\Exception $e) {
            return false;
        }
    }
}
