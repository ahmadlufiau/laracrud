@if(Session::has('alert-success'))
    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
@endif
<table>
<thead>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
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
    </tr>
    @endforeach
</tbody>
</table>