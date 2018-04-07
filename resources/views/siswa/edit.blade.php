@foreach($data as $datas)
<form action="{{ route('siswa.update', $datas->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $datas->nama }}">
    <label>Alamat:</label>
    <input type="text" name="alamat" value="{{ $datas->alamat }}">
    <label>Email:</label>
    <input type="text" name="email" value="{{ $datas->email }}">
    <button type="submit">Submit</button>
    <button type="reset">Cancel</button>
</form>
@endforeach