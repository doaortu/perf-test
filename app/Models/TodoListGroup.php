<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoListGroup extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(TodoItem::class, 'group_id');
    }

}
