@extends('admin.admin-components.admin-layout')
@section('title', $title)

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-pendaftar.css') }}">
@endpush

<div class="admin-pendaftar-container">
    <h1 class="admin-title">Data Pemdaftar Anak</h1>

    @if (session('success'))
        <div class="flash-message">
            {{ session('success') }}
        </div>
    @endif

    <div class="admin-table-container">
        <table class="admin-pendaftar-table">
            <thead>
                <tr>
                    <th>No</th>
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
                    <td>{{ $loop->iteration }}</td>
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
                            <div class="file-info">
                                <div class="file-type">{{ pathinfo($anak->foto_akte, PATHINFO_EXTENSION) }}</div>
                                <button class="lihat-btn" data-url="{{ asset('storage/' . $anak->foto_akte) }}"
                                    data-type="{{ pathinfo($anak->foto_akte, PATHINFO_EXTENSION) }}">Lihat</button>
                                <a class="unduh-btn" href="{{ asset('storage/' . $anak->foto_akte) }}" download>Unduh</a>
                            </div>
                        @endif
                    </td>
                    <td>
                        @if ($anak->foto_kk)
                            <div class="file-info">
                                <div class="file-type">{{ pathinfo($anak->foto_kk, PATHINFO_EXTENSION) }}</div>
                                <button class="lihat-btn" data-url="{{ asset('storage/' . $anak->foto_kk) }}"
                                    data-type="{{ pathinfo($anak->foto_kk, PATHINFO_EXTENSION) }}">Lihat</button>
                                <a class="unduh-btn" href="{{ asset('storage/' . $anak->foto_kk) }}" download>Unduh</a>
                            </div>
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
                                @csrf @method('PATCH')
                                <input type="hidden" name="status" value="diterima">
                                <button type="submit" class="btn-terima">Terima</button>
                            </form>
                            <form action="{{ route('anak.updateStatus', $anak->id) }}" method="POST">
                                @csrf @method('PATCH')
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
    </div>
</div>

{{-- Modal Preview --}}
<div id="previewModal">
    <div id="previewContent">
        <button onclick="closePreview()">Tutup</button>
        <div id="fileContainer"></div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.lihat-btn').forEach(button => {
            button.addEventListener('click', function () {
                const url = this.dataset.url;
                const type = this.dataset.type.toLowerCase();
                const container = document.getElementById('fileContainer');
                container.innerHTML = '';

                if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(type)) {
                    const img = document.createElement('img');
                    img.src = url;
                    container.appendChild(img);
                } else if (type === 'pdf') {
                    const iframe = document.createElement('iframe');
                    iframe.src = url;
                    iframe.style.width = '100%';
                    iframe.style.height = '90vh';
                    container.appendChild(iframe);
                } else {
                    container.innerHTML = '<p style="color:white;">File tidak didukung</p>';
                }

                document.getElementById('previewModal').classList.add('show');
            });
        });
    });

    function closePreview() {
        document.getElementById('previewModal').classList.remove('show');
        document.getElementById('fileContainer').innerHTML = '';
        document.getElementById('previewModal').addEventListener('click', function(e) {
    if (e.target === this) closePreview();
});

    }
</script>
@endpush
