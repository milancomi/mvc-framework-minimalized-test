<?php
Namespace Example\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {
    
    // Eloquent object relational mapping from Packagist
    // shorthands for sql and pretty nice object filled with data from database

    public $name;
    public $timestamps=[]; 
    protected $fillable = ['u_name','u_email','u_password','u_type','u_sub_type'];
}



