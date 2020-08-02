<?php 
        define('CHARSET', 'ISO-8859-1');
        define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);
        setlocale(LC_TIME, 'IND');
    // works
    //CONFIGURASI
        //PRODUK Non-Aktif
        /*

        */
        $nm_bahan=$Cpdf['nm_bahan_na'];
        $ditambahi=$Cpdf['ditambahi'];
        $bentuk_fisik=$Cpdf['bentuk_fisik'];
        $sb_endotoksin=$Cpdf['endotoksin'];
        $der_keas_na=$Cpdf['der_keas_na'];

        $kem_rdkm_na=$Cpdf['kem_rdkm_na'];
        $steril=$Cpdf['sterilitas'];
        $pirogenitas=$Cpdf['pirogenitas'];
        $status_na=$Cpdf['status_na'];

        //TANGGAL
        // $tgl_pn_s=date('d-F-Y', strtotime($Cpdf['tgl_pn_na']));
        // $tgl_an_s=date('d-F-Y', strtotime($Cpdf['tgl_an_na']));
        $tgl_pn_s=strftime("%d-%B-%Y", strtotime($Cpdf['tgl_pn_na']));
        $tgl_an_s=strftime("%d-%B-%Y", strtotime($Cpdf['tgl_an_na']));

        //LAPORAN
        $nolap=$Cpdf['no_lap_na'];
        $pemilik=$Cpdf['pemilik_na'];
        $jumlah_smpl=$Cpdf['jumlah_smpl_na'];
        $no_batch=$Cpdf['no_batch_na'];
        $no_batchkf=$Cpdf['no_batchkf_na'];
        $k_ling=$Cpdf['k_ling_na'];


        $sterilitas_lp=$Cpdf['sterilitas_lp'];
        $pirogenitas_lp=$Cpdf['pirogenitas_lp'];
        $bentuk_fisik_lp=$Cpdf['bentuk_fisik_lp'];
        $der_keas_na_lp=$Cpdf['der_keas_na_lp'];
        $kem_rdkm_na_lp=$Cpdf['kem_rdkm_na_lp'];
        $ktdk_bntg_der=$Cpdf['ktdk_bntg_der'];
        $ktdk_bntg_rdkm=$Cpdf['ktdk_bntg_rdkm'];
        /*
      
        

        $sb_pemerian_lp=$Cpdf['sb_pemerian_lp'];
        $sb_steril_lp=$Cpdf['sb_steril_lp'];
        $sb_endotoksin_lp=$Cpdf['sb_endotoksin_lp'];
        $st_pemerian_lp=$Cpdf['st_pemerian_lp'];
        $der_keas_na_lp=$Cpdf['der_keas_na_lp'];
        $kem_rdkm_na_lp=$Cpdf['kem_rdkm_na_lp'];
        $ktdk_bntg_na_lp=$Cpdf['ktdk_bntg_na_lp'];
        */

?>