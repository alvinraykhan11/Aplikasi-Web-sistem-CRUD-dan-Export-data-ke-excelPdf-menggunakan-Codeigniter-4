<!DOCTYPE html>
<html>

<head>
    <title>Cetak - Laporan CV Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/printer.css'); ?>">
</head>

<body>

    <table width="100%">
        <tr>
            <td width="50px" align="left"><img src="" height="5px"></td>
            <td valign="top">
                <h3 align="center" style="margin-bottom:8px ">
                    Biodata CV Alvin Raykhan
                </h3>
            </td>
            <td width="50px" height="50px">

            </td>

        </tr>
    </table>
    <hr>
    <table width="100%">
        <tr>
            <td align="left" colspan="5">

            </td>

            <td align="right" rowspan="5" margin="90 px" style="line-height: 2em;">
                <img src="<?= $photoProfile; ?>" id="target" style="width: 154px; float:right; border:5px double black; height: 205px; ">
            </td>

        </tr>
    </table>


    <h3>Biodata Pribadi</h3>

    <table width="100%">

        <tr>
            <td width="20%">Nama Lengkap</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['nama_mahasiswa']; ?></td>
        </tr>
        <tr>
            <td width="20%">Email</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['email_mahasiswa']; ?></td>
        </tr>
        <tr>
            <td width="20%">No Handphone</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['no_hp']; ?></td>
        </tr>
        <tr>
            <td width="20%">Jenis Kelamin</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['jk']; ?></td>
        </tr>
    </table>

    <h3>Pengalaman Pekerjaan</h3>
    <table width="100%">

        <tr>
            <td width="20%">Nama Perusahaan</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['company_name']; ?></td>
        </tr>
        <tr>
            <td width="20%">Jenis Pekerjaan</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['jobdesk']; ?></td>
        </tr>

        <tr>
            <td width="20%">Tahun</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['years_company']; ?></td>
        </tr>

        <tr>
            <td width="20%">Deskripsi Pekerjaan</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['deskripsi_company']; ?></td>
        </tr>
    </table>
    <h3>Pendidikan Terakhir</h3>
    <table width="100%">

        <tr>
            <td width="20%">Nama Instansi</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['education_name']; ?></td>
        </tr>
        <tr>
            <td width="20%">Jurusan</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['jurusan']; ?></td>
        </tr>

        <tr>
            <td width="20%">Tahun</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['years_edu'] ?></td>
        </tr>

        <tr>
            <td width="20%">Deskripsi Pendidikan</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['deskripsi_jurusan']; ?></td>
        </tr>
    </table>
    <h3>Professional Skill</h3>
    <table width="100%">

        <tr>
            <td width="20%">Kemampuan Skill</td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;"><?= $mahasiswa['skill_deskripsi']; ?></td>
        </tr>
        <tr>
            <td width="20%"></td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;">-<?= $mahasiswa['master_skill']; ?></td>
        </tr>

        <tr>
            <td width="20%"></td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;">-<?= $mahasiswa['cabangskill']; ?></td>
        </tr>

        <tr>
            <td width="20%"></td>
            <td width="3%">:</td>
            <td width="50%" style="line-height: 1em;">-<?= $mahasiswa['masterduaskill']; ?></td>
        </tr>
       
    </table>

</body>

</html>