<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
   
    protected $table = 'invoices';
    protected $fillable = [
        'cust_id',
        'amount',
        'created_date',
        'modified_date',
        'status'
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
