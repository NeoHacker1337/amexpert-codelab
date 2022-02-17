<?php

namespace App\Imports;

use App\Models\Submission;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubmissionImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Submission([
            'customer_id' => $row['customer_id'],
            'credit_card_default' => $row['credit_card_default'],
        ]);
    }
}
