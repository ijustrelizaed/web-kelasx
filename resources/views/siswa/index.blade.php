<x-layout>
    <div class="search-container">
        <form action="/siswa/search" method="GET" class="search-form">
            <input type="text" name="keyword" placeholder="Cari siswa..." class="search-input">
            <button type="submit" class="search-button" value="keyword">Cari</button>
        </form>
    </div>
    <br>
    <a href="{{ route('siswa.create') }}">create</a>
    <br>
    <br>
    @foreach ($siswa as $wargakelas)
        <img src="{{ asset('storage/'. $wargakelas->image) }}" alt="gambar orang" loading="lazy">
        <p>{{ $wargakelas->nama }}</p>
        <p>{{ $wargakelas->jabatan }}</p>
        <a href="{{ route('siswa.edit', $wargakelas->id) }}">edit</a>
        <a href="{{ route('siswa.show', $wargakelas->id) }}">show</a>
        <form action="{{ route('siswa.destroy', $wargakelas->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
</x-layout>