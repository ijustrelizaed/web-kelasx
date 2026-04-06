<x-layout>
<h3 style="margin-bottom: 20px;"><i class="fas fa-bullhorn" style="color: var(--primary-red);"></i> Pengumuman Kelas</h3>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- pergantian method dari post menjadi put --}}
        @method('PUT')
        <div>
            <label for="nama">nama:</label>
            <input type="text" id="nama" name="nama" 
            {{-- value defaultnya adalah data yang lama --}}
            value="{{ old('nama', $siswa->nama) }}" required>
        </div>
        <div>
            <label for="image">image:</label>
            <input type="file" id="image" name="image" value="{{ old('image', $siswa->image) }}">
        </div>
        <div>
            <label for="jabatan">jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan', $siswa->jabatan) }}" required>
        </div>
        <button type="submit">Update Siswa</button>
    </form>
</x-layout>
