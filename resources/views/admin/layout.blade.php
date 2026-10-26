<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin CMS') | BS Events LLC</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all-fontawesome.min.css') }}">
    <style>
        :root {
            --admin-ink: #172033;
            --admin-muted: #81899a;
            --admin-orange: #f28a2e;
            --admin-bg: #f4f6fa;
            --admin-sidebar: #101827;
            --admin-border: #e9edf3;
        }
        * { box-sizing: border-box; }
        body { margin: 0; background: var(--admin-bg); color: var(--admin-ink); font-family: Inter, "Segoe UI", Arial, sans-serif; }
        .admin-shell { min-height: 100vh; }
        .admin-sidebar { position: fixed; inset: 0 auto 0 0; z-index: 1040; display: flex; flex-direction: column; width: 258px; padding: 25px 17px 18px; background: var(--admin-sidebar); color: #fff; }
        .admin-brand { display: flex; align-items: center; gap: 12px; padding: 0 11px 28px; color: #fff; text-decoration: none; }
        .admin-brand:hover { color: #fff; }
        .admin-brand-mark { display: grid; width: 42px; height: 42px; place-items: center; border-radius: 13px; background: linear-gradient(145deg, #ffb35e, var(--admin-orange)); color: #fff; font-size: 19px; box-shadow: 0 7px 18px #f28a2e38; }
        .admin-brand-name { display: block; font-size: 14px; font-weight: 800; letter-spacing: .08em; }
        .admin-brand-subtitle { display: block; margin-top: 3px; color: #8f9bae; font-size: 9px; font-weight: 700; letter-spacing: .18em; }
        .admin-menu-label { margin: 2px 12px 11px; color: #718096; font-size: 10px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; }
        .admin-menu { display: grid; gap: 6px; }
        .admin-menu-link { display: flex; align-items: center; gap: 13px; min-height: 46px; padding: 0 13px; border-radius: 10px; color: #aab4c3; font-size: 13px; font-weight: 600; text-decoration: none; transition: background .18s ease, color .18s ease; }
        .admin-menu-link i { width: 18px; color: #8491a5; font-size: 15px; text-align: center; }
        .admin-menu-link:hover { background: #ffffff0d; color: #fff; }
        .admin-menu-link.active { background: #f28a2e1c; color: #ffb46f; }
        .admin-menu-link.active i { color: #ff9b45; }
        .admin-sidebar-bottom { margin-top: auto; }
        .admin-sidebar-divider { height: 1px; margin: 18px 8px; background: #ffffff14; }
        .admin-website-link { display: flex; align-items: center; gap: 11px; padding: 11px 13px; color: #aab4c3; font-size: 12px; text-decoration: none; }
        .admin-website-link:hover { color: #fff; }
        .admin-website-link i { width: 18px; text-align: center; }
        .admin-main { min-height: 100vh; margin-left: 258px; }
        .admin-topbar { position: sticky; top: 0; z-index: 1020; display: flex; min-height: 76px; align-items: center; justify-content: space-between; gap: 18px; padding: 0 38px; border-bottom: 1px solid var(--admin-border); background: #ffffffed; backdrop-filter: blur(14px); }
        .admin-topbar-heading { display: flex; align-items: center; gap: 11px; color: var(--admin-muted); font-size: 12px; }
        .admin-topbar-heading i { color: #c2c9d4; font-size: 10px; }
        .admin-topbar-current { color: var(--admin-ink); font-weight: 700; }
        .admin-topbar-user { display: flex; align-items: center; gap: 12px; }
        .admin-avatar { display: grid; width: 38px; height: 38px; place-items: center; border: 1px solid #ffe0c2; border-radius: 50%; background: #fff4e9; color: #d66c17; font-size: 13px; font-weight: 800; }
        .admin-user-meta { line-height: 1.3; }
        .admin-user-name { color: var(--admin-ink); font-size: 12px; font-weight: 700; }
        .admin-user-role { margin-top: 3px; color: var(--admin-muted); font-size: 10px; }
        .admin-logout { display: inline-flex; align-items: center; gap: 8px; margin-left: 9px; padding: 9px 12px; border: 1px solid var(--admin-border); border-radius: 9px; background: #fff; color: #576174; font-size: 12px; font-weight: 600; }
        .admin-logout:hover { border-color: #ffd3b0; color: #c96820; }
        .admin-content { width: min(100%, 1500px); min-height: calc(100vh - 130px); margin: 0 auto; padding: 34px 38px 45px; }
        .admin-footer { padding: 17px 38px; border-top: 1px solid var(--admin-border); color: #939bab; font-size: 11px; }
        .admin-card { border: 1px solid #edf0f5; border-radius: 14px; background: #fff; box-shadow: 0 5px 20px #17203308; }
        .admin-page-eyebrow { margin-bottom: 7px; color: var(--admin-orange); font-size: 10px; font-weight: 800; letter-spacing: .15em; text-transform: uppercase; }
        .admin-page-title { margin: 0; color: var(--admin-ink); font-size: clamp(24px, 3vw, 30px); font-weight: 750; letter-spacing: -.035em; }
        .admin-page-description { margin: 8px 0 0; color: var(--admin-muted); font-size: 13px; }
        .admin-btn-primary { display: inline-flex; min-height: 42px; align-items: center; justify-content: center; gap: 9px; padding: 0 16px; border: 0; border-radius: 9px; background: var(--admin-orange); color: #fff; font-size: 12px; font-weight: 700; text-decoration: none; box-shadow: 0 5px 12px #f28a2e2c; }
        .admin-btn-primary:hover { background: #df7620; color: #fff; }
        .admin-welcome { display: flex; align-items: center; justify-content: space-between; gap: 22px; margin-bottom: 29px; padding: 27px 30px; border: 1px solid #ffe5ce; border-radius: 16px; background: linear-gradient(112deg, #fff 0%, #fff9f3 66%, #fff0e0 100%); }
        .admin-welcome-kicker { margin-bottom: 7px; color: var(--admin-orange); font-size: 10px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; }
        .admin-welcome-title { margin: 0; color: var(--admin-ink); font-size: clamp(22px, 3vw, 29px); font-weight: 750; letter-spacing: -.04em; }
        .admin-welcome-copy { margin: 7px 0 0; color: var(--admin-muted); font-size: 12px; }
        .admin-section-heading { margin: 0 0 15px; color: var(--admin-ink); font-size: 15px; font-weight: 750; }
        .admin-stat-card { display: flex; height: 100%; align-items: flex-start; gap: 15px; padding: 21px; color: var(--admin-ink); text-decoration: none; transition: transform .18s ease, box-shadow .18s ease; }
        .admin-stat-card:hover { transform: translateY(-3px); box-shadow: 0 12px 28px #17203312; color: var(--admin-ink); }
        .admin-stat-icon { display: grid; width: 46px; height: 46px; flex: 0 0 auto; place-items: center; border-radius: 13px; font-size: 17px; }
        .admin-stat-icon.orange { background: #fff0e2; color: #e57c25; }
        .admin-stat-icon.purple { background: #f0ebff; color: #7954c8; }
        .admin-stat-icon.blue { background: #e8f1ff; color: #477bd1; }
        .admin-stat-label { margin: 2px 0 5px; color: var(--admin-muted); font-size: 11px; font-weight: 600; }
        .admin-stat-count { color: var(--admin-ink); font-size: 29px; font-weight: 750; line-height: 1.1; letter-spacing: -.04em; }
        .admin-stat-link { display: inline-flex; align-items: center; gap: 6px; margin-top: 9px; color: #bd6a26; font-size: 10px; font-weight: 700; }
        .admin-quick-card { display: flex; height: 100%; align-items: center; gap: 14px; padding: 17px; color: var(--admin-ink); text-decoration: none; transition: border-color .18s ease, transform .18s ease; }
        .admin-quick-card:hover { transform: translateY(-2px); border-color: #ffd3b0; color: var(--admin-ink); }
        .admin-quick-icon { display: grid; width: 39px; height: 39px; flex: 0 0 auto; place-items: center; border-radius: 11px; background: #fff4e9; color: #dc7625; }
        .admin-quick-title { margin-bottom: 4px; font-size: 12px; font-weight: 750; }
        .admin-quick-copy { color: var(--admin-muted); font-size: 10px; }
        .admin-quick-arrow { margin-left: auto; color: #aab2c0; font-size: 12px; }
        .admin-table { --bs-table-bg: transparent; --bs-table-hover-bg: #fafbfd; margin: 0; }
        .admin-card .table-responsive { border-radius: 14px; }
        .admin-table thead th { padding: 15px 16px; border-bottom: 1px solid var(--admin-border); color: #8a92a2; font-size: 10px; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; white-space: nowrap; }
        .admin-table tbody td { padding: 14px 16px; border-color: #f0f2f6; color: #515c6e; font-size: 12px; }
        .admin-table tbody tr:last-child td { border-bottom: 0; }
        .admin-mobile-toggle { display: none; width: 38px; height: 38px; align-items: center; justify-content: center; border: 1px solid var(--admin-border); border-radius: 9px; background: #fff; color: var(--admin-ink); }
        .admin-backdrop { display: none; border: 0; padding: 0; }
        .auth-layout { display: grid; min-height: 100vh; place-items: center; padding: 30px 18px; background: radial-gradient(circle at 15% 10%, #fff0df 0, transparent 32%), radial-gradient(circle at 90% 90%, #e6edf9 0, transparent 30%), #f5f7fb; }
        .auth-brand { position: absolute; top: 28px; left: 35px; display: flex; align-items: center; gap: 10px; color: var(--admin-ink); font-size: 12px; font-weight: 800; letter-spacing: .08em; text-decoration: none; }
        .auth-brand .admin-brand-mark { width: 34px; height: 34px; border-radius: 10px; font-size: 15px; }
        .auth-layout .admin-card { border: 1px solid #edf0f5; box-shadow: 0 18px 55px #1b2a4312; }
        @media (max-width: 991.98px) {
            .admin-sidebar { transform: translateX(-100%); transition: transform .22s ease; }
            .admin-sidebar.is-open { transform: translateX(0); }
            .admin-main { margin-left: 0; }
            .admin-mobile-toggle { display: inline-flex; }
            .admin-backdrop.is-visible { position: fixed; inset: 0; z-index: 1030; display: block; background: #11182780; }
            .admin-topbar { min-height: 68px; padding: 0 22px; }
            .admin-content { padding: 27px 22px 38px; }
            .admin-footer { padding: 16px 22px; }
        }
        @media (max-width: 575.98px) {
            .admin-topbar { gap: 10px; padding: 0 14px; }
            .admin-topbar-heading { gap: 7px; font-size: 11px; }
            .admin-user-meta { display: none; }
            .admin-logout { width: 38px; height: 38px; justify-content: center; margin-left: 0; padding: 0; font-size: 0; }
            .admin-logout i { font-size: 13px; }
            .admin-content { padding: 23px 14px 32px; }
            .admin-footer { padding: 14px; }
            .auth-brand { top: 18px; left: 18px; }
            .admin-welcome { align-items: flex-start; flex-direction: column; padding: 22px; }
        }
    </style>
</head>
<body>
    @auth
        <div class="admin-shell">
            <aside class="admin-sidebar" id="admin-sidebar">
                <a class="admin-brand" href="{{ route('admin.dashboard') }}">
                    <span class="admin-brand-mark"><i class="fas fa-sparkles"></i></span>
                    <span><span class="admin-brand-name">BS EVENTS</span><span class="admin-brand-subtitle">CONTENT STUDIO</span></span>
                </a>
                <div class="admin-menu-label">Workspace</div>
                <nav class="admin-menu" aria-label="Admin navigation">
                    <a class="admin-menu-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="far fa-grid-2"></i><span>Dashboard</span>
                    </a>
                    <a class="admin-menu-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
                        <i class="far fa-calendar-star"></i><span>Services</span>
                    </a>
                    <a class="admin-menu-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}" href="{{ route('admin.gallery.index') }}">
                        <i class="far fa-images"></i><span>Gallery</span>
                    </a>
                    <a class="admin-menu-link {{ request()->routeIs('admin.careers.*') ? 'active' : '' }}" href="{{ route('admin.careers.index') }}">
                        <i class="far fa-briefcase"></i><span>Careers</span>
                    </a>
                </nav>
                <div class="admin-sidebar-bottom">
                    <div class="admin-sidebar-divider"></div>
                    <a class="admin-website-link" href="{{ route('home') }}" target="_blank" rel="noopener">
                        <i class="far fa-arrow-up-right-from-square"></i><span>View live website</span>
                    </a>
                </div>
            </aside>
            <button class="admin-backdrop" id="admin-backdrop" type="button" aria-label="Close navigation"></button>
            <div class="admin-main">
                <header class="admin-topbar">
                    <div class="admin-topbar-heading">
                        <button class="admin-mobile-toggle" id="admin-menu-toggle" type="button" aria-label="Open navigation" aria-controls="admin-sidebar" aria-expanded="false">
                            <i class="fas fa-bars"></i>
                        </button>
                        <span>Workspace</span><i class="fas fa-chevron-right"></i><span class="admin-topbar-current">@yield('title', 'Dashboard')</span>
                    </div>
                    <div class="admin-topbar-user">
                        <div class="admin-avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
                        <div class="admin-user-meta">
                            <div class="admin-user-name">{{ auth()->user()->name }}</div>
                            <div class="admin-user-role">Administrator</div>
                        </div>
                        <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
                            @csrf
                            <button class="admin-logout" type="submit"><i class="far fa-arrow-right-from-bracket"></i>Log out</button>
                        </form>
                    </div>
                </header>
                <main class="admin-content">
                    @if (session('status'))
                        <div class="alert alert-success admin-card mb-4">{{ session('status') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger admin-card mb-4">
                            <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                        </div>
                    @endif
                    @yield('content')
                </main>
                <footer class="admin-footer">BS Events CMS <span class="mx-1">&middot;</span> Content management</footer>
            </div>
        </div>
        <script>
            (() => {
                const sidebar = document.getElementById('admin-sidebar');
                const toggle = document.getElementById('admin-menu-toggle');
                const backdrop = document.getElementById('admin-backdrop');

                const setMenuOpen = (isOpen) => {
                    sidebar.classList.toggle('is-open', isOpen);
                    backdrop.classList.toggle('is-visible', isOpen);
                    toggle.setAttribute('aria-expanded', String(isOpen));
                };

                toggle.addEventListener('click', () => setMenuOpen(!sidebar.classList.contains('is-open')));
                backdrop.addEventListener('click', () => setMenuOpen(false));
            })();
        </script>
    @else
        <main class="auth-layout">
            <a class="auth-brand" href="{{ route('home') }}">
                <span class="admin-brand-mark"><i class="fas fa-sparkles"></i></span> BS EVENTS CMS
            </a>
            <div class="w-100" style="max-width:460px">
                @if ($errors->any())
                    <div class="alert alert-danger admin-card mb-3">
                        <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                    </div>
                @endif
                @yield('content')
            </div>
        </main>
    @endauth
</body>
</html>
