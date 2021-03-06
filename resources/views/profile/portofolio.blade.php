<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style>
	.page-break {
		page-break-after: always;
	}
	</style>
</head>
<body>
	<h1 style="text-align:center;">Curriculum Vitae</h1>
	<br><br><br>
	<img src="{!! asset($biodata->photo) !!}" alt="" style="height:90px; margin:0 0 0 540px">
	
</div>
<section style="margin:-120px 0 0 0;">
	<h2>Data Pribadi</h2>
	<table>
		<tbody>
			<tr>
				<td>Nama</td>
				<td>: {!! $biodata->full_name!!}</td>
				<td rowspan="7"> </td>
			</tr>
			<tr>
				<td>TTL </td>
				<td>: {!! $biodata->birthplace.','.$biodata->birthday !!}</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: {!! $biodata->domisili!!}</td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td>: {!! $biodata->gender!!}</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>: {!! $biodata->religion!!}</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>: {!! $biodata->status!!}</td>
			</tr>
			<tr>
				<td>Telepon </td>
				<td>: {!! $biodata->phone_number!!}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: {!! $biodata->email!!}</td>
			</tr>
		</tbody>
	</table>
	<h2>Latar Belakang Pendidikan</h2>
	<table>
		<tbody>
			<tr>
				<td colspan=2>Formal</td>
			</tr>
			<tr>
				<td>1999 - 2005</td>
				<td>: SDN Rantau Kanan 1</td>
			</tr>
			<tr>
				<td>2005 - 2008</td>
				<td>: SMP Negeri 6 Banjarmasin</td>
			</tr>
			<tr>
				<td>2008 - 2011</td>
				<td>: SMA Negeri 1 Banjarmasin</td>
			</tr>
			<tr>
				<td>2011 - 2015</td>
				<td>: Universitas Muhammadiyah Malang</td>
			</tr>
			<tr>
				<td colspan=2>Non Formal</td>
			</tr>
			<tr>
				<td colspan=2> - </td>
			</tr>		
		</tbody>
	</table>
	<h2>Kemampuan</h2>
	<h3>Bahasa Pemrograman</h3>
	<ol>
		<li>PHP (Framework Codeigniter, Laravel)</li>
		<li>JAVA</li>
		<li>CSS</li>
		<li>Javascript</li>
		<li>AJAX</li>
		Tools Lainnya
		<ol>
			<li>JQuery</li>
		</ol>
	</ol>
	<h3>Graphic dan videography</h3>
	<ol>
		<li>Photoshop</li>
		<li>Coreldraw</li>
	</ol>
</section>
<div class="page-break"></div>
<section>
	<h2>Portofolio</h2>
	<table>
		<thead>
			<tr>
				<td style="font-size:20px;"><b>Nama Aplikasi</b></td>
				<td style="font-size:20px;"><b>Tools</b></td>
			</tr>
		</thead>
		<tbody>
			<tr><b>
				<td>Website Gitasurya UMM</td>
				<td>Framework Codeigniter,Jquery,CSS</td>
			</tr>
			<tr>
				<td>Website Portofolio aplikasi mahasiswa jurusan Teknik Informatika UMM</td>
				<td>Framework Laravel,Jquery,CSS</td>
			</tr>
		</tbody>
	</table>
</section>
</body>
</html>
