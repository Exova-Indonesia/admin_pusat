<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  public $table="order";
  public $primaryKey = 'order_id';
  public $fillable = [
      'order_id',
      'customer',
      'seller_id',
      'harga',

  ];
  public function seller(){
    return $this->belongsTo(User::class, "seller_id");
  }

  public function pengguna(){
    return $this->belongsTo(User::class, "customer");
  }
}
