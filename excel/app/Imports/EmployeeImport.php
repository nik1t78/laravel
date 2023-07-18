<?php

namespace App\Imports;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class EEmployeeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'IO' => $row[1],
            'Deputy'  => $row[2],
            'Phone1' => $row[3],
            'E-mail address' => $row[4],
            'Reception address' => $row[5],
            'Employee on site' => $row[6],
            'Phone2' => $row[7],
            'coordinates' => $row[8],
        ]);
    }
}
