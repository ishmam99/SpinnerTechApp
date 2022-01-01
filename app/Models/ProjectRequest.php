<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
   protected $fillable = [
    'name',
    'email',
    'phone',
    'company_name',
    'website',
    'address',
    'project_budget',
    'project_id',
    'service_id',
    'country',
    'pages_num',
    'similar_site',
    'domain',
    'content',
    'logo',
    'details'
   ];
}
