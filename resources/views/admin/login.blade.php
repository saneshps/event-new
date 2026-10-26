@extends('admin.layout')

@section('title', 'Admin login')

@section('content')
<div class="mb-3">
    <div class="admin-page-eyebrow">Admin portal</div>
    <h1 class="admin-page-title">Sign in to your workspace</h1>
    <p class="admin-page-description">Manage your services, gallery and career content.</p>
</div>
<div class="card admin-card">
    <div class="card-body p-4 p-sm-5">
        <form method="POST" action="{{ route('admin.login.store') }}">
            @csrf
            <div class="mb-3">
                <label for="login" class="form-label fw-semibold small">Username or email</label>
                <input id="login" type="text" name="login" value="{{ old('login') }}" class="form-control" required autofocus autocomplete="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold small">Password</label>
                <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
            </div>
            <div class="form-check mb-4">
                <input id="remember" type="checkbox" name="remember" value="1" class="form-check-input">
                <label for="remember" class="form-check-label small">Remember me</label>
            </div>
            <button class="admin-btn-primary w-100" type="submit">Sign in <i class="fas fa-arrow-right"></i></button>
        </form>
    </div>
</div>
@endsection
