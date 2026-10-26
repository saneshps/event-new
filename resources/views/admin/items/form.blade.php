@extends('admin.layout')

@section('title', ($editing ? 'Edit ' : 'Add ') . $section)

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
    <div>
        <div class="admin-page-eyebrow">Content library</div>
        <h1 class="admin-page-title">{{ $editing ? 'Edit' : 'Add' }} {{ $section }}</h1>
    </div>
    <a class="btn btn-light border" href="{{ route('admin.'.($type === 'services' ? 'services' : $type).'.index') }}"><i class="far fa-arrow-left me-1"></i>Back</a>
</div>
<div class="card admin-card">
    <div class="card-body p-4">
        <form method="POST" action="{{ $formAction }}" enctype="multipart/form-data">
            @csrf
            @method($formMethod)
            @foreach ($fields as $field)
                @php
                    $value = old($field['name'], $item->{$field['name']} ?? '');
                    $required = $field['required'] ?? false;
                @endphp
                @if ($field['type'] === 'checkbox')
                    @php($checked = old('is_active', $item->exists ? $item->is_active : true))
                    <div class="form-check mb-3">
                        <input id="{{ $field['name'] }}" type="checkbox" name="{{ $field['name'] }}" value="1" class="form-check-input" @checked($checked)>
                        <label for="{{ $field['name'] }}" class="form-check-label">{{ $field['label'] }}</label>
                    </div>
                @elseif ($field['type'] === 'image')
                    @if ($item->exists && $item->image_path)
                        @php($imageUrl = str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/'.$item->image_path))
                        <div class="mb-2"><img src="{{ $imageUrl }}" alt="" width="150"></div>
                    @endif
                    <div class="mb-3">
                        <label for="{{ $field['name'] }}" class="form-label">{{ $field['label'] }}</label>
                        <input id="{{ $field['name'] }}" type="file" name="{{ $field['name'] }}" class="form-control" accept="image/jpeg,image/png,image/webp" @required($required)>
                        <div class="form-text">JPG, PNG or WebP; maximum 5 MB. Leave empty to keep the current image.</div>
                    </div>
                @elseif ($field['type'] === 'textarea')
                    <div class="mb-3">
                        <label for="{{ $field['name'] }}" class="form-label">{{ $field['label'] }}</label>
                        <textarea id="{{ $field['name'] }}" name="{{ $field['name'] }}" rows="5" class="form-control" @required($required)>{{ $value }}</textarea>
                    </div>
                @else
                    <div class="mb-3">
                        <label for="{{ $field['name'] }}" class="form-label">{{ $field['label'] }}</label>
                        <input id="{{ $field['name'] }}" type="{{ $field['type'] }}" name="{{ $field['name'] }}" value="{{ $value }}" class="form-control" @required($required) @if ($field['type'] === 'number') min="0" @endif>
                    </div>
                @endif
            @endforeach
            <button class="admin-btn-primary" type="submit"><i class="far fa-check"></i>{{ $editing ? 'Save changes' : 'Create' }}</button>
        </form>
    </div>
</div>
@endsection
