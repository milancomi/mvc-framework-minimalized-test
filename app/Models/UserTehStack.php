<?php
Namespace Example\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserTehStack extends Eloquent {
    
    // Eloquent object relational mapping from Packagist
    // shorthands for sql and pretty nice object filled with data from database

    public $name;
    public $timestamps=[]; 
    protected $fillable = ['u_id','u_teh_stack_id'];
    
}



