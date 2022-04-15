<?php

namespace App\Models\Order;

use App\Models\Package\Package;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'package_id', 'package_owner_id'];

    protected $hidden = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function owner()
    {
        $this->belongsTo(User::class, 'package_owner_id');
    }
}
