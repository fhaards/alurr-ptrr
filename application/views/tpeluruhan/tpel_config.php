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
            $N_SatuanPrs=0;
            $S_Satuan='';
        }

        ///
            $idlap=$ffsu['id_lap'];
            $nolap=$ffsu['no_lap'];
            $pemilik=$ffsu['pemilik'];
        //PRODUK
            $nproduk=$ffsu['alias'];
            $waktu=$ffsu['waktu'];
            $satuan=$ffsu['satuan'];

        //LAPORAN
        //General
            $jenis_smpl=$ffsu['jenis_smpl'];
            $konsentrasi_radioaktif_bhn=$ffsu['konsentrasi_radioaktif_bhn'];
            $jumlah_smpl=$ffsu['jumlah_smpl'];
            $no_batch=$ffsu['no_batch'];
            $no_batch_kf=$ffsu['no_batch_kf'];
            $fraksi=$ffsu['fraksi'];
            $k_ling=$ffsu['k_ling'];
            $volume=$ffsu['volume'];
            $derajat_keasaman_bhn=$ffsu['derajat_keasaman_bhn'];
            $der_keas=$ffsu['der_keas'];
            $kem_rdnu=$ffsu['kem_rdnu'];
            $kem_rdkm=$ffsu['kem_rdkm'];
            $kejernihan=$ffsu['kejernihan'];
            $pengguna=$ffsu['pengguna'];
            $kem_rdnu_bhn=$ffsu['kem_rdnu_bhn'];
            $kem_rdkm_bhn=$ffsu['kem_rdkm_bhn'];
            $r_w_pel=$ffsu['r_w_pel'];
            $fdecay=$ffsu['f_decay'];

        //Tanggal
            $tgl_an=$ffsu['tgl_an'];
            $tgl_pn=$ffsu['tgl_pn'];
            $tgl_peng=$ffsu['tgl_peng'];
            $tgl_akt_kal=$ffsu['tgl_akt_kal'];

            $tgl_pn_s=date('d-F-Y', strtotime($ffsu['tgl_pn']));
            $tgl_an_s=date('d-F-Y', strtotime($ffsu['tgl_an']));
            $tgl_peng_f=date('d-M-Y   H:i', strtotime($ffsu['tgl_peng']));
            $tgl_kal_f=date('d/m/Y   H.i', strtotime($ffsu['tgl_akt_kal']));
            $tgl_kal_pel=date('Y-m-d\TH:i', strtotime($tgl_akt_kal));


            $k_rdks=$ffsu['k_rdk'];
            $akt_awals=$ffsu['akt_awal'];
            $akt_kals=$ffsu['akt_kal'];
            $t_akts=$ffsu['t_akt']; 

            $k_rdk    = number_format($k_rdks*$N_SatuanPrs,2,",","");
            $akt_awal = number_format($akt_awals,2,",","");
            $akt_kal  = number_format($akt_kals,2,",","");
            $t_akt    = number_format($k_rdks*$volume*$N_SatuanPrs,2,",","");



        $jml=$jmlData+1;

        //VAR K_RDK
                $cons = $fdecay;
                $hkrdk=$k_rdks*$N_SatuanPrs;
                $valArray[1] = $hkrdk;
        //VAR TGL/JAM
                $getDate  = strtotime("-".$r_w_pel." hour",strtotime($tgl_akt_kal));
                $thisDate = date('Y/m/d H.i',$getDate);
                $LastDate = $thisDate;
                $timespan = $r_w_pel;

                
            for ($i = 2; $i < $jml; $i++) {
                $valArray[$i] = $valArray[$i - 1] * $cons;      
            }

?>      