<div class="table-header">
    <img src="assets/images/kop-lurr.jpg"/>
<!-- 	<ul>
        <li style="text-align:right;">FM 001 SOP 012.002/IR 00 04/ TRR.6</li>
        <li style="text-align:right;"><?php echo $pengguna;?></li>
    </ul>  -->
	<p class="textIsCenter">
		<span class="text-header"><b><u>LAPORAN HASIL UJI</u></b></span><br>
		<span><i>( Report of Analytical Result )</i></span><br>
		<span class="textIsBold"> Nomor : <?php echo $nolap; ?> </span>
	</p>
	<table  border="0">
        	<tr>
        		<td width="260px">Pemilik Sampel Uji <i>(Source of Sample)</i></td>
                <td width="2px"> : </td>
        		<td><?php echo $pemilik; ?> </td>
        	</tr>
            <tr>
        		<td width="260px">Jenis Sampel Uji <i>(Type of Sample)</i></td>
                <td width="2px"> : </td>
        		<td><?php echo $jenis_smpl; ?></td>
        	</tr>
            <tr>
        		<td width="260px">Tanggal Pengambilan Sampel <i>(Date of Sampling)</i></td>
                <td width="2px"> : </td>
        		<td><?php echo $tgl_pn_s; ?></td>
        	</tr>
            <tr>
        		<td width="260px">Tanggal Analisis <i>(Date of Analysis)</i></td>
                <td width="2px"> : </td>
        		<td><?php echo $tgl_an_s; ?></td>
        	</tr>
            <tr>
        		<td width="260px">Jumlah Sampel Uji <i>(Amount of Sample)</i></td>
                <td width="2px"> : </td>
        		<td><?php echo $jumlah_smpl ?></td>
        	</tr>
            <tr>
        		<td width="260px">Uraian Sampel Uji <i>(Description of Sample)</i></td>
                <td width="2px"> : </td>
        		<td><?php echo $jenis_smpl; ?> No. Batch <?php echo $no_batch;?>
                / 
                <?php 
                    if($jenisPr=="P_Sb"){
                        if(!empty($no_batch_kf)){
                        echo $no_batch_kf;
                        }
                        else{
                            echo "-";
                        }
                    }
                    else if($jenisPr=="P_Lb"){
                        echo $fraksi; 
                    }
                ?>
        	       
                </td>
        	</tr>
            <tr>
        		<td width="260px">Kondisi Lingkungan <i>(Environment Condition)</i></td>
                <td width="2px"> : </td>
        		<td><?php echo $k_ling; ?></td>
        	</tr>
        	<tr>
        		<td width="260px">Hasil Analisis <i>(Result of Analysis)</i></td>
                <td width="2px"> : </td>
                <td></td>
        	</tr>
    </table>
</div>