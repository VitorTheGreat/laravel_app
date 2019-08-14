<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //By default this variable is empty
    //so we are able to specifies every field that we will allow mass assignment on
    // protected $fillable = ['name', 'email', 'active'];

    //is the opposite of fillable
    //if we pass a field to it, we are saying that the field passed is NOT allowed mass assignment
    //if we leave it empty we are saying that every field is allowed. (nothing is guarded)
    protected $guarded = [];

    //Setting a default value for active, so the variable isn't null on the form
    protected $attributes = [
        'active' => 1
    ];

    //getting an attribute and passing the proper attribute for us, through the model
    //It has to be here in the model beacause the model is in charge of giving us all the information about the 'customer'
    public function getActiveAttribute($attribute)
    {
        //!Refactoring code!
        // return [
        //     0 => 'Inactive',
        //     1 => 'Active'
        // ][$attribute];
        //!NOW THE MODEL IS IN CHARGE OF TREATING THE VALUES, NOT THE VIEW
        return $this->activeOptions()[$attribute];
    }

    //Remember to every scope needs to be written all lowercase so laravel code can be cleaner and understand it all
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function company()
    {
        //Here we associate a company to the customers
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        //Like this we can create any values that we want for example: in-Progress
        //Now we can use this array to generate our view
        return [
            1 => 'Active', //this order is the same that will show to the user
            0 => 'Inactive'
        ];
    }
}
