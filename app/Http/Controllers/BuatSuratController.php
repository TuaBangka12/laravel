<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuatSuratModel;
use Illuminate\Support\Facades\Validator;

class BuatSuratController extends Controller
{
    public function index()
    { 
        $buatsurat = BuatSuratModel::all();
        if(count($buatsurat) > 0){
            return response([
                'message' => 'Retrieve All Success',
                'data' => $buatsurat
            ], 200);
        }

        return response([
            'message' => 'Empty',
            'data' => null
        ], 400);
        
    }


/**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $storeData = $request->all();

        $validate = Validator::make($storeData, [
            'nomor' => 'required|max:255',
            'jenis' => 'required',
            'dari' => 'required',
            'kota' => 'required',
            'tanggal' => 'required',
            'kepada' => 'required',
            'sifat' => 'required',
            'lampiran' => 'required',
            'hal' => 'required',
            'ringkasan' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'file' => 'required',
        ]);
        if($validate->fails()){
            return response(['message' => $validate->errors()], 400);
        }
        $buatsurat = BuatSuratModel::create($storeData);
        return response([
            'message' => 'Add Buat Surat Success',
            'data' => $buatsurat
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buatsurat = BuatSuratModel::find($id);

        if(!is_null($buatsurat)){
            return response([
                'message' => 'Retrieve Buat Surat Success'.$buatsurat->nama,
                'data' => $buatsurat
            ], 200);
        }
        return response([
            'message' => 'Buat Surat Not Found',
            'data' => null
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buatsurat = BuatSuratModel::find($id);
    
        if (is_null($buatsurat)) {
            return response([
                'message' => 'Buat Surat Not Found',
                'data' => null
            ], 404);
        }
    
        $updateData = $request->all();
    
        $validate = Validator::make($updateData, [
            'nomor' => 'required|max:255',
            'jenis' => 'required',
            'dari' => 'required',
            'kota' => 'required',
            'tanggal' => 'required',
            'kepada' => 'required',
            'sifat' => 'required',
            'lampiran' => 'required',
            'hal' => 'required',
            'ringkasan' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'file' => 'required',
        ]);
    
        if ($validate->fails()) {
            return response(['message' => $validate->errors()], 400);
        }
    
        $buatsurat->nomor = $updateData['nomor'];
        $buatsurat->jenis = $updateData['jenis'];
        $buatsurat->dari = $updateData['dari'];
        $buatsurat->kota = $updateData['kota'];
        $buatsurat->tanggal = $updateData['tanggal'];
        $buatsurat->kepada = $updateData['kepada'];
        $buatsurat->sifat = $updateData['sifat'];
        $buatsurat->lampiran = $updateData['lampiran'];
        $buatsurat->hal = $updateData['hal'];
        $buatsurat->ringkasan = $updateData['ringkasan'];
        $buatsurat->nip = $updateData['nip'];
        $buatsurat->nama = $updateData['nama'];
        $buatsurat->jabatan = $updateData['jabatan'];
        $buatsurat->file = $updateData['file'];
    
        if ($buatsurat->save()) {
            return response([
                'message' => 'Update Buat Surat Success',
                'data' => $buatsurat
            ], 200);
        } else {
            return response([
                'message' => 'Update Buat Surat Failed',
                'data' => null
            ], 500); // Atau 422, tergantung pada penyebab kegagalan penyimpanan
        }
    }
/**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buatsurat = BuatSuratModel::find($id);

        if(is_null($buatsurat)){
            return response([
                'message' => 'Buat Surat Not Found',
                'data' => null
            ], 404);
        }
        if($buatsurat->delete()){
            return response([
                'message' => 'Delete Surat Success',
                'data' => $buatsurat
            ], 200);
        }
        return response([
            'message' => 'Delete Surat Failed',
            'data' => null
        ],400);
    }
}

    