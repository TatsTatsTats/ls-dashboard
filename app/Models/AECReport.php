<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class AECReport extends Model
{
    /** @use HasFactory<\Database\Factories\AECReportFactory> */
    use HasFactory;
    public static function getCleanHeaders()
    {
        // 1. Get all database columns for this model's table
        $columns = Schema::getColumnListing((new static)->getTable());

        // 2. Define fields to exclude
        $exclude = ['id', 'created_at', 'updated_at'];

        // 3. Filter and reset array keys
        return array_values(array_diff($columns, $exclude));
    }
}
