@extends('admin.admin-components.admin-layout')
@section('title', $title)

@section('admin-content')
    <h1>Data Anak</h1>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="admin-table">
        <thead>
            <tr>
                <th>No</th> <!-- Tambahkan ini -->
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Agama</th>
                <th>Hobi</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Jarak Rumah</th>
                <th>Foto Akte</th>
                <th>Foto KK</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $anak)
            <tr>
                <td>{{ $loop->iteration }}</td> <!-- Ini akan menjadi nomor urut -->
                <td>{{ $anak->nama }}</td>
                <td>{{ $anak->tempat_lahir }}</td>
                <td>{{ $anak->tanggal_lahir }}</td>
                <td>{{ $anak->gender }}</td>
                <td>{{ $anak->agama }}</td>
                <td>{{ $anak->hobi }}</td>
                <td>{{ $anak->nama_ayah }}</td>
                <td>{{ $anak->nama_ibu }}</td>
                <td>{{ $anak->jarak_rumah }}</td>
                <td>
                    @if ($anak->foto_akte)
                        <img src="{{ asset('storage/' . $anak->foto_akte) }}" width="100">
                    @endif
                </td>
                <td>
                    @if ($anak->foto_kk)
                        <img src="{{ asset('storage/' . $anak->foto_kk) }}" width="100">
                    @endif
                </td>
                <td>
                    @if($anak->status == 'diterima')
                        <span class="status-diterima">Diterima</span>
                    @elseif($anak->status == 'ditolak')
                        <span class="status-ditolak">Ditolak</span>
                    @else
                        <span class="status-diproses">Diproses</span>
                    @endif
                </td>
                <td class="action-buttons">
                    @if($anak->status == 'diproses')
                        <form action="{{ route('anak.updateStatus', $anak->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="diterima">
                            <button type="submit" class="btn-terima">Terima</button>
                        </form>

                        <form action="{{ route('anak.updateStatus', $anak->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="ditolak">
                            <button type="submit" class="btn-tolak">Tolak</button>
                        </form>
                    @else
                        <em>Tindakan selesai</em>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
