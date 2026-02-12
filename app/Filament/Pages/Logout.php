<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Facades\Filament;

class Logout extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-arrow-left';
    protected static string $view = 'filament.pages.logout';
    protected static ?string $navigationLabel = 'Keluar';
    protected static ?string $navigationGroup = 'Sistem';

    public function mount()
    {
        Filament::auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        redirect('/admin');
    }
}
