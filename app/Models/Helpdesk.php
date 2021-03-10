<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helpdesk extends Model
{
    use HasFactory;

    protected $table = 'helpdesk';
    protected $fillable = ['user_id', 'category', 'title', 'description', 'images'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
