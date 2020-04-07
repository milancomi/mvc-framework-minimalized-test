<?php
Namespace Example\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TehStack extends Eloquent {
    
    // Eloquent object relational mapping from Packagist
    // shorthands for sql and pretty nice object filled with data from database

    public $name;
    public $timestamps=[]; 
    protected $fillable = ['teh_name'];

    public function user(){

        return $this->belongsToMany(User::class);
    }
}



