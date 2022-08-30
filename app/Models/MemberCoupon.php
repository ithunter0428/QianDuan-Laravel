<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class MemberCupon extends Model
{
    use SoftDeletes;
    
    // Get the member
    public function member()
    {
        return $this->hasOne(User::class);
    }
}
