<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    use HasFactory;
    public $fillable = ['company_name', 'name', 'email', 'telephone', 'post_code', 'address', 'bank_name', 'branch_name', 'bank_account', 'account_type',];
}
