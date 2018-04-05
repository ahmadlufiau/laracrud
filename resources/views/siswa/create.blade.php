<form action="{{ route('siswa.store') }}" method="post">
    {{ csrf_field() }}
    <label>Nama:</label>
    <input type="text" name="nama">
    <label>Alamat:</label>
    <input type="text" name="alamat">
    <label>Email:</label>
    <input type="text" name="email">
    <button type="submit">Submit</button>
    <button type="reset">Cancel</button>
</form>