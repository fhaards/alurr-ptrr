  <?php 
  if($jenislap=="MDP"){
    $nosop="(SOP<br>016.003.005/IR 00<br>04/TRR 6)";
  }
  else if($jenislap=="MIBI"){
    $nosop="(SOP<br>016.003.004/IR 00<br>04/TRR 6)";
  }
  else if($jenislap=="DTPA"){
    $nosop="(SOP<br>016.003.006/IR 00<br>04/TRR 6)";
  }
  else if($jenislap=="Ethambutol"){
    $nosop="(SOP<br>016.003.014/IR 00<br>04/TRR 6)";
  }
  else if($jenislap=="EDTMP"){
    $nosop="(SOP<br>016.003.012/IR 00<br>04/TRR 6)";
  }
  else{
    $nosop="";
  }
  ?>

  <tr class="textIsCenter">
    <th colspan="5"> <b> Kit kering Sebelum ditambah dengan larutan <?php echo $ditambahi; ?></b></th>
  </tr>
  <!--////////////BARIS 1///////////////-->
  <tr>
    <td>1</td>
    <td class="textIsCenter"><b>Bentuk Fisik *)</b><br><i>(Appearance)</i></td>
    <td class="textIsCenter"> <?php echo $bentuk_fisik;?> </td>
    <td class="textIsCenter"> 
        <b> Visual </b><br>
    </td>
    <td>&nbsp; <?php echo $bentuk_fisik_lp;?> </td>
  </tr>
  <!--////////////BARIS 2//////////////-->

  <tr class="textIsCenter">
    <th colspan="5"> <b> Kit kering Setelah ditambah dengan larutan <?php echo $ditambahi; ?></b></th>
  </tr>

  <tr>
    <td>2</td>
    <td class="textIsCenter"><b>Derajat <br> Keasaman</b> <br><i>(pH)</i></td>
    <td class="textIsCenter"> <?php echo $der_keas_na;?> </td>
    <td class="textIsCenter"> 
        <b> Indikator pH </b><br>
        <?php echo $nosop; ?>
        <!-- (SOP<br>016.003.004/IR 00<br>04/TRR 6) -->
    </td>
    <td>
      <b> <?php echo $der_keas_na_lp;?> </b><br>
      Ketidakpastian Bentangan  &nbsp; <?php echo $ktdk_bntg_der;?>
    </td>
  </tr>  

  <tr>
    <td>3</td>
    <td class="textIsCenter"><b>Kemurnian <br> Radiokimia </b> <br><i>(Radiochemical<br>Purity)</i></td>
    <td class="textIsCenter">
      <!-- <span class="isSymbolText"><?php echo html_entity_decode($kem_rdkm_na);?></span> -->
      <span class="isSymbolText"><?php echo $kem_rdkm_na;?></span>
    </td>
    <td class="textIsCenter"> 
        <b> Kromatografi<br>Lapis Tipis </b><br>
        <?php echo $nosop; ?>
  
    </td>
    <td >
      <b> <?php echo $kem_rdkm_na_lp;?> </b> <br>
      Ketidakpastian Bentangan &nbsp; <?php echo $ktdk_bntg_rdkm;?>
    </td>
  </tr>

</table>