<?php
namespace App\Controllers\Consumer;

use App\Models\MahasiswaModel;
use App\Controllers\BaseController;

class CreatecvController extends BaseController
{
   protected $mahasiswamodel;
   public function __construct()
   {
      $this->mahasiswamodel = new MahasiswaModel();
   }
   public function index()
   {
      $mahasiswa = $this->mahasiswamodel->findAll();
      $data = [
         'title'    => 'Data Mahasiswa',
         'mahasiswa' => $mahasiswa
      ];
      echo view('user/createcv/index', $data);
   }
   public function tambah()
   {
      $data = [
         'title' => 'Tambah Data Mahasiswa',
      ];
      echo view('user/createcv/data_tambah', $data);
   }
   public function simpan()
   {
      $this->mahasiswamodel->save([
         'email_mahasiswa' => $this->request->getVar('email_mahasiswa'),
         'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
         'alamat' => $this->request->getVar('alamat'),
         'no_hp' => $this->request->getVar('no_hp'),
         'jk'       => $this->request->getVar('jk')
      ]);
      return redirect()->to('user/createcv/index');
   }
}