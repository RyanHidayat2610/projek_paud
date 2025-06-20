@extends('admin.admin-components.admin-layout')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/admin-css/admin-slider.css') }}">

<h2>Kelola Gambar Slider</h2>

@if(session('success'))
    <div class="alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="alert-error">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

@php
    $editing = request()->has('edit_id');
    $editSlider = $editing ? $sliders->firstWhere('id', request('edit_id')) : null;
@endphp

<form action="{{ $editing ? route('admin.slider.update', $editSlider->id) : route('admin.slider.store') }}"
      method="POST"
      enctype="multipart/form-data"
      class="form-slider">
    @csrf
    @if($editing)
        @method('PUT')
    @endif

    <input type="file" name="gambar" accept="image/*" required>
    <button type="submit">
        {{ $editing ? 'Simpan Perubahan' : 'Tambah Gambar' }}
    </button>

    @if($editing)
        <a href="{{ route('admin.slider.index') }}" class="btn-cancel">Batal</a>
    @endif
</form>

<div class="slider-gallery">
    @foreach ($sliders as $slider)
        <div class="slider-item">
            <img src="{{ asset('storage/slider/' . $slider->gambar) }}" alt="Slider" class="preview-img">

            <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST"
                  onsubmit="return confirm('Yakin ingin menghapus gambar ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">Hapus</button>
            </form>

            <form action="{{ route('admin.slider.index') }}" method="GET">
                <input type="hidden" name="edit_id" value="{{ $slider->id }}">
                <button type="submit" class="btn-edit">Edit</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
