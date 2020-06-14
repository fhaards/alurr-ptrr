<?php 
	$s_Rd='';
	function get_options($select){
		$rCalc=array('Decay Calculation'=>'1','Dose Rate'=>'2','Uranium Calculation'=>'3','MDC/MDA'=>'4');
		$JrCalc='';
		while(list($k,$v)=each($rCalc)){
			if($select==$v){
				$JrCalc.='<option value="'.$v.'" selected>'.$k.'</option>';
			}
			else{
				$JrCalc.='<option value="'.$v.'">'.$k.'</option>';
			}
		}
		return $JrCalc;
	}


	if(isset($_POST['rCalc']))
	{
		$s_Rd = $_POST['rCalc'];
		$s_SRd= $s_Rd;

		if($s_SRd=='1'){
			$ck='views/radpro/Calc_decay.php';
		}
		else if($s_SRd=='2'){
			$ck='views/radpro/Calc_doseRate.php';
		}
		else if($s_SRd=='3'){
			$ck='views/radpro/Calc_U.php';
		}
		else if($s_SRd=='4'){
			$ck='views/radpro/Calc_MDCMDA.php';
		}
		else{
			$ck='views/radpro/Calc_decay.php';
		}
	}
	else{
		$ck='views/radpro/Calc_decay.php';
	}

?>

<div class="row">
	<div class="col-md-6">
		<div class="page-header">
			<h1> Rad Pro Calculator<br>
			<small>
				Untuk informasi lebih lanjut, <br/>Klik <a href="http://www.radprocalculator.com/" target="_blank"> <u> Rad Pro Calculator </u> </a> &nbsp; versi online.   
			</small>
			</h1>

			<!-- FOR MOBILE -->
			<span class="text-radproc"> 
				<br>
				---------
				<br>
				belum tersedia untuk mobile ~
			</span>

		</div>
	</div>
	<div class="col-md-6 radproc">
		<div class="alert bg bg-primary">
			<form action="<?php echo base_url('radpro-calculator');?>" method="POST">
				<div class="form-group">
					<label class="text-white">Pilih Kalkukator : </label>&nbsp;
					<select name="rCalc" class="form-control" onchange="this.form.submit();">
						<?php 
							echo get_options($s_Rd);
						?>
					</select>
				</div>
			</form>
		</div>
	</div>
</div>

<br>

<div class="radproc">
	<?php 
		require_once(APPPATH.$ck);
	?>
</div>
