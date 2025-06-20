<table>
    <tr>
        <th>Gambar</th><th>Title</th><th>Desc</th><th>Aksi</th>
    </tr>
    @foreach($programs as $p)
    <tr>
        <td><img src="{{ asset('storage/' . $p->gambar) }}" width="100"></td>
        <td>{{ $p->title }}</td>
        <td>{{ $p->desc }}</td>
        <td>
            <!-- Implementasikan tombol edit jika perlu -->
            <form action="{{ route('program.delete', $p->id) }}" method="POST" onsubmit="return confirm('Hapus?')">
                @csrf @method('DELETE')
                <button>Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
