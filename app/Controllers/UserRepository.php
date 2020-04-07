<?php
namespace Example\Controllers;

use Example\Controllers\UserRepositoryInterface;
use Example\Models\User;
use Example\Models\UserTehStack;

// use App\Entity\Product;

class UserRepository implements UserRepositoryInterface
{

   public function getAllUsers(){

      return User::all();
   }
   public function search($name)
   {
      return   "SEARCHED".$name;
   }

   public function create($data){
      $user = User::create([
         'u_name'=>$data["u_name"],
         'u_email'=>$data["u_email"],
         'u_password'=>$data["u_password"],
         'u_position'=>$data["u_position"],
         'u_role'=>1
         ]);

         $tex_stacks = count($data['u_teh_stack']);

         for($i = 0; $i < $tex_stacks; $i++)
         {
           $tex = UserTehStack::create([
               'u_id'=>$user->id,
               'u_teh_stack_id'=>$data['u_teh_stack'][$i]
            ]);
         }
         // $user->teh()->attach($tex);

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