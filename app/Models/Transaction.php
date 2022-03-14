<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\Category;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'transaction_date', 'amount', 'description', 'user_id'];

    protected $dates = ['transaction_date'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function setAmountAttribute($value) {
        $this->attributes['amount'] = $value * 100;
    }

    public function setTransactionAttribute($value) {
        $this->attributes['transaction_date'] = Carbon::createFromFormat('d-m-Y', $value)->format('Y-m-d');
    }
}
