<?php

namespace App\Filament\Resources;

use App\Models\Customer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ContentCreatorResource\Pages;

class ContentCreatorResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';
    protected static ?string $navigationGroup = 'Manajemen User';
    protected static ?string $navigationLabel = 'Content Creator';
    protected static ?string $modelLabel = 'Content Creator';
    protected static ?string $pluralModelLabel = 'Content Creator';

    public static function table(Table $table): Table
    {
        return $table
            ->query(
                Customer::query()
                    ->whereNotNull('tiktok_acc')
                    ->orWhereNotNull('ig_acc')
            )

            // ✅ ENABLE SELECT ALL
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])

            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),

                // 🔥 KATEGORI (DUMMY DULU)
                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->getStateUsing(function () {
                        return 'Beauty'; // dummy dulu
                    }),

                TextColumn::make('tiktok_acc')
                    ->label('Akun Tiktok')
                    ->placeholder('-'),

                TextColumn::make('ig_acc')
                    ->label('Akun IG')
                    ->placeholder('-'),

            ])

            // 🔥 FILTER
            ->filters([
                Filter::make('name')
                    ->form([
                        \Filament\Forms\Components\TextInput::make('name')
                            ->label('Nama')
                            ->placeholder('Cari nama...')
                    ])
                    ->query(function (Builder $query, array $data) {
                        return $query
                            ->when(
                                $data['name'],
                                fn ($query) => $query->where('name', 'like', '%' . $data['name'] . '%')
                            );
                    }),
                    
                SelectFilter::make('kategori')
                    ->label('Kategori')
                    ->options([
                        'Beauty' => 'Beauty',
                        'Fashion' => 'Fashion',
                        'Gaming' => 'Gaming',
                    ])
                    ->query(function ($query, array $data) {
                        if ($data['value'] ?? null) {
                            // dummy karena belum ada field kategori
                            return $query;
                        }
                        return $query;
                    }),
            ])

            ->actions([
                Tables\Actions\Action::make('approve')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->action(fn (Customer $record) =>
                        $record->update(['status' => 'active'])
                    ),

                Tables\Actions\Action::make('reject')
                    ->icon('heroicon-o-x-mark')
                    ->color('danger')
                    ->action(fn (Customer $record) =>
                        $record->update(['status' => 'inactive'])
                    ),

                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form->schema([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContentCreators::route('/'),
            'edit' => Pages\EditContentCreator::route('/{record}/edit'),
        ];
    }
}
