<?php
$idlap = $ffsu['id_lap'];
$tgl_an1 = $ffsu['tgl_an'];
$tgl_pn1 = $ffsu['tgl_pn'];
$tgl_akt_kal1 = $ffsu['tgl_akt_kal'];
$tgl_peng1 = $ffsu['tgl_peng'];
$tgl_pn = date('Y-m-d/ H:i', strtotime($tgl_pn1));
$tgl_an = date('Y-m-d/ H:i', strtotime($tgl_an1));
$tgl_akt_kal = date('Y-m-d/ H:i', strtotime($tgl_akt_kal1));
$tgl_peng = date('Y-m-d/ H:i', strtotime($tgl_peng1));

?>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">

				<div class="page-header">
					<h1> TABEL DETAIL LAPORAN <span class="text-primary">AKTIF</span>
						<br>
						<small><u> <?php echo $ffsu['no_lap']; ?></u></small>
					</h1>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<?= $breadcrumb; ?>
			</div>
		</div>
	</div>
</div>


<div class="card">
	<div class="card-body">
		<table class="table table-responsive-sm table-bordered  table-detail ">
			<tr>
				<td colspan="5" class="bg bg-light">
					<span class="td_r">
						<a onclick="deleteConfirm('<?php echo site_url('laporan/hapusLaporan/' . $idlap) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

						<a class="btn btn-primary btn-sm" href="<?php echo site_url('laporan/ubahLaporan/' . $idlap); ?>" data-toggle="tooltip" data-replacement="top" title="Ubah Data">
							<i class="fa fa-edit"></i>
						</a>

						<a href="<?php echo site_url('Cetakpdfs/pilih/' . $idlap); ?>" class="btn btn-primary btn-sm" target="_blank" data-toggle="tooltip" data-replacement="top" title="Cetak Pdf">
							<i class="fa fa-print"></i> </a>


					</span>
				</td>
			</tr>
			<!-------------------------------------- IDENTITAS ------------------------------------------>

			<tr>
				<th colspan="6" class="bg-primary text-white"> IDENTITAS SAMPEL UJI </tH>
			</tr>

			<tr>
				<td> <span class="td_r"> No. Laporan </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['no_lap']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Pemilik Sampel Uji </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['pemilik']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Jenis Sampel Uji </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['jenis_smpl']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Nama Radioisotop dan Bahan </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['nm_bahan']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> No. Batch Produk </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['no_batch']; ?>
				</td>
				<td> <span class="td_r"> No. Batch <br> Kimia Farma </span></td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['no_batch_kf']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Jumlah Sampel Uji </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['jumlah_smpl']; ?>
				</td>
				<td><span class="td_r"> Tanggal Penerimaan </span> </td>
				<td>&nbsp; &nbsp;
					<?php echo $tgl_pn; ?>
				</td>

			</tr>

			<tr>
				<td> <span class="td_r"> Kondisi Lingkungan </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['k_ling']; ?>
				</td>
				<td><span class="td_r"> Tanggal Analisis </span> </td>
				<td>&nbsp; &nbsp;
					<?php echo $tgl_an; ?>
				</td>
			</tr>

			<!-------------------------------------- HASIL ------------------------------------------>

			<tr>
				<th colspan="6" class="bg-info text-white p1"> HASIL PENGUJIAN/ ANALISIS SAMPEL UJI/ DECAY </tH>
			</tr>

			<tr>
				<td><span class="td_r"> Aktivitas Saat Pengujian </span></td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['akt_awal']; ?>&nbsp; &nbsp; mCi/ ml
				</td>
			</tr>

			<tr>
				<td><span class="td_r"> Aktivitas Saat Kalibrasi </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['akt_kal']; ?>&nbsp; &nbsp; mCi/ ml
				</td>
			</tr>

			<tr>
				<td colspan="3"> <span class="td_r"> Tanggal Kalibrasi </span> </td>
				<td>
					<?php echo $tgl_akt_kal; ?>
				</td>
			</tr>

			<tr>
				<td colspan="3"> <span class="td_r"> Tanggal Pengujian </span> </td>
				<td>
					<?php echo $tgl_peng; ?>
				</td>
			</tr>


			<tr>
				<td> <span class="td_r"> Kons Radioaktivitas </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['k_rdk']; ?>&nbsp; &nbsp; mCi/ ml
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Volume </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['volume']; ?>&nbsp; &nbsp; ml
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Total Radioaktivitas atau <br> Aktivitas Dikirim </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['t_akt']; ?>&nbsp; &nbsp; mCi
				</td>
				<td>
					<span class="td_r"> Ketidakpastian Pengukuran </span>
				</td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['ktdk_akt']; ?>
				</td>
			</tr>

			<tr>
				<td colspan="4"></td>
			</tr>




			<tr>
				<td> <span class="td_r"> Kejernihan </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['kejernihan']; ?>
				</td>
			</tr>


			<tr>
				<td> <span class="td_r"> Derajat Keasaman (pH) </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['der_keas']; ?>
				</td>
				<td> <span class="td_r"> Ketidakpastian Pengukuran </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['ktdk_der']; ?>
				</td>
			</tr>


			<tr>
				<td> <span class="td_r"> Kemurnian Radionukida </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['kem_rdnu']; ?>
				</td>
				<td> <span class="td_r"> Ketidakpastian Pengukuran </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['ktdk_k_rdnu']; ?>
				</td>
			</tr>


			<tr>
				<td> <span class="td_r"> Kemurnian Radiokimia </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['kem_rdkm']; ?>
				</td>
				<td> <span class="td_r"> Ketidakpastian Pengukuran </span> </td>
				<td>
					&nbsp; &nbsp;<?php echo $ffsu['ktdk_k_rdkm']; ?>
				</td>
			</tr>


			<tr>
				<td> <span class="td_r"> Fraksi </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['fraksi']; ?>
				</td>

			</tr>


			<tr>
				<td> <span class="td_r"> Pengguna/Pelanggan </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['pengguna']; ?>
				</td>
			</tr>


			<tr>
				<td> <span class="td_r"> Range Waktu Peluruhan </span> </td>
				<td colspan="4">
					&nbsp; &nbsp;<?php echo $ffsu['r_w_pel']; ?> &nbsp; Jam
				</td>
			</tr>


		</table>
	</div>
</div>