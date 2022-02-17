<?php

namespace App\Imports;

use App\Models\Train;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TrainImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Train([
              'customer_id' => $row['customer_id'],
              'name' => $row['name'],
              'age' => $row['age'],
              'gender' => $row['gender'],
              'owns_car' => $row['owns_car'],
              'owns_house' => $row['owns_house'],
              'no_of_children' => $row['no_of_children'],
              'net_yearly_income' => $row['net_yearly_income'],
              'no_of_days_employed' => $row['no_of_days_employed'],
              'occupation_type' => $row['occupation_type'],
              'total_family_members' => $row['total_family_members'],
              'migrant_worker' => $row['migrant_worker'],
              'yearly_debt_payments' => $row['yearly_debt_payments'],
              'credit_limit' => $row['credit_limit'],
              'credit_limit_used' => $row['credit_limit_used'],
              'credit_score' => $row['credit_score'],
              'prev_defaults' => $row['prev_defaults'],
              'default_in_last_6months' => $row['default_in_last_6months'],
              'credit_card_default' => $row['credit_card_default'],
        ]);
    }
}
