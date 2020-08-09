
<table border="1" class="table-content">
	<tr>
        <th>No</th>
        <th>
           JENIS PENGUJIAN  <br>
           <i>(Paremeters)</i> 
        </th>
        <th> 
           STANDART <br> 
           KEBERTERIMAAN <br>
           <i>(Range)</i>
        </th>
        <th >
           METODA ANALISIS  <br><i>(Method of Analysis)</i>
        </th>
        <th colspan="8"> 
            HASIL ANALISIS <br> 
            <i>(Result of Anlysis)</i>
        </th>
  	</tr>
	<tr>
		<td class="textIsCenter">1</td>
		<td class="textIsCenter">
			<span class="textIsBold">KEJERNIHAN *)</span> <br><i>(Clarity)</i> 
		</td>
		<td class="textIsCenter"> 
			<p align="center"><?php echo $kejernihan;?> 
		</td>
		<td class="textIsCenter">
			Visual
		</td>
		<td  colspan="8"> 
			<?php echo $kejernihan;?>
		</td>
	</tr>

    <tr >
        <td class="textIsCenter">2</td>
        <td class="textIsCenter">
            <span class="textIsBold">DERAJAT <br> KEASAMAN </span><br><i>(pH)</i> 
        </td>
        <td  align="center"> 
            <p align="center"><?php echo $derajat_keasaman_bhn;?> 
        </td>
        <td  class="textIsCenter">
            Indikator pH <br>
            <span class="sop"><?php echo $nosop_bhn; ?></span>
            
        </td>
        <td  colspan="8"> 
            <?php echo $der_keas;?> <br>
            Ketidakpastian pengukuran  <?php echo $ktdk_der;?>
        </td>
    </tr>

    <tr>
        <td class="textIsCenter">3</td>
        <td class="textIsCenter">
            <span class="textIsBold">KONSENTRASI <br> RADIOAKTIF </span> <br>
            <i>(Radioactive <br> Concentration)</i>
             
        </td>
        <td  align="center"> 
            <p align="center"><?php echo $konsentrasi_radioaktif_bhn;?>
        </td>
        <td class="textIsCenter">
            Dose Calibrator <br>
            <span class="sop"><?php echo $nosop_bhn; ?></span>
            
        </td>
        <td  colspan="8" >
        	<?php 
				if($jenisPr=="P_Sb"){
				?>

                <u>Aktifitas saat pengujian</u> <br>
                <?php echo $akt_awal;?>
                <span class="satuan"><?php echo $S_Satuan;?>/ml</span>
                &nbsp; Tgl. <?php echo $tgl_peng_f2;?>  <br>

                <u>Aktifitas saat kalibrasi</u>  <br>
                <?php echo $akt_kal;?> 
                <span class="satuan"><?php echo $S_Satuan;?>/ml </span>
                &nbsp; Tgl. <?php echo $tgl_kal_f2;?>  <br>

                <u>Aktifitas yang dikirim</u>  <br>
                <?php echo $t_akt;?> 
                <span class="satuan"><?php echo $S_Satuan;?></span> / <?php echo $vol_baru;?><span class="satuan"> ml </span>
                Tgl. <?php echo $tgl_kal_f2;?>  <br>
                Ketidakpastian pengukuran <?php echo $ktdk_akt;?> <br>


                <?php
				}
			    else if($jenisPr=="P_Lb"){
			    ?>
			    	<u>Aktifitas saat pengujian</u> <br>
		        	<?php echo $t_akt;?> <?php echo $S_Satuan;?> 
		        	/ <?php echo $vol_baru;?> ml &nbsp; Tgl. <?php echo $tgl_kal_f2;?>
		        	<br>
		        	Ketidakpastian pengukuran <?php echo $ktdk_akt;?>   
			    <?php
			    }
			?>
        	     
        </td>
    </tr>

    <tr>
        <td class="textIsCenter">4</td>
        <td class="textIsCenter">
            <span class="textIsBold">KEMURNIAN <br> RADIONUKLIDA </span> <br>
            <i>(Radionuclide <br> Purity)</i>
             
        </td>
        <td  align="center"> 
            <p align="center"><?php echo $kem_rdnu_bhn;?> 
        </td>
        <td class="textIsCenter">
            Spektrometri Gamma <br>
            <span class="sop"><?php echo $nosop_bhn; ?></span>
            
        </td>
        <td  colspan="8"> 
            <?php echo $kem_rdnu;?> <br>
            Ketidakpastian pengukuran  <?php echo $ktdk_rdnu;?>
        </td>
    </tr>

	<tr>
		<td class="textIsCenter">5</td>
		<td class="textIsCenter">
			<span class="textIsBold">KEMURNIAN <br> RADIOKIMIA</span> <br>
            <i>(Radiochemical <br> Purity)</i>
             
		</td>
		<td  align="center"> 
			<p align="center"><?php echo $kem_rdkm_bhn;?>  
		</td>
		<td class="textIsCenter">
            Kromatografi Lapis Tipis <br>
            <span class="sop"><?php echo $nosop_bhn; ?></span>
            
		</td>
		<td colspan="8"> 
           	<?php echo $kem_rdkm;?> <br>
		 	Ketidakpastian pengukuran  <?php echo $ktdk_rdkm;?>
		</td>
	</tr>
</table>