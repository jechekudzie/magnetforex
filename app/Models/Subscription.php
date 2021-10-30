<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service_package()
    {
        return $this->belongsTo(ServicePackage::class);
    }

    public function subscription_service_package_items()
    {
        return $this->hasMany(SubscriptionServicePackageItem::class);
    }




}
