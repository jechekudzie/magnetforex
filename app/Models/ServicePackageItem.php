<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackageItem extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function service_package()
    {
        return $this->belongsTo(ServicePackage::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function subscription_service_package_items()
    {
        return $this->hasMany(SubscriptionServicePackageItem::class);
    }
}
