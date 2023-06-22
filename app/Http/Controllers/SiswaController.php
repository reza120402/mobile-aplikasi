<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
//
public function index(){
return siswa::all();
}
//simpan data
public function create(request $request){
$siswa = new Siswa();
$siswa->nama = $request->nama;
$siswa->alamat = $request->alamat;
$siswa->save();
return "Data Berhasil di simpan";
}
//update data
public function update(request $request, $id){
$nama = $request->nama;
$alamat = $request->alamat;
$siswa=Siswa::find($id);
$siswa->nama = $nama;
$siswa->alamat = $alamat;
$siswa->save();
return "Data Berhasil di update";
}
//delete data
public function delete($id){
$siswa=Siswa::find($id);
$siswa->delete();
return "Data Berhasil di delete";
}
}
