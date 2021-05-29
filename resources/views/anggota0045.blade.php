<!DOCTYPE html>
<html>
<head>
<title>1461900045-AnandaBekyArmanda</title>
</head>
<body>
<h2><center>Ananda Beky Armanda - 1461900045<center></h2>
<h2><center>Data Anggota<center></h2>
<p><center>Cari Anggota :</center></p>
<center><form action="/anggota/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari Anggota .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form></center>
<p><center>Cek Tanggal Pinjaman :</center></p>
<center><form action="/anggota/lain" method="GET">
<input type="text" name="lihat" placeholder="Cari Anggota .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form></center>
<p><center>Cari Peminjam :</center></p>
<center><form action="/anggota/angel" method="GET">
<input type="text" name="lihat" placeholder="Cari Anggota .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form></center>
<center><table border="1">
<tr>
<th>Id</th>
<th>Nama Anggota</th>
<th>Alamat</th>
<th>Jenis Kelamin</th>
<th>Telepon</th>
</tr>
@foreach($anggota as $t)
<tr>
<td>{{ $t->anggota_id}}</td>
<td>{{ $t->anggota_nama}}</td>
<td>{{ $t->anggota_alamat}}</td>
<td>{{ $t->anggota_jk}}</td>
<td>{{ $t->anggota_telp}}</td>
</tr>
@endforeach
</table></center>
</body>
</html>