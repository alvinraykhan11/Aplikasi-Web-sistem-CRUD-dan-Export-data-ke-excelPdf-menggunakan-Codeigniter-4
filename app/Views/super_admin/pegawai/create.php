<?= $this->extend("super_admin/index") ?>

<?= $this->section("title") ?>
Create - Bank Sampah
<?= $this->endSection(); ?>

<?= $this->section("content") ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Create Data CV</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Data CV</h6>
    </div>
    <div class="card-body">
    <h5 class="font-weight-bold " >Biodata Pribadi</h5>
    <form class="row g-3" action="<?= base_url('super_admin/pegawai/store') ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
            <!-- Profile content row-->
    <div class="col-md-6">
  <div class="mb-2">
    <label for="nama_mahasiswa" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" required="required" >
  </div>
  </div>

  <div class="col-md-6">
  <div class="mb-2">
    <label for="email_mahasiswa" class="form-label">Email</label>
    <input type="text" class="form-control" name="email_mahasiswa" id="email_mahasiswa"  required="required">
  </div>
  </div>

  <div class="col-12">
  <div class="mb-2">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="1234 Main St" required="required" ></textarea>
  </div>
</div>
  <div class="col-md-4">
  <div class="mb-2">
    <label for="no_hp" class="form-label">No Handphone</label>
    <input type="text" class="form-control" name="no_hp" id="no_hp"  required="required">
  </div>
  </div>
<div class="col-md-4">
<label for="photo" class="form-label">Photo</label>
<div class="col-sm-12 form-control">
<div class="mb-2">
<input type="file"  value="" id="image" name="image"  required="required">
</div>
 </div>
  </div>
  <div class="col-md-4">
  <div class="mb-2">
    <label for="jk" class="form-label">Jenis Kelamin</label>
    <select class="form-control" name="jk" id="jk" required>
                                <option hidden>-- Select Type --</option>
                                <option value="perempuan">Perempuan</option>
                                <option value="laki-laki">Laki-Laki</option>

 </select>
  </div>
  </div>

 <div class="col-md-12">
 <h5 class="font-weight-bold " >Pengalaman Perusahaan</h5>

 </div>

 <div class="col-md-6">
  <div class="mb-2">
    <label for="company_name" class="form-label">Nama Perusahaan</label>
    <input type="text" class="form-control" name="company_name" id="company_name" required="required">
  </div>
  </div>
  <div class="col-md-6">
  <div class="mb-2">
    <label for="years_company" class="form-label">Tahun</label>
    <input type="text" class="form-control" name="years_company" id="years_company" required="required">
  </div>
  </div>
  <div class="col-md-12">
  <div class="mb-2">
    <label for="jobdesk" class="form-label">Jenis Pekerjaan</label>
    <input type="text" class="form-control" name="jobdesk" id="jobdesk" required="required">
  </div>
  </div>
  <div class="col-12">
  <div class="mb-2">
    <label for="deskripsi_company" class="form-label">Deskripsi Pekerjaan</label>
    <textarea type="text" class="form-control" name="deskripsi_company" id="deskripsi_company" required="required"></textarea>
  </div>
</div>
<div class="col-md-12">
 <h5 class="font-weight-bold " >Professional Skill</h5>

 </div>
 <div class="col-md-12">
 <div class="mb-2">
    <label for="skill_deskripsi" class="form-label">Deskripsi Kemampuan Skill</label>
    <textarea type="text" class="form-control" name="skill_deskripsi" id="skill_deskripsi" required="required"></textarea>
  </div>
</div>
 <div class="col-md-3">
  <div class="mb-2">
    <input type="text" class="form-control" name="master_skill" id="master_skill" required="required">
  </div>
  </div>
  <div class="col-md-3">
  <div class="mb-2">
    <input type="text" class="form-control" name="cabangskill" id="cabangskill" required="required">
  </div>
  </div>
  <div class="col-md-3">
  <div class="mb-2">
    <input type="text" class="form-control" name="masterduaskill" id="masterduaskill" required="required">
  </div>
  </div>
  <div class="col-md-3">
  <div class="mb-2">
  <input type="text" class="form-control" name="cabangduaskill" id="cabangduaskill" required="required">
  </div>
</div>

<div class="col-md-12">
 <h5 class="font-weight-bold " >Pendidikan</h5>

 </div>

 <div class="col-md-6">
  <div class="mb-2">
    <label for="education_name" class="form-label">Nama Instansi</label>
    <input type="text" class="form-control" name="education_name" id="education_name" required="required">
  </div>
  </div>
  <div class="col-md-6">
  <div class="mb-2">
    <label for="years_edu" class="form-label">Tahun</label>
    <input type="text" class="form-control" name="years_edu" id="years_edu" required="required">
  </div>
  </div>
  <div class="col-md-12">
  <div class="mb-2">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" name="jurusan" id="jurusan" required="required">
  </div>
  </div>
  <div class="col-12">
  <div class="mb-2">
    <label for="deskripsi_jurusan" class="form-label">Deskripsi Pendidikan</label>
    <textarea type="text" class="form-control" name="deskripsi_jurusan" id="deskripsi_jurusan" required="required"></textarea>
  </div>
  
</div>
<div class="modal-footer">
            <a href="/super_admin/mahasiswa/"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
 </div>
</div>

<?= $this->endSection(); ?>