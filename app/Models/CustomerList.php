<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerList extends Model
{
    use HasFactory;

    protected $table = 'customerlists';
    protected $fillable = ['Naam', 'Bank_Account_Number', 'Social_Security_Number'];
}
