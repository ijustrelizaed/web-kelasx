<x-layout>
    <h2>pengumuman terbaru</h2>
        @foreach ($pengumuman as $datapengumuman)
         
        <a href="{{ route('pengumuman.index') }}"><h4>{{ $datapengumuman->judul }}</h4></a>
        @endforeach
    
    <div>
        @foreach ($photo as $dataphoto)
            <a href="{{ route('piket.index') }}"><img src="{{ asset('storage/photo/' . $dataphoto->photo) }}" alt="poto piket" loading="lazy"></a>
        @endforeach
    </div>

        @foreach ($siswa as $wargakelas)
        <a href="{{ route('siswa.index') }}"><h3>{{$wargakelas->nama}}</h3>
        <img src="{{ asset('storage/image/' . $wargakelas->image) }}" alt="foto anak kelas" loading="lazy"></a>
    @endforeach
    
</x-layout>
