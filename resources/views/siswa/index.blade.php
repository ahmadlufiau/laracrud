@if(Session::has('alert-success'))
    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
@endif
<a href="{{ url('siswa/create') }}">Tambah Siswa</a>
<table>
<thead>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Options</th>
    </tr>
</thead>
<tbody>
    @php
        $no = 1;
    @endphp
    @foreach($data as $items)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $items->nama }}</td>
        <td>{{ $items->email }}</td>
        <td>{{ $items->alamat }}</td>
        <td>
        <form action="{{ route('siswa.destroy', $items->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{ route('siswa.show',$items->id) }}">Lihat</a>
            <a type="submit" href="{{ route('siswa.edit',$items->id) }}">Edit</a>
            <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>