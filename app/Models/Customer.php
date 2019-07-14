<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //By default this variable is empty
    //so we are able to specifies every field that we will allow mass assignment on
    // protected $fillable = ['name', 'email', 'active'];

    //is the opposite of fillabe
    //if we pass a field to it, we are saying that the field passed is NOT allowed mass assignment
    //if we leave it empty we are saying that every field is allowed. (nothing is guarded)
    protected $guarded = [];

    //Remember to every scope needs to be written all lowercase so laravel code can be cleaner and understand it all
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }
}
