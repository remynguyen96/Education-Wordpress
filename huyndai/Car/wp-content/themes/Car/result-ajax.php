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
if($dongxe == "Sonata1")
{
	$price ="1060000000";
}
else if($dongxe == "Elantra1")
{
	$price ="615000000";
}
else if($dongxe == "Avante1")
{
	$price ="532200000";
}
else if($dongxe == "Accent1")
{
	$price ="574000000";
}
else if($dongxe == "Accent5")
{
	$price ="592000000";
}
else if($dongxe == "Active1")
{
	$price ="641000000";
}
else if($dongxe == "Grand_i1")
{
	$price ="368000000";
}
else if($dongxe == "Grand1")
{
	$price ="409000000";
}
else if($dongxe == "SantaFe1")
{
	$price ="1150000000";
}
else if($dongxe == "Tucson1")
{
	$price ="1035000000";
}
else if($dongxe == "Creta1")
{
	$price ="822000000";
}
else if($dongxe == "Starex1_H")
{
	$price ="801000000";
}
else if($dongxe == "Santa1")
{
	$price ="1000000000";
}
else if($dongxe == "Starex1")
{
	$price ="914000000";
}
else if($dongxe == "Starex5")
{
	$price ="680000000";
}
else if($dongxe == "H1")
{
	$price ="325000000";
}
else if($dongxe == "Elantra2")
{
	$price ="689000000";
}
else if($dongxe == "Elantra3")
{
	$price ="739000000";
}
else if($dongxe == "Avante2")
{
	$price ="575000000";
}
else if($dongxe == "Accent2")
{
	$price ="624000000";
}
else if($dongxe == "Grand_i2")
{
	$price ="411100000";
}
else if($dongxe == "Grand_i3")
{
	$price ="442100000";
}
else if($dongxe == "Grand_i4")
{
	$price ="473200000";
}
else if($dongxe == "Grand_i5")
{
	$price ="397200000";
}
else if($dongxe == "Grand_i6")
{
	$price ="444500000";
}
else if($dongxe == "Grand2")
{
	$price ="454700000";
}
else if($dongxe == "Grand3")
{
	$price ="495900000";
}
else if($dongxe == "SantaFe2")
{
	$price ="1100000000";
}
else if($dongxe == "SantaFe3")
{
	$price ="1250000000";
}
else if($dongxe == "SantaFe4")
{
	$price ="1300000000";
}
else if($dongxe == "SantaFe5")
{
	$price ="1050000000";
}
else if($dongxe == "SantaFe6")
{
	$price ="999000000";
}
else if($dongxe == "Tucson2")
{
	$price ="962000000";
}
else if($dongxe == "Creta2")
{
	$price ="864000000";
}
else if($dongxe == "Starex2_H")
{
	$price ="832000000";
}
else if($dongxe == "Starex3_H")
{
	$price ="811000000";
}
else if($dongxe == "Starex3")
{
	$price ="962000000";
}
else if($dongxe == "Starex4")
{
	$price ="989000000";
}
else if($dongxe == "Starex5")
{
	$price ="1508000000";
}
else if($dongxe == "Starex6")
{
	$price ="710000000";
}
else if($dongxe == "H2")
{
	$price ="345000000";
}
else if($dongxe == "H3")
{
	$price ="399000000";
}
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