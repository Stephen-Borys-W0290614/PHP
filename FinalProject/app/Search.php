<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    public function scopeSearch($query, $search){
        return $query->where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%' );
    }
}
