<x-layout>
<h3 style="margin-bottom: 20px;"><i class="fas fa-bullhorn" style="color: var(--primary-red);"></i> Pengumuman Kelas</h3>
    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nama">nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="jabatan">jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" required>
        </div>
        <div>
            <label for="image">image:</label>
            <input type="file" id="image" name="image" required>
        </div>
        <button type="submit">Simpan Pengumuman</button>
    </form>
</x-layout>
