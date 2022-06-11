<?php

namespace App\Controllers\SuperAdmin;

use App\Models\PegawaiModel;
use App\Controllers\BaseController;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PegawaiController extends BaseController
{
    protected $mahasiswaModel;

    function __construct()
    {
        $this->mahasiswaModel = new PegawaiModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->findAll();

        $data = [
            'title' => 'Data CV Mahasiswa',
            'mahasiswa' => $mahasiswa,
        ];


        return view("super_admin/pegawai/index", $data);
    }

    public function create()
    {
        return view('super_admin/pegawai/create');
    }

    public function store()
    {
        if (!$this->validate([
            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,5120]',
                'errors' => [
                    'uploaded' => 'There must be a file uploaded',
                    'mime_in' => 'File Extension Must Be jpg,jpeg,gif,png',
                    'max_size' => 'File Size Max 5 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $dataImage = $this->request->getFile('image');
        $fileName = $dataImage->getRandomName();

        $this->mahasiswaModel->insert([
            'email_mahasiswa' => $this->request->getPost('email_mahasiswa'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'alamat' =>  $this->request->getPost('alamat'),
            'no_hp' =>  $this->request->getPost('no_hp'),
            'jk' =>  $this->request->getPost('jk'),
            'no_hp' =>  $this->request->getPost('no_hp'),
            'company_name' =>  $this->request->getPost('company_name'),
            'deskripsi_company' =>  $this->request->getPost('deskripsi_company'),
            'years_company' =>  $this->request->getPost('years_company'),
            'jobdesk' =>  $this->request->getPost('jobdesk'),
            'skill_deskripsi' =>  $this->request->getPost('skill_deskripsi'),
            'master_skill' =>  $this->request->getPost('master_skill'),
            'cabangskill' =>  $this->request->getPost('cabangskill'),
            'masterduaskill' =>  $this->request->getPost('masterduaskill'),
            'cabangduaskill' =>  $this->request->getPost('cabangduaskill'),
            'education_name' =>  $this->request->getPost('education_name'),
            'years_edu' =>  $this->request->getPost('years_edu'),
            'jurusan' =>  $this->request->getPost('jurusan'),
            'deskripsi_jurusan' =>  $this->request->getPost('deskripsi_jurusan'),
            'photo' =>  $fileName,
        ]);

        $dataImage->move('uploads/images/', $fileName);

        return redirect('super_admin/pegawai')->with('success', 'Data CV Added Successfully');
    }


    public function update()
    {
        $id = $this->request->getPost('id_mahasiswa');

        if (!$this->validate([
            'image' => [
                'rules' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,100]',
                'errors' => [
                    'uploaded' => 'There must be a file uploaded',
                    'mime_in' => 'File Extension Must Be jpg,jpeg,gif,png',
                    'max_size' => 'File Size Max 5 MB'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $dataImage = $this->request->getFile('image');
        $fileName = $dataImage->getRandomName();


        $this->mahasiswaModel->update($id, [
            'email_mahasiswa' => $this->request->getPost('email_mahasiswa'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'alamat' =>  $this->request->getPost('alamat'),
            'no_hp' =>  $this->request->getPost('no_hp'),
            'jk' =>  $this->request->getPost('jk'),
            'no_hp' =>  $this->request->getPost('no_hp'),
            'company_name' =>  $this->request->getPost('company_name'),
            'deskripsi_company' =>  $this->request->getPost('deskripsi_company'),
            'years_company' =>  $this->request->getPost('years_company'),
            'jobdesk' =>  $this->request->getPost('jobdesk'),
            'skill_deskripsi' =>  $this->request->getPost('skill_deskripsi'),
            'master_skill' =>  $this->request->getPost('master_skill'),
            'cabangskill' =>  $this->request->getPost('cabangskill'),
            'masterduaskill' =>  $this->request->getPost('masterduaskill'),
            'cabangduaskill' =>  $this->request->getPost('cabangduaskill'),
            'education_name' =>  $this->request->getPost('education_name'),
            'years_edu' =>  $this->request->getPost('years_edu'),
            'jurusan' =>  $this->request->getPost('jurusan'),
            'deskripsi_jurusan' =>  $this->request->getPost('deskripsi_jurusan'),
            'photo' =>  $fileName,
        ]);

        $dataImage->move('uploads/images/', $fileName);

        return redirect('super_admin/pegawai')->with('success', 'CV Update Successfully');
    }
    public function edit($id)

    {

        $mahasiswa = $this->mahasiswaModel->getMahasiswas($id);

        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa,

        ];

        return view('super_admin/pegawai', $data);
    }

    public function delete()
    {

        $id = $this->request->getPost('id_mahasiswa');

        $this->mahasiswaModel->delete($id);

        return redirect('super_admin/pegawai')->with('success', 'Data Deleted Successfully');
    }

    public function export_pdf()
    {
        $id = $this->request->getPost('id_mahasiswa');
        $dataMahasiswa = $this->mahasiswaModel->getMahasiswas($id);

        $path = '../public/uploads/images/' . $dataMahasiswa['photo'];
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $photoProfile = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view("pdf/data-cv", ["mahasiswa" => $dataMahasiswa, 'photoProfile' => $photoProfile]));
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("CV_Mahasiswa", array("Attachment" => false));
    }

    public function viewpdf()
    {
        $data = $this->db->table("mahasiswa")->get()->getResult();
        return view('filepdf', [
            "mahasiswadata" => $data
        ]);
    }

    public function export_excel()
    {
        $mahasiswa = $this->mahasiswaModel->getMahasiswa();

        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Nama Lengkap');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Alamat');
        $sheet->setCellValue('D1', 'Jenis Pekerjaan');
        $sheet->setCellValue('E1', 'Nama Pendidikan');
        $sheet->setCellValue('F1', 'Jurusan Pendidikan');
        $sheet->setCellValue('G1', 'Kemampuan');
        $rows = 2;

        foreach ($mahasiswa as $val) {
            $sheet->setCellValue('A' . $rows, $val['nama_mahasiswa']);
            $sheet->setCellValue('B' . $rows, $val['email_mahasiswa']);
            $sheet->setCellValue('C' . $rows, $val['alamat']);
            $sheet->setCellValue('D' . $rows, $val['jobdesk']);
            $sheet->setCellValue('E' . $rows, $val['education_name']);
            $sheet->setCellValue('F' . $rows, $val['jurusan']);
            $sheet->setCellValue('G' . $rows, $val['skill_deskripsi']);
            $rows++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'Data CV Mahasiswa';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
