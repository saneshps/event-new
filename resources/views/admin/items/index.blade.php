@extends('admin.layout')

@section('title', $section)

@section('content')
<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
    <div>
        <div class="admin-page-eyebrow">Content library</div>
        <h1 class="admin-page-title">{{ $section }}</h1>
        <p class="admin-page-description">
            @if ($type === 'services')
                Manage the services displayed on your website.
            @elseif ($type === 'gallery')
                Curate the event photos visitors see in your gallery.
            @else
                Publish and manage your current career opportunities.
            @endif
        </p>
    </div>
    <a class="admin-btn-primary" href="{{ route($createRoute) }}"><i class="fas fa-plus"></i> Add {{ str($section)->singular()->lower() }}</a>
</div>
<div class="card admin-card">
    <div class="table-responsive">
        <table class="table table-hover align-middle admin-table">
            <thead><tr>
                @if ($type !== 'careers')<th>Image</th>@endif
                <th>Title</th>
                @if ($type === 'careers')<th>Location / type</th>@endif
                <th>Order</th><th>Status</th><th class="text-end">Actions</th>
            </tr></thead>
            <tbody>
            @forelse ($items as $item)
                <tr>
                    @if ($type !== 'careers')
                        <td>
                            @php($imageUrl = str_starts_with($item->image_path, 'assets/') ? asset($item->image_path) : asset('storage/'.$item->image_path))
                            <img src="{{ $imageUrl }}" alt="" width="72" height="52" class="rounded-2" style="object-fit:cover">
                        </td>
                    @endif
                    <td>
                        <strong>{{ $item->title }}</strong>
                        @if ($type !== 'careers' && $item->description)<div class="small text-muted">{{ \Illuminate\Support\Str::limit($item->description, 90) }}</div>@endif
                    </td>
                    @if ($type === 'careers')
                        <td>{{ $item->location }} @if ($item->employment_type)<span class="text-muted">/ {{ $item->employment_type }}</span>@endif</td>
                    @endif
                    <td>{{ $item->sort_order }}</td>
                    <td><span class="badge {{ $item->is_active ? 'text-bg-success' : 'text-bg-secondary' }}">{{ $item->is_active ? 'Visible' : 'Hidden' }}</span></td>
                    <td class="text-end text-nowrap">
                        <a class="btn btn-sm btn-light border" href="{{ route($editRoute, $item) }}"><i class="far fa-pen-to-square me-1"></i>Edit</a>
                        <form class="d-inline" method="POST" action="{{ route($deleteRoute, $item) }}" onsubmit="return confirm('Delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-light border text-danger" type="submit"><i class="far fa-trash-can me-1"></i>Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center py-5 text-muted">No content yet.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
