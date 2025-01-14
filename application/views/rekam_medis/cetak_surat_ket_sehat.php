<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Surat Keterangan Sehat</title>

	<!-- Normalize or reset CSS with your favorite library -->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">-->

	<!-- Load paper.css for happy printing -->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">-->

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/paper-css/paper.css">

	<style>
		.header {
			display: flex;
		}

		.header .right {
			width: 100%;
		}
	</style>


	<!-- Set page size here: A5, A4 or A3 -->
	<!-- Set also "landscape" if you need -->
	<style>
		@page {
			size: A4
		}
	</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4" onload="window.print()">

	<!-- Each sheet element should have the class "sheet" -->
	<!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
	<section class="sheet padding-10mm" style="padding-top:5mm">

		<!-- Write HTML just like a web page -->
		<!--<article>This is an A5 document.</article>-->
		<div class="header">
			<div class="left" style="width: 30% !important; text-align:end;">
				<div class="img">
					<img src="<?php echo base_url() . "assets/images/" . getInfoRS('logo') ?>" alt="logo" width="100" style="border-radius:20px" />
				</div>
			</div>
			<div class="right" style="width: 70% !important; padding-left: 0px !important;">
				<div class="address" style="margin-left:15px">
					<center>
						<h2 style="font-family:times-new-roman;margin-top:0;margin-bottom:0px"><?= getInfoRS('nama_rumah_sakit') ?></h2>
						<p style="margin-top:5px;margin-bottom:0px"><?= getInfoRS('alamat') ?></p>
						<p style="margin-top:5px;margin-bottom:0px">Email :again.medical.center@gmail.com</p>
						<p style="margin-top:5px;margin-bottom:0px">Telp : 031-5952220 / WA : <?= getInfoRS('no_telpon') ?></p>
					</center>
				</div>
			</div>
		</div>
		<hr />
		<div style="display:inline-block;position:relative;left:50%;transform:translateX(-50%);-moz-transform:translateX(-50%);-webkit-transform:translateX(-50%)">
			<h3 style="margin-bottom : 0px;margin-top:5"><span style="text-decoration: underline;">SURAT KETERANGAN SEHAT</span></h3>
			<p style="margin-top : 5px;margin-bottom:0;text-align:center;letter-spacing:2px"><b>No. <?= $nomor ?></b></p>
		</div>
		<p style="text-indent: 30px;"> Yang bertanda tangan dibawah ini, dokter jaga pada <?= getInfoRS('nama_rumah_sakit') ?> dengan sebenarnya bahwa</p>
		<table style="margin-right : 30px;margin-left : 30px">
			<tbody>
				<tr>
					<td width="25%">Nama</td>
					<td width="2%">:</td>
					<td colspan="5"><?php echo $nama; ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td colspan="5"><?php echo $jenis_kelamin; ?></td>
				</tr>
				<tr>
					<td>Umur</td>
					<td>:</td>
					<td colspan="5"><?php echo $umur; ?> Tahun</td>
				</tr>
				<tr>
					<td>Pekerjaan</td>
					<td>:</td>
					<td colspan="5"><?php echo $pekerjaan; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td colspan="5"><?php echo $alamat; ?></td>
				</tr>
			</tbody>
		</table>

		<p style="margin-bottom:5">Hasil pemeriksaan fisik pada tanggal <?= $tgl_cetak ?> di Klinik Pratama adalah sebagai berikut:</p>
		<table style="margin-right : 30px;margin-left : 30px">
			<tbody>
				<tr>
					<td>Tinggi Badan</td>
					<td>:</td>
					<td><?php echo $tinggi_badan; ?> cm</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Berat Badan</td>
					<td>:</td>
					<td colspan="5"><?php echo $berat_badan; ?> kg</td>
				</tr>
				<tr>
					<td>Tekanan Darah</td>
					<td>:</td>
					<td colspan="5"><?php echo $tekanan_darah; ?></td>
				</tr>
				<tr>
					<td>Golongan Darah</td>
					<td>:</td>
					<td><?php echo $golongan_darah; ?></td>
				</tr>
				<tr>
					<td>Buta Warna</td>
					<td>:</td>
					<td><?php echo $buta_warna; ?></td>
				</tr>
			</tbody>
		</table>

		<p style="text-indent: 30px;margin-top:20px">Telah kami periksa dan menyatakan bahwa klien “SEHAT JASMANI DAN ROHANI”
			Surat Keterangan Sehat ini dibuat untuk kepentingan <?= $keperluan ?></p>

		<p style="text-indent: 30px;margin-top:0">Demikian surat keterangan sehat ini dibuat untuk dipergunakan sebagaimana mestinya.</p>
		<p style="text-align: right;margin-bottom:5"><?= getInfoRS('kabupaten') ?>, <?php echo date('d-m-Y'); ?></p>
		<p style="text-align: right; margin-top:80px;margin-bottom:70">(……………………)
			<br>
			SIP:
		</p>
		<!-- <p style="text-align: right;"><u> <?php echo $nama_dokter; ?> </u></p> -->
	</section>

</body>

</html>