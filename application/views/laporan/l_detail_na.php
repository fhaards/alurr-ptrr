<?php
$idlap = $ffsu['id_lap_na'];
$tgl_an1 = $ffsu['tgl_an_na'];
$tgl_pn1 = $ffsu['tgl_pn_na'];
$tgl_pn = date('Y-m-d/ H:i', strtotime($tgl_pn1));
$tgl_an = date('Y-m-d/ H:i', strtotime($tgl_an1));
$jenislap = $ffsu['jenis_na_lp'];
?>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="page-header">
					<h1> TABEL DETAIL LAPORAN <span class="text-primary">NON-AKTIF</span>
						<br>
						<small><u> <?php echo $ffsu['no_lap_na']; ?></u></small>
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
		<table class="table table-responsive-sm table-bordered table-detail ">
			<tr>
				<td colspan="5" class="bg bg-light">
					<span class="td_r">
						<a onclick="deleteConfirm('<?php echo site_url('laporan/hapusLaporanNa/' . $idlap) ?>')" href="#!" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>

						<a class="btn btn-primary btn-sm" href="<?php echo site_url('laporan/ubahLaporanNa/' . $idlap); ?>" data-toggle="tooltip" data-replacement="top" title="Ubah Data">
							<i class="fa fa-edit"></i>
						</a>

					</span>
				</td>
			</tr>
			<!-------------------------------------- IDENTITAS ------------------------------------------>

			<tr>
				<th colspan="6" class="bg-primary text-white"> IDENTITAS SAMPEL UJI </th>
			</tr>

			<tr>
				<td> <span class="td_r"> No. Laporan </span> </td>
				<td colspan="4">
					: &nbsp; &nbsp;<?php echo $ffsu['no_lap_na']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Pemilik Sampel Uji </span> </td>
				<td colspan="4">
					: &nbsp; &nbsp;<?php echo $ffsu['pemilik_na']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Jenis Sampel Uji </span> </td>
				<td colspan="4">
					: &nbsp; &nbsp;<?php echo $ffsu['nm_bahan_na']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> No. Batch Produk </span> </td>
				<td colspan="4">
					: &nbsp; &nbsp;<?php echo $ffsu['no_batch_na']; ?>
				</td>
			</tr>

			<tr>
				<td> <span class="td_r"> Jumlah Sampel Uji </span> </td>
				<td>
					: &nbsp; &nbsp;<?php echo $ffsu['jumlah_smpl_na']; ?>
				</td>
				<td><span class="td_r"> Tanggal Penerimaan </span> </td>
				<td>: &nbsp; &nbsp;
					<?php echo $tgl_pn; ?>
				</td>

			</tr>

			<tr>
				<td> <span class="td_r"> Kondisi Lingkungan </span> </td>
				<td>
					: &nbsp; &nbsp;<?php echo $ffsu['k_ling_na']; ?>
				</td>
				<td><span class="td_r"> Tanggal Analisis </span> </td>
				<td>: &nbsp; &nbsp;
					<?php echo $tgl_an; ?>
				</td>
			</tr>

			<tr>
				<th colspan="4" class="bg-info text-white p1">
					HASIL PENGUJIAN/ ANALISIS SAMPEL UJI
				</th>
			</tr>
			<?php
			if ($jenislap == "STERILITAS") {
			?>
				<tr>
					<td colspan="4"><span class="ml-3">Sterilitas : <?php echo $ffsu['sterilitas_lp']; ?></span></td>
				</tr>
			<?php
			} else if ($jenislap == "PIROGENITAS") {
			?>
				<tr>
					<td colspan="4"><span class="ml-3">Pirogenitas : <?php echo $ffsu['pirogenitas_lp']; ?></span></td>
				</tr>
			<?php
			} else if ($jenislap == "MDP" || $jenislap == "DTPA" || $jenislap || "MIBI") {
			?>
				<tr>
					<td colspan="4"><span class="ml-3 font-weight-bold">Kit Kering Sebelum ditambah dengan <?php echo $ffsu['ditambahi']; ?></span></td>
				</tr>
				<tr>
					<td colspan="4"><span class="ml-3">Bentuk Fisik : <?php echo $ffsu['bentuk_fisik_lp']; ?></span></td>
				</tr>
				<tr>
					<td colspan="4"><span class="ml-3 font-weight-bold">Kit Kering Setelah ditambah dengan <?php echo $ffsu['ditambahi']; ?></span></td>
				</tr>
				<tr>
					<td colspan="4"><span class="ml-3">Derajat Keasaman : <?php echo $ffsu['der_keas_na_lp']; ?></span></td>
				</tr>
				<tr>
					<td colspan="4"><span class="ml-3">Kemurnian Radiokimia : <?php echo $ffsu['kem_rdkm_na_lp']; ?></span></td>
				</tr>

			<?php
			} else {
			}
			?>


		</table>

	</div>
</div>