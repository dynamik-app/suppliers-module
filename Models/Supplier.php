<?php

namespace Modules\Suppliers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Suppliers\Database\Factories\SupplierFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    protected static function newFactory()
    {
        return SupplierFactory::new();
    }
}
