<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service_packages()
    {
        return $this->hasMany(ServicePackage::class);
    }


    public function create_service_package($service_package)
    {
        return $this->service_packages()->create($service_package);
    }
}
