<?php

namespace App\Filament\Resources;

use App\Enum\MediaCollection;
use App\Enum\ProjectStatus;
use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    ToggleButtons::make('status')
                        ->inline()
                        ->default('new')
                        ->options(ProjectStatus::class)
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\TextInput::make('title_en')
                        ->required()
                        ->maxLength(100)
                        ->live(onBlur: true)
                        ->afterStateUpdated(
                            fn(string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set(
                                'slug',
                                Str::slug($state)
                            ) : null
                        ),
                    Forms\Components\TextInput::make('title_ar')
                        ->maxLength(100),
                    Forms\Components\TextInput::make('title_sp')
                        ->maxLength(100),
                    Forms\Components\TextInput::make('title_sw')
                        ->maxLength(100),
                    Forms\Components\TextInput::make('sub_title_en')
                        ->maxLength(150),
                    Forms\Components\TextInput::make('sub_title_ar')
                        ->maxLength(150),
                    Forms\Components\TextInput::make('sub_title_sp')
                        ->maxLength(150),
                    Forms\Components\TextInput::make('sub_title_sw')
                        ->maxLength(150),
                    Forms\Components\RichEditor::make('description_en')
                        ->required(),
                    Forms\Components\RichEditor::make('description_ar')
                        ->maxLength(255),
                    Forms\Components\RichEditor::make('description_sp')
                        ->maxLength(255),
                    Forms\Components\RichEditor::make('description_sw')
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('start_date'),
                    Forms\Components\DatePicker::make('delivery_date'),
                    Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->dehydrated()
                        ->required()
                        ->unique(Project::class, 'slug', ignoreRecord: true),
                    Forms\Components\TextInput::make('url')
                        ->url(),
                    Forms\Components\TextInput::make('total_price')
                        ->numeric(),
                    Forms\Components\TextInput::make('total_paid')
                        ->numeric(),
                    Forms\Components\TextInput::make('total_left')
                        ->numeric(),
                    Forms\Components\TextInput::make('total_cost')
                        ->numeric(),
                    Forms\Components\TextInput::make('sales_commission')
                        ->numeric(),
                    SpatieTagsInput::make('tags'),
                    Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name_en')
                        ->searchable()
                        ->required(),
                    Forms\Components\Select::make('client_id')
                        ->relationship('client', 'first_name')
                        ->searchable()
                        ->required(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make(
                        MediaCollection::PROJECT_LOGO->value
                    )
                        ->collection(MediaCollection::PROJECT_LOGO->value)
                        ->label('LOGO')
                        ->image()
                        ->columnSpanFull(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make(
                        MediaCollection::PROJECT_HOME_IMAGE->value
                    )
                        ->collection(MediaCollection::PROJECT_HOME_IMAGE->value)
                        ->label('Main Image')
                        ->image()
                        ->columnSpanFull(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make(
                        MediaCollection::PROJECT_IMAGES->value
                    )
                        ->multiple()
                        ->collection(MediaCollection::PROJECT_IMAGES->value)
                        ->label('Images')
                        ->columnSpanFull(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make(MediaCollection::PROJECT_LOGO->value)
                    ->collection(MediaCollection::PROJECT_LOGO->value)
                    ->label('Logo')
                    ->toggleable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make(MediaCollection::PROJECT_HOME_IMAGE->value)
                    ->collection(MediaCollection::PROJECT_HOME_IMAGE->value)
                    ->label('Main Image')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('title_en')
                    ->label('Title')
                    ->searchable()
                    ->toggleable(),
                SpatieTagsColumn::make('tags'),
                Tables\Columns\TextColumn::make('status')
                    ->badge(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
