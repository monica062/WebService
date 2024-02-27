<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Mahasiswa extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'nim' => $this->nim,
            'nama' => $this->nama,
            'prodi' => $this->prodi,
            'tanggal_lahir' => $this->tanggal_lahir,
            'golongan_darah' => $this->golongan_darah,
        ];
    }
}

// Nama : Monica Silaban
// NIM  : 11322062
// Kelas: D3TI