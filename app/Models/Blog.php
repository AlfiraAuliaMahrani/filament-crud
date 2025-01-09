<?php

namespace App\Models;

use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, HasUlids;

    protected $fillable =
    [
        'name'
    ];

}
