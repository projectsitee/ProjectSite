<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'Product','Paperback','PaperHeat','Services','Size',
        'Circulation','Description','FrontImage','BackImage',
        'InvoiceNumber','user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'id');


    }
}
