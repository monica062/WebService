<?php

namespace App\Http\Controllers;
use App\Http\Resources\Mahasiswa as MahasiswaResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Mahasiswa;
class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();

        return $this->sendResponse(MahasiswaResource::collection($mahasiswas), 'Mahasiswa retrieved successfully.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'tanggal_lahir' => 'required',
            'golongan_darah' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $mahasiswa = Mahasiswa::create($input);
        return $this->sendResponse(new MahasiswaResource($mahasiswa), 'Mahasiswa created successfully.');
    }
}

// Nama : Monica Silaban
// NIM  : 11322062
// Kelas: D3TI