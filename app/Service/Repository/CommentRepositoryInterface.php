<?php

namespace App\Service\Repository;

interface CommentRepositoryInterface
{
    public function getCommentProduct();

    public function addCommentProduct($idUser, $idProduct, $comment, $rating);
}
