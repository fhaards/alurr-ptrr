<div class="table-header">
    <img src="assets/images/kop-lurr.jpg"/>
	<p align="center">
		<span class="text-header"><b><u>LAPORAN HASIL UJI</u></b></span><br>
		<span><i>( Report of Analytical Result )</i></span><br>
		<span class="textIsBold"> No. <?php echo $nolap; ?></span>
	</p>
    <br><br>
	<table  border="0">
        	<tr>
        		<td width="260px">Pemilik Sampel Uji <i>(Source of Sample)</i></td>
                <td width="2px"> : </td> 
        		<td> <?php echo $pemilik; ?> </td>
        	</tr>
            <tr>
        		<td width="260px">Jenis Sampel Uji <i>(Type of Sample)</i></td>
                <td width="2px"> : </td>
        		<td> <?php echo $nm_bahan; ?></td>
        	</tr>
            <tr>
        		<td width="260px">Tanggal Pengambilan Sampel <i>(Date of Sampling)</i></td>
                <td width="2px"> : </td>
        		<td> <?php echo $tgl_pn_s; ?></td>
        	</tr>
            <tr>
        		<td width="260px">Tanggal Analisis <i>(Date of Analysis)</i></td>
                <td width="2px"> : </td>
        		<td> <?php echo $tgl_an_s; ?></td>
        	</tr>
            <tr>
        		<td width="260px">Jumlah Sampel Uji <i>(Amount of Sample)</i></td>
                <td width="2px"> : </td>
        		<td> <?php echo $jumlah_smpl ?></td>
        	</tr>
            <tr>
        		<td width="260px">Uraian Sampel Uji <i>(Description of Sample)</i></td>
                <td width="2px"> : </td>
        		<td> <?php echo $nm_bahan; ?> &nbsp; No. Batch &nbsp; <?php echo $no_batch;?> / <?php echo $no_batchkf;?></td>
        	</tr>
            <tr>
        		<td width="260px">Kondisi Lingkungan <i>(Environment Condition)</i></td>
                <td width="2px"> : </td>
        		<td> <?php echo $k_ling; ?></td>
        	</tr>
        	<tr>
        		<td width="260px">Hasil Analisis <i>(Result of Analysis)</i></td>
                <td width="2px"> : </td>
                <td></td>
        	</tr>
    </table>
</div>