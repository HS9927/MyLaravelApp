<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaginationDataTable extends Model
{
    protected $table = "pagination_data_tables";

    protected $guarded = ["id"];
}
