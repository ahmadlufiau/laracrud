<a href="{{ route('siswa.index') }}">Lihat Data Siswa</a>
<h1>Data Siswa {{ $data->nama }}</h1>
<table>
	<tbody>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $data->nama }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $data->alamat }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>{{ $data->email }}</td>
		</tr>
	</tbody>
</table>