<x-layout>
<h3 style="margin-bottom: 20px;"><i class="fas fa-bullhorn" style="color: var(--primary-red);"></i> Pengumuman Kelas</h3>
    <form action="{{ route('siswa.update', $editsiswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">nama:</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $editsiswa->nama) }}" required>
        </div>
        <div>
            <label for="image">image:</label>
            <input type="file" id="image" name="image" value="{{ old('image', $editsiswa->image) }}">
        </div>
        <div>
            <label for="jabatan">jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan', $editsiswa->jabatan) }}" required>
        </div>
        <button type="submit">Update Pengumuman</button>
    </form>
</x-layout>
