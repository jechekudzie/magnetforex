<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function service_package_items()
    {
        return $this->hasMany(ServicePackageItem::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
