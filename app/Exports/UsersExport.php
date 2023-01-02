<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    protected $selectedKey = [];

    public function __construct($user)
    {
        $this->selectedKey = $user;
    }

    public function collection()
    {
        return User::whereIn('id', $this->selectedKey)->get();
    }

    public function headings(): array
    {
        return [
            'Key',
            'User Id',
            'Name',
            'Username',
            'Email',
            'Verfikasi Email',
            'Status',
            'Foto',
            'Alamat',
            'Bio',
            'Umur',
            'Tanggal Lahir',
            'Gender',
            'No HP',
            'Company/Perusahaan',
            'NIK',
            'Sinta ID',
            'GS ID',
            'Scopus ID',
            'Created_at',
            'Update_at',

        ];
    }

}
