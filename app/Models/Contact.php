<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'team_id',
        'name',
        'phone',
        'email',
        'sticky_phone_number_id'
    ];

    public function customAttributes()
    {
        return $this->hasMany(ContactCustomAttribute::class);
    }
}
