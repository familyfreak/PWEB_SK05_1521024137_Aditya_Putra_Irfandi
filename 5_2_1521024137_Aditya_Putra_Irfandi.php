<html>
<head>
<title>Aditya Putra Irfandi</title>
<style type="text/css">
	table{margin:0 auto;width:50%;border-collapse:collapse;background:#ecf3eb;}
caption h3{}
th, td{border:1px solid #999;}
th{padding:8px 0;background: #0cf;}
td{padding:4px 8px;}
</style>
</head>
<body>
<?php
$barang = array(
"1001"=>array("namabarang"=>"Sabun Lifeboy","harga"=>"Rp. 1.500,-"),
"1002"=>array("namabarang"=>"Permen Blaster","harga"=>"Rp. 5.600,-"),
"1003"=>array("namabarang"=>"Pasta Gigi Pepsodent","harga"=>"Rp. 4.560,-"),
"1004"=>array("namabarang"=>"Madu Arbain","harga"=>"Rp. 30.000,-"),
"1005"=>array("namabarang"=>"Kecap ABC","harga"=>"Rp. 7.250,-"),
"1006"=>array("namabarang"=>"Saus Tomat ABC","harga"=>"Rp. 6.700,-"),
"1007"=>array("namabarang"=>"Gula Gulaku","harga"=>"Rp. 8.900,-"),
"1008"=>array("namabarang"=>"Rinso","harga"=>"Rp. 7.100,-"),
"1009"=>array("namabarang"=>"Super Pel","harga"=>"Rp. 6.450,-"),
"1010"=>array("namabarang"=>"Permen Tango","harga"=>"Rp. 5.600,-")
);
?>
<h3><center>Studi Kasus 5_2</center></h3>
<center>
<table border="1" width="">
<th width="25%">Kode Barang</th>
<th width="25%">Nama Barang</th>
<th width="25%">Harga Satuan</th>
<?php
foreach ($barang as $val=>$val2){
?>
<tr>
<td>
<?php
echo $val;
?>
</td>
<td>
<?php
echo $val2["namabarang"];
?>
</td>
<td>
<?php
echo $val2["harga"];
?>
</td>
</tr>
<?php
}
?>
</table>
</center>
</body>
</html>