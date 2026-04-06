<x-layout>
    <h1>ini halaman pengumuman</h1>
    <div>
        @auth
        <a href="{{ route('pengumuman.create') }}">Tambah Pengumuman</a>    
        @endauth
        
        <ul>
            @foreach ($allPengumuman as $pengumuman)
                <li>
                    <h1>{{ $pengumuman->judul }}</h1>
                    <p>{{ $pengumuman->isi }}</p>
                </li>
                <a href="{{ route('pengumuman.show', $pengumuman->id) }}">Lihat pengumuman</a>
                @auth
                <a href="{{ route('pengumuman.edit', $pengumuman->id) }}">Edit pengumuman</a>
                <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus pengumuman</button>
                </form>
                @endauth
            @endforeach
        </ul>
    </div>
</x-layout>