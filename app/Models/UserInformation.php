<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $table = 'users_information';
    protected $primaryKey = 'user_information_id';

    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
