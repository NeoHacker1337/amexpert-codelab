<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $table ="train";
    protected $fillable = ['customer_id','name','age','gender','owns_car','owns_house','no_of_children','net_yearly_income','no_of_days_employed','occupation_type','total_family_members','migrant_worker','yearly_debt_payments','credit_limit','credit_limit_used','credit_score','prev_defaults','default_in_last_6months','credit_card_default','created_at','updated_at'];
}
