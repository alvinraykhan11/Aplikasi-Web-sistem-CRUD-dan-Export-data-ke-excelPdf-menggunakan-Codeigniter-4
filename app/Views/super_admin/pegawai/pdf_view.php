<!DOCTYPE html>
<html>

<head>
	<title>Cetak - Laporan Siswa</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/printer.css'); ?>">
</head>

<body>

	<table width="100%">
		<tr>
			<td width="100px" align="left"><img src="" height="100px"></td>
			<td valign="top">
				<h3 align="center" style="margin-bottom:8px ">
					Hello
				</h3>
				<center>Jakarta</center>
			</td>
			<td width="100px" height="100px"></td>
	
		</tr>
	</table>
	<hr>
	<center>
		<h3 align="center">Biodata <?= $mahasiswa['nama_mahasiswa']; ?></h3>
	</center>


	<table width="100%">

		<tr>
			<td align="left" colspan="5">

			</td>

			<td align="right" rowspan="5" margin="90 px" style="line-height: 2em;">
				<img src="./gambar/gambar" id="target" style="width: 154px; float:right; border:5px double black; height: 205px; ">
			</td>

		</tr>


		<tr>


			<td width="20%">No.id</td>
			<td width="3%">:</td>
			<td width="50%" style="line-height: 1em;">rekening</td>
		</tr>
		<tr>

			<td>No Rekening</td>
			<td>:</td>
			<td style="line-height: 1em;">rekening</td>
		</tr>
		<tr>

			<td>Nama Siswa </td>
			<td>:</td>
			<td style="line-height: 1em;">nama siswa</td>
		</tr>

		<tr>

			<td>Tempat Lahir</td>
			<td>:</td>
			<td style="line-height: 1em;">Tempat</td>
		</tr>
		<tr>

			<td>Tanggal Lahir</td>
			<td>:</td>
			<td style="line-height: 2em;">Tanggal</td>
		</tr>
		<tr>

			<td>Jenis Kelamin</td>
			<td>:</td>
			<td style="line-height: 3em;">Jenis Kelamin</td>
		</tr>

		<tr>

			<td>Kelas</td>
			<td>:</td>
			<td style="line-height: 3em;">Kelas</td>
		</tr>
		<tr>

			<td>Agama</td>
			<td>:</td>
			<td style="line-height: 3em;">Agama</td>
		</tr>
		<tr>

			<td>No.Hp</td>
			<td>:</td>
			<td style="line-height: 3em;">No hp</td>
		</tr>
		<tr>

			<td>Alamat</td>
			<td>:</td>
			<td width="50%" style="line-height: 3em;">Alamat</td>
		</tr>
		<tr>

			<td>Nama Ibu </td>
			<td>:</td>
			<td style="line-height: 3em;">Ibu</td>
		</tr>
		<tr>

			<td>Nama Ayah</td>
			<td>:</td>
			<td style="line-height: 3em;">Ayah</td>
		</tr>


		<tr>

			<td>Pekerjaan Orang Tua </td>
			<td>:</td>
			<td style="line-height: 3em;">Ortu</td>
		</tr>
		<tr>

			<td>Asal Sekolah</td>
			<td>:</td>
			<td style="line-height: 3em;">sekolah</td>
		</tr>
		<tr>

			<td>Pilihan Program Belajar</td>
			<td>:</td>
			<td style="line-height: 3em;">belajar</td>
		</tr>



	</table>

	<br />
</body>
<script>
	window.print()
</script>

</html>