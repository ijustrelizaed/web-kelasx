<x-layout>
    <div class="search-container">
        <form action="{{ route('siswa.search') }}" method="GET" class="search-form">
            <input type="text" name="keyword" placeholder="Cari siswa..." class="search-input">
            <button type="submit" class="search-button">Cari</button>
        </form>
    </div>
    <br>
    <br>
    <br>
    @foreach ($data as $wargakelas)
        <p>{{ $wargakelas->nama }}</p>
        <p>{{ $wargakelas->jabatan }}</p>
    @endforeach
</x-layout>