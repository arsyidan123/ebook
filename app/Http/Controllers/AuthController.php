<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NISN" => 3103119029,
            "Nama" => "Arsyidan Suhaeli",
            "Gender" => "Laki-laki",
            "Phone" => 6281545122213,
            "Kelas" => "XII RPL 1"
        ];

    }

}