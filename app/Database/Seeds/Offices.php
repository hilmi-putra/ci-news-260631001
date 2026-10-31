<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Offices extends Seeder
{
    public function run()
    {
        $offices = [
            [
                'officeCode' => '1',
                'city' => 'Jakarta',
                'phone' => '+62 21 555 0101',
                'addressLine1' => 'Jl. Sudirman No. 10',
                'addressLine2' => null,
                'state' => 'DKI Jakarta',
                'country' => 'Indonesia',
                'postalCode' => '10220',
                'territory' => 'APAC',
            ],
            [
                'officeCode' => '2',
                'city' => 'Bandung',
                'phone' => '+62 22 555 0102',
                'addressLine1' => 'Jl. Asia Afrika No. 20',
                'addressLine2' => null,
                'state' => 'Jawa Barat',
                'country' => 'Indonesia',
                'postalCode' => '40111',
                'territory' => 'APAC',
            ],
        ];

        foreach ($offices as $office) {
            $exists = $this->db->table('offices')
                ->where('officeCode', $office['officeCode'])
                ->countAllResults();

            if ($exists === 0) {
                $this->db->table('offices')->insert($office);
            }
        }
    }
}
