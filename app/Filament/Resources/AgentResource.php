<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgentResource\Pages;
use App\Filament\Resources\AgentResource\RelationManagers;
use App\Models\Agent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AgentResource extends Resource
{
    protected static ?string $model = Agent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canCreate(): bool
    {
        return false;
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            //     Forms\Components\TextInput::make('name')
            //         ->required()
            //         ->maxLength(255),
            //     Forms\Components\TextInput::make('email')
            //         ->email()
            //         ->required()
            //         ->maxLength(255),
            //     Forms\Components\DateTimePicker::make('email_verified_at'),
            //     Forms\Components\TextInput::make('address')
            //         ->required()
            //         ->maxLength(255),
            //     Forms\Components\TextInput::make('number')
            //         ->required()
            //         ->maxLength(255),
            //     Forms\Components\TextInput::make('password')
            //         ->password()
            //         ->required()
            //         ->maxLength(255),
            //     Forms\Components\FileUpload::make('image')
            //         ->image(),
                Forms\Components\DatePicker::make('expiry_date')
                    ->required(),
                // Forms\Components\Toggle::make('status')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('number')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('expiry_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('status')
                    ,
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAgents::route('/'),
            'create' => Pages\CreateAgent::route('/create'),
            // 'edit' => Pages\EditAgent::route('/{record}/edit'),
        ];
    }
}
