<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionServicePackageItem extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function service_package_item()
    {
        return $this->belongsTo(ServicePackageItem::class);
    }
}
