<x-layout>
    {{-- img ada di storage/image --}}
    <div class="container-show">
        <div class="show-siswa">
            <img src="{{ asset('storage/image/'. $siswa->image) }}" alt="gambar orang" loading="lazy">
                <h2>{{ $siswa->nama }}</h2>
                <p>{{ $siswa->jabatan }}</p>
        </div>
    </div>
</x-layout>