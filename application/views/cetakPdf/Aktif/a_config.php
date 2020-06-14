<?php 
    if($satuanPr=="P_mCi"){
        $N_SatuanPrs=1;
        $S_Satuan="mCi";
    }
    else if($satuanPr=="P_mBq"){
        $N_SatuanPrs=37;
        $S_Satuan="MBq";
    }
    else if($satuanPr=="P_GBq"){
        $N_SatuanPrs=0.0370;
        $S_Satuan="GBq";
    }
    else{

    }

    //CONFIGURASI
        $nolap=$Cpdf['no_lap'];
        $pemilik=$Cpdf['pemilik'];

        $jenis_smpl=$Cpdf['jenis_smpl'];
        $konsentrasi_radioaktif_bhn=$Cpdf['konsentrasi_radioaktif_bhn'];

        $jumlah_smpl=$Cpdf['jumlah_smpl'];
        $no_batch=$Cpdf['no_batch'];
        $no_batch_kf=$Cpdf['no_batch_kf'];
        $fraksi=$Cpdf['fraksi'];
        $k_ling=$Cpdf['k_ling'];
        $volume=$Cpdf['volume'];

        $derajat_keasaman_bhn=$Cpdf['derajat_keasaman_bhn'];
        $der_keas=$Cpdf['der_keas'];
        $kem_rdnu=$Cpdf['kem_rdnu'];
        $kem_rdkm=$Cpdf['kem_rdkm'];
        $kejernihan=$Cpdf['kejernihan'];
        $pengguna=$Cpdf['pengguna'];
        $kem_rdnu_bhn=$Cpdf['kem_rdnu_bhn'];
        $kem_rdkm_bhn=$Cpdf['kem_rdkm_bhn'];
        $nosop=$Cpdf['nosop_bhn'];
        if(empty($nosop)){
            $nosop_bhn="SOP Belum Disertakan";
        }
        else{
            $nosop_bhn=$nosop;
        }

        $tgl_an=$Cpdf['tgl_an'];
        $tgl_pn=$Cpdf['tgl_pn'];
        $tgl_peng=$Cpdf['tgl_peng'];
        $tgl_akt_kal=$Cpdf['tgl_akt_kal'];

        $tgl_pn_s=date('d-F-Y', strtotime($Cpdf['tgl_pn']));
        $tgl_an_s=date('d-F-Y', strtotime($Cpdf['tgl_an']));
        $tgl_peng_f=date('d-M-Y   H:i', strtotime($Cpdf['tgl_peng']));
        $tgl_kal_f=date('d-M-Y   H:i', strtotime($Cpdf['tgl_akt_kal']));

        /*/////////////// KETIDAKPASTIAN */
        $ktdk_rdnu=$Cpdf['ktdk_k_rdnu'];
        $ktdk_rdkm=$Cpdf['ktdk_k_rdkm'];
        $ktdk_der=$Cpdf['ktdk_der'];
        $ktdk_akt=$Cpdf['ktdk_akt'];

        $k_rdks=$Cpdf['k_rdk'];
        $akt_awals=$Cpdf['akt_awal'];
        $akt_kals=$Cpdf['akt_kal'];
        $t_akts=$Cpdf['t_akt']; 

        $k_rdkss=$k_rdks*$N_SatuanPrs;
        $akt_awalss=$akt_awals*$N_SatuanPrs;
        $akt_kalss=$akt_kals*$N_SatuanPrs;
        $t_aktss=$t_akts*$N_SatuanPrs;

        $k_rdk    = number_format($k_rdkss,2,",","");
        $akt_awal = number_format($akt_awalss,2,",","");
        $akt_kal  = number_format($akt_kalss,2,",","");
        $t_akt    = number_format($t_aktss,2,",","");
?>