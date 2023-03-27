<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StoreDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'kategori' => 'required',
            'jenis_kasus' => 'required',
            'nik' => 'numeric|nullable',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'kabupaten_kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan_desa' => 'required',
            'permasalahan' => 'required',
            'waktu_kejadian' => 'required',
            'tempat_kejadian' => 'required',
            'pekerjaan' => 'required',
            'kebutuhan' => 'required',
            'nama_pengadu' => 'required',
            'nomor_pengadu' => 'required|numeric',
            'foto' => 'required|image',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'kabupaten_kota' => 'kabupaten/kota',
            'kelurahan_desa' => 'kelurahan/desa',
            'permasalahan' => 'permasalahan yang dirasakan',
            'kebutuhan' => 'kebutuhan yang diharapkan',
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'nama' => Str::title($this->nama),
            'tempat_lahir' => Str::upper($this->tempat_lahir),
            'kabupaten_kota' => Str::upper($this->kabupaten_kota),
            'kecamatan' => Str::upper($this->kecamatan),
            'kelurahan_desa' => Str::upper($this->kelurahan_desa),
            'permasalahan' => Str::ucfirst($this->permasalahan),
            'tempat_kejadian' => Str::upper($this->tempat_kejadian),
            'pekerjaan' => Str::upper($this->pekerjaan),
            'kebutuhan' => Str::ucfirst($this->kebutuhan),
            'nama_pengadu' => Str::title($this->nama_pengadu),
        ]);
    }
}
