<?php
namespace Example\Controllers;

use Example\Controllers\UserRepositoryInterface;
// use App\Entity\Product;

class UserRepository implements UserRepositoryInterface
{

   public function search($name)
   {
      return   "SEARCHED".$name;
   }

   public function getAllByUser($user_id)
   {
    return   "SEARCHED".$user_id;

   }

   public function getAllByCategory($category_id)
   {
    return   "SEARCHED".$category_id;

   }
}