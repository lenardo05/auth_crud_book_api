<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class BookStore extends Model
{
    use Notifiable;

    protected $fillable =  [
        'name', 'isbn', 'value'
    ];
}
