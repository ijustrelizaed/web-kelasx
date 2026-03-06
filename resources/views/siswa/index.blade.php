<x-layout>
    <form action="/siswa/search" method="GET">
        <input type="text" name="keyword" placeholder="Cari siswa...">
        <button type="submit">Cari</button>
    </form>
    <br>
    <br>
    <br>
    @foreach ($data as $wargakelas)
        <p>{{ $wargakelas->nama }}</p>
        <p>{{ $wargakelas->jabatan }}</p>
    @endforeach
</x-layout>