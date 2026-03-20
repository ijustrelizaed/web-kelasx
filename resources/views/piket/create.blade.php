<form action="{{ route('piket.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="photo">Masukkan Foto piket hari ini</label>
    <input type="file" name="photo" id="photo" required>
    <button type="submit">Submit</button>
</form>