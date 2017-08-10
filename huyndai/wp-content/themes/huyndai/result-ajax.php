<?php
$tra_truoc2 = "";  
$tra_truoc1 = "";  
$thoihan = "";  
$dongxe = "";  
$laixuat = "";  
$price = "";
$tien_goc_1thang="";
$tien_lai_ky_cuoi_cung="";
$tong_phai_tra ="";
$du_no_giam_dan="";
$result="";
if(isset($_POST["tra_truoc2"]) && isset($_POST["tra_truoc1"]) && isset($_POST["thoihan"]) && isset($_POST["dongxe"]) && isset($_POST["laixuat"]) )
{
$dongxe = $_POST["dongxe"];
$tra_truoc2 = $_POST["tra_truoc2"];
$tra_truoc1 = $_POST["tra_truoc1"];
$thoihan = $_POST["thoihan"];
$laixuat = ($_POST["laixuat"]/10000);
	if($tra_truoc2 !="")
	{
		$tien_goc_1thang = ($price - (($price*$tra_truoc2)/100))/$thoihan;
		$tien_lai_ky_cuoi_cung = ($tien_goc_1thang*$laixuat);
		$tong_phai_tra = $tien_goc_1thang*$thoihan;
		 $result=
		'<table class="table table-bordered table-hover">
			<tr class="title_table">
				<th class="text-center">Kỳ</th>
				<th class="text-center">Tiền gốc(VNĐ)</th>
				<th class="text-center">Tiền lãi(VNĐ)</th>
				<th class="text-center">Gốc + Lãi(VNĐ)</th>
				<th class="text-center">Dư nợ(VNĐ)</th>
			</tr>';
			$j = $thoihan;
			$tong_lai = ($tien_lai_ky_cuoi_cung*$j);
		for($i=1; $i<= $thoihan; $i++)
		{
			$result.='<tr>';
			$result.='<td class="text-center">'.$i.'</td>';
			$result.='<td class="text-center">'.number_format($tien_goc_1thang).' VNĐ</td>';
			$result.='<td class="text-center">'.number_format($tien_lai_ky_cuoi_cung*$j).' VNĐ</td>';
			$result.='<td class="text-center">'.number_format($tien_lai_ky_cuoi_cung*$j + $tien_goc_1thang).' VNĐ</td>';
			$result.='<td class="text-center">'.number_format($tien_goc_1thang*($j-1)).' VNĐ</td>';
			$result.='</tr>';
			$j = $j - 1;
			$tong_lai += ($tien_lai_ky_cuoi_cung*$j);
		}
	$result.='<tr class="result_table">
				<th class="text-center">Tổng</th>
				<th class="text-center">'.number_format($tien_goc_1thang*$thoihan).' VNĐ</th>
				<th class="text-center">'.number_format($tong_lai).' VNĐ</th>
				<th class="text-center">'.number_format(($tien_goc_1thang*$thoihan) +$tong_lai ).' VNĐ</th>
				<th class="text-center"></th>
			</tr>
		</table>';
		echo $result;
	}
	else
	{
	$tien_goc_1thang =($price- $tra_truoc1)/$thoihan;
	$tien_lai_ky_cuoi_cung = ($tien_goc_1thang*$laixuat);
	$tong_phai_tra = $tien_goc_1thang*$thoihan;
	 $result=
		'<table class="table table-bordered table-hover">
			<tr class="title_table">
				<th class="text-center">Kỳ</th>
				<th class="text-center">Tiền gốc(VNĐ)</th>
				<th class="text-center">Tiền lãi(VNĐ)</th>
				<th class="text-center">Gốc + Lãi(VNĐ)</th>
				<th class="text-center">Dư nợ(VNĐ)</th>
			</tr>';
			$j = $thoihan;
			$tong_lai = ($tien_lai_ky_cuoi_cung*$j);
		for($i=1; $i<= $thoihan; $i++)
		{
			$result.='<tr>';
			$result.='<td class="text-center">'.$i.'</td>';
			$result.='<td class="text-center">'.number_format($tien_goc_1thang).' VNĐ</td>';
			$result.='<td class="text-center">'.number_format($tien_lai_ky_cuoi_cung*$j).' VNĐ</td>';
			$result.='<td class="text-center">'.number_format($tien_lai_ky_cuoi_cung*$j + $tien_goc_1thang).' VNĐ</td>';
			$result.='<td class="text-center">'.number_format($tien_goc_1thang*($j-1)).' VNĐ</td>';
			$result.='</tr>';
			$j = $j - 1;
			$tong_lai += ($tien_lai_ky_cuoi_cung*$j);
		}
	$result.='<tr class="result_table">
				<th class="text-center">Tổng</th>
				<th class="text-center">'.number_format($tien_goc_1thang*$thoihan).' VNĐ</th>
				<th class="text-center">'.number_format($tong_lai).' VNĐ</th>
				<th class="text-center">'.number_format(($tien_goc_1thang*$thoihan) +$tong_lai ).' VNĐ</th>
				<th class="text-center"></th>
			</tr>
		</table>';
		echo $result;
	}
}
?>