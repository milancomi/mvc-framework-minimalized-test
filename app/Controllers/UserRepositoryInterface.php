<?php
namespace Example\Controllers;

interface UserRepositoryInterface
{
    public function search($name);

    public function create($data);
    public function getAllByUser($user_id);

    public function getAllByCategory($category_id);
}