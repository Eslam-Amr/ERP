<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as SpatiePermission;

class PermissionTranslation extends SpatiePermission
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name'];
}
