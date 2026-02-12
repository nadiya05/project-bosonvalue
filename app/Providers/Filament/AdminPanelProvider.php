<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Filament\Navigation\NavigationItem;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->brandName('BosonValue')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
            ])
            ->navigationItems([
                NavigationItem::make('Role & Hak Akses')
                    ->url('#')
                    ->icon('heroicon-o-shield-check')
                    ->group('Manajemen User'),

                NavigationItem::make('Akun Pelanggan')
                    ->url('#')
                    ->icon('heroicon-o-user')
                    ->group('Manajemen User'),

                NavigationItem::make('Kategori Pengguna')
                    ->url('#')
                    ->icon('heroicon-o-tag')
                    ->group('Manajemen User'),

                NavigationItem::make('Content Creator')
                    ->url('#')
                    ->icon('heroicon-o-pencil')
                    ->group('Manajemen User'),

                NavigationItem::make('Misi')
                    ->url('#')
                    ->icon('heroicon-o-flag')
                    ->group('Manajemen Program'),

                NavigationItem::make('Partisipasi Misi')
                    ->url('#')
                    ->icon('heroicon-o-users')
                    ->group('Manajemen Program'),

                NavigationItem::make('Voucher')
                    ->url('#')
                    ->icon('heroicon-o-gift')
                    ->group('Manajemen Reward & Voucher'),

                NavigationItem::make('Klaim Voucher')
                    ->url('#')
                    ->icon('heroicon-o-document')
                    ->group('Manajemen Reward & Voucher'),

                NavigationItem::make('Approve Reward')
                    ->url('#')
                    ->icon('heroicon-o-check')
                    ->group('Manajemen Reward & Voucher'),

                NavigationItem::make('Gift')
                    ->url('#')
                    ->icon('heroicon-o-gift')
                    ->group('Manajemen Reward & Voucher'),

                NavigationItem::make('Kategori')
                    ->url('#')
                    ->icon('heroicon-o-tag')
                    ->group('Master Data'),

                NavigationItem::make('Keluar')
                ->url('/admin/logout')
                ->icon('heroicon-o-arrow-left')
                ->group('Sistem'),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
