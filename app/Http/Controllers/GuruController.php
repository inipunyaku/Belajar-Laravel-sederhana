<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;
class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }

    public function index() {
        $data = [
            'guru' =>$this->GuruModel->allData(),
        ];
        return view('v_guru', $data);
    }
    public function detail($id_guru){
        if(!$this->GuruModel->detailData($id_guru)->first()){
            abort(404);
        }
        $data = [
            'guru' =>$this->GuruModel->detailData($id_guru)->first(),
        ];
        return view('v_detailguru', $data);
    }

    public function add()
    {
        return view('v_addguru');    
    }
    public function insert()
    {
        Request()->validate([
            'nip_guru' => 'required|unique:tbl_guru|min:5|max:10',
            'nama_guru' => 'required',
            'mapel_guru' => 'required',
            'foto_guru' => 'required|max:2048',
        ],[
            'nip_guru.required' =>'Wajib diisi !!',
            'nip_guru.unique' =>'NIP SUDAH ADA !!',
            'nip_guru.min' =>'minimal 5 karakter !!',
            'nip_guru.max' =>'Maksimal 10 karakter !!',
            'nama_guru.required' =>'Wajib diisi !!',
            'mapel_guru.required' =>'Wajib diisi !!',
            'foto_guru.required' =>'Wajib diisi !!',
            'foto_guru.mimes' =>'masukan ekstensi jpg, jpeg, bmp, png !!',
            'foto_guru.max.required' =>'maksimal 10 karakter !!',
        ]);

        // upload gambar
        $file = Request()->foto_guru;
        $fileName = Request()->nip_guru.'.'.$file -> extension();
        $file->move(public_path('foto_guru'), $fileName);

        $data=[
            'nip_guru' => Request()->nip_guru,
            'nama_guru' => Request()->nama_guru,
            'mapel_guru' => Request()->mapel_guru,
            'foto_guru' => $fileName,
        ];

        $this->GuruModel->addData($data);        
        return redirect()->route('guru')-> with('pesan', 'Data berhasil di tambahkan !');

    }
    public function edit($id_guru){
        if(!$this->GuruModel->detailData($id_guru)->first()){
            abort(404);
        }
        $data = [
            'guru' =>$this->GuruModel->detailData($id_guru)->first(),
        ];
        return view('v_editguru',$data);
    }

    public function update($id_guru)
    {
        Request()->validate([
            'nip_guru' => 'required|min:5|max:10',
            'nama_guru' => 'required',
            'mapel_guru' => 'required',
            'foto_guru' => 'max:2048',
        ],[
            'nip_guru.required' =>'Wajib diisi !!',
            'nip_guru.unique' =>'NIP SUDAH ADA !!',
            'nip_guru.min' =>'minimal 5 karakter !!',
            'nip_guru.max' =>'Maksimal 10 karakter !!',
            'nama_guru.required' =>'Wajib diisi !!',
            'mapel_guru.required' =>'Wajib diisi !!',
            'foto_guru.required' =>'Wajib diisi !!',
            'foto_guru.mimes' =>'masukan ekstensi jpg, jpeg, bmp, png !!',
            'foto_guru.max.required' =>'maksimal 10 karakter !!',
        ]);
        if(request()->foto_guru <> ""){
        // upload gambar
        $file = Request()->foto_guru;
        $fileName = Request()->nip_guru.'.'.$file -> extension();
        $file->move(public_path('foto_guru'), $fileName);

        $data=[
            'nama_guru' => Request()->nama_guru,
            'mapel_guru' => Request()->mapel_guru,
            'foto_guru' => $fileName,
        ];

        $this->GuruModel->editData($id_guru, $data);    
    }else{

        $data=[
            'nama_guru' => Request()->nama_guru,
            'mapel_guru' => Request()->mapel_guru,
        ];

        $this->GuruModel->editData($id_guru, $data); 
    }
        return redirect()->route('guru')-> with('pesan', 'Data berhasil diUbah !');

    }
    
    public function delete($id_guru)
    {
        //Delete Foto
        $guru=$this->GuruModel->detailData($id_guru)->first(); 
        if($guru->foto_guru<>""){
            unlink(public_path('foto_guru').'/'.$guru->foto_guru);
        }
          $this->GuruModel->deleteData($id_guru); 
          return redirect()->back()-> with('pesan', 'Data berhasil Hapus !');

    }
}