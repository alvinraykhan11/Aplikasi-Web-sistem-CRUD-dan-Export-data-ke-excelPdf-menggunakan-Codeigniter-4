<?= $this->extend("super_admin/index") ?>

<?= $this->section("title") ?>
Data - Mahasiswa
<?= $this->endSection(); ?>

<?= $this->section("content") ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?php echo $title; ?></h1>

<!-- Message Alert -->
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
    </div>

    <!-- Tombol Menambah Data -->
    <div class="card-body">
        <a href="<?= base_url('super_admin/pegawai/create') ?>" class="btn btn-primary mb-3 ">
            Create Data
        </a>
        <a class="btn btn-primary mb-3 " href="<?= base_url('super_admin/pegawai/export_excel') ?>">
            <i class="fas fa-file-excel"></i> Export to excel
        </a>
       

        <!-- DataTable  -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Picture</th>

                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Action</th>
                        <th>Export</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Telephone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>-->
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $row) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><img src="/uploads/images/<?= ($row['photo']); ?>" class="card-img" style="width:90px" alt="..."></td>

                            <td><?= $row['nama_mahasiswa']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['jk']; ?></td>
                            <td><?= $row['no_hp']; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal-<?= $row['id_mahasiswa'] ?>" data-whatever=""><i class="fa fa-eye"></i></button>
                                    <div class="modal fade-lg" id="exampleModal-<?= $row['id_mahasiswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h5 class="modal-title" id="exampleModalLabel">Biodata <?= $row['nama_mahasiswa']; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="<?= base_url('/super_admin/pegawai/update/') ?>" method="post" enctype="multipart/form-data">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="id" value="<?= $row['id_mahasiswa'] ?>">
                                                    <div class="modal-body">
                                                        <h5 class="font-weight-bold ">Biodata Pribadi</h5>

                                                        <div class="col-md-3">
                                                            <div class="mb-3">
                                                                <img src="/uploads/images/<?= ($row['photo']); ?>" class="card-img rounded float-right">
                                                                <input type="file" class="form-control" id="image" name="image" required>
                                                            </div>
                                                        </div>



                                                        <div class="row ">
                                                            <div class="col-4 col-sm-6">
                                                                <label for="message-text" class="form-label">Nama Lengkap</label>
                                                                <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" value="<?= $row['nama_mahasiswa'] ?>" required>
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                <div class="mb-2">
                                                                    <label for="email_mahasiswa" class="form-label">Email</label>
                                                                    <input type="text" class="form-control" name="email_mahasiswa" id="email_mahasiswa" value="<?= $row['email_mahasiswa'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row ">
                                                            <div class="col-12">
                                                                <div class="mb-2">
                                                                    <label for="alamat" class="form-label">Alamat</label>
                                                                    <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="<?= $row['alamat'] ?>" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-4 col-sm-6">
                                                                <label for="no_hp" class="form-label">No Handphone</label>
                                                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $row['no_hp'] ?>" required>
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                                                    <select class="form-control" name="jk" id="jk">
                                                                        <option hidden value="" required><?= $row['jk'] ?></option>
                                                                        <option>--Jenis Kelamin--</option>
                                                                        <option value="perempuan">Perempuan</option>
                                                                        <option value="laki-laki">Laki-Laki</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="font-weight-bold ">Pengalaman Perusahaan</h5>
                                                            </div>
                                                        </div>


                                                        <div class="row ">
                                                            <div class="col-4 col-sm-6">
                                                                <label for="company_name" class="form-label">Nama Perusahaan</label>
                                                                <input type="text" class="form-control" name="company_name" id="company_name" value="<?= $row['company_name'] ?>" required>
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                <div class="mb-2">
                                                                    <label for="years_company" class="form-label">Tahun</label>
                                                                    <input type="text" class="form-control" name="years_company" id="years_company" value="<?= $row['years_company'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-2">
                                                                    <label for="jobdesk" class="form-label">Jenis Pekerjaan</label>
                                                                    <input type="text" class="form-control" name="jobdesk" id="jobdesk" value="<?= $row['jobdesk'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-2">
                                                                    <label for="deskripsi_company" class="form-label">Deskripsi Pekerjaan</label>
                                                                    <textarea type="text" class="form-control" name="deskripsi_company" id="deskripsi_company" placeholder="<?= $row['deskripsi_company'] ?>" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="font-weight-bold ">Professional Skill</h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-2">
                                                                    <label for="skill_deskripsi" class="form-label">Deskripsi Kemampuan Skill</label>
                                                                    <textarea type="text" class="form-control" name="skill_deskripsi" id="skill_deskripsi" placeholder="<?= $row['skill_deskripsi'] ?>" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="mb-2">
                                                                    <input type="text" class="form-control" name="master_skill" id="master_skill" value="<?= $row['master_skill'] ?>" required>
                                                                </div>
                                                            </div>


                                                            <div class="col-4 col-sm-3">
                                                                <div class="mb-2">
                                                                    <input type="text" class="form-control" name="cabangskill" id="cabangskill" value="<?= $row['cabangskill'] ?>" required>
                                                                </div>
                                                            </div>


                                                            <div class="col-4 col-sm-3">
                                                                <div class="mb-2">
                                                                    <input type="text" class="form-control" name="masterduaskill" id="masterduaskill" value="<?= $row['masterduaskill'] ?>" required>
                                                                </div>
                                                            </div>


                                                            <div class="col-4 col-sm-3">
                                                                <div class="mb-2">
                                                                    <input type="text" class="form-control" name="cabangduaskill" id="cabangduaskill" value="<?= $row['cabangduaskill'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="font-weight-bold ">Pendidikan</h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4 col-sm-6">
                                                                <div class="mb-2">
                                                                    <label for="education_name" class="form-label">Nama Instansi</label>
                                                                    <input type="text" class="form-control" name="education_name" id="education_name" value="<?= $row['education_name'] ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                <div class="mb-2">
                                                                    <label for="years_edu" class="form-label">Tahun</label>
                                                                    <input type="text" class="form-control" name="years_edu" id="years_edu" value="<?= $row['years_edu'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-2">
                                                                    <label for="jurusan" class="form-label">Jurusan</label>
                                                                    <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $row['jurusan'] ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-2">
                                                                    <label for="deskripsi_jurusan" class="form-label">Deskripsi Pendidikan</label>
                                                                    <textarea type="text" class="form-control" name="deskripsi_jurusan" id="deskripsi_jurusan" placeholder="<?= $row['deskripsi_jurusan'] ?>" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>




















                                    <form action="<?= base_url('/super_admin/pegawai/delete/') ?>" method="post">
                                        <?= csrf_field(); ?>

                                        <input type="hidden" name="id_mahasiswa" value="<?= $row['id_mahasiswa'] ?>">
                                        <button class="btn btn-danger " data-toggle="tooltip" title="Hapus" onclick="return confirm('Are you sure ?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>



                            </td>
                            <td>
                                <form action="<?= base_url('/super_admin/pegawai/export_pdf/') ?>" method="post">
                                    <?= csrf_field(); ?>

                                    <input type="hidden" name="id_mahasiswa" value="<?= $row['id_mahasiswa'] ?>">
                                    <button class="btn btn-info">
                                        <i class="fas fa-file"></i>
                                    </button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </main>
    </div>

</div>

<?= $this->endSection(); ?>