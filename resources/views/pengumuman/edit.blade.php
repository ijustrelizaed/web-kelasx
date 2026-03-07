<x-layout>
<h3 style="margin-bottom: 20px;"><i class="fas fa-bullhorn" style="color: var(--primary-red);"></i> Pengumuman Kelas</h3>
    <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" value="{{ old('judul', $pengumuman->judul) }}" required>
        </div>
        <div>
            <label for="isi">Isi:</label>
            <input type="text" id="isi" name="isi" value="{{ old('isi', $pengumuman->isi) }}" required>
        </div>
        <button type="submit">Update Pengumuman</button>
    </form>
</x-layout>
