<table>
    <tr>
        <th>Gambar</th><th>Deskripsi Hover</th><th>Aksi</th>
    </tr>
    @foreach($kegiatans as $k)
    <tr>
        <td><img src="{{ asset('storage/' . $k->gambar) }}" width="100"></td>
        <td>{{ $k->desckegiatan }}</td>
        <td>
            <form action="{{ route('kegiatan.delete', $k->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                @csrf @method('DELETE')
                <button>Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
