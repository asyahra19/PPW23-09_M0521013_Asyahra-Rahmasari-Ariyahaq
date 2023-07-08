<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetBoarding extends Model
{
    use HasFactory;
    protected $fillable = ['pet_name', 'owner_name', 'entry_date', 'exit_date'];
}
