<x-layout>
    <form action="{{ route('pengumuman.store') }}" method="POST">
        @csrf
        <div>
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>
        </div>
        <div>
            <label for="isi">Isi:</label>
            <textarea id="isi" name="isi" required></textarea>
        </div>
        <button type="submit">Simpan Pengumuman</button>
    </form>
</x-layout>
