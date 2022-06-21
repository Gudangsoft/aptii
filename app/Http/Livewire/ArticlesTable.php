<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use RobertSeghedi\News\Models\Article;
use Illuminate\Support\Str;
use RobertSeghedi\News\Models\News;

class ArticlesTable extends DataTableComponent
{
    protected $model = Article::class;
    // public string $defaultSortColumn = 'created_at';
    // public string $defaultSortDirection = 'desc';

    public $selected_id;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
            ->sortable(),
            Column::make('Title')
            ->format(function($value){
                return '<strong>'.$value.'</strong>';
            })
            ->html(),
            Column::make('Category')
            ->format(function($value, $column, $row) {
                return Str::upper($column->getCategory->name);
            }),
            Column::make('Author')
            ->format(function($value, $column, $row) {
                return $column->getUser->name;
            }),
            // Column::make('Author IP', 'author_ip')
            // ->format(function($value) {
            //     // return $value;
            //     try {
            //         $decrypted = Crypt::decryptString($value);
            //         return $decrypted;
            //     } catch (DecryptException $e) {
            //         return $e;
            //     }

            // }),
            Column::make('Publish','updated_at')->sortable()
            ->format(
                fn($value, $row, Column $column) =>
                "<span class='badge badge-light-dark'>".Carbon::parse($row->updated_at)->Format('d M Y')."</span>
                <span class='badge badge-light-warning'>".Carbon::parse($row->updated_at)->Format('H:i')."</span>"
            )->html(),

            ButtonGroupColumn::make('Actions')
            ->unclickable()
            ->buttons([
                LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                    ->title(fn($row) => 'View ' . $row->name)
                    ->location(fn($row) => route('articles.show', $row->id))
                    ->attributes(function($row) {
                        return [
                            'class' => 'btn btn-icon btn-primary',
                        ];
                    }),
                LinkColumn::make('Edit')
                    ->title(fn($row) => 'Edit')
                    ->location(fn($row) => route('articles.edit', $row->id))
                    ->attributes(function($row) {
                        return [
                            'class' => 'btn btn-icon btn-success',
                        ];
                    })
            ])
        ];
    }

    public function query(): Builder
    {
        return Article::query()
                // ->where('status', '!=', 3)
                ->orderByDesc('updated_at')
                ->when($this->getFilter('search'), fn ($query, $term) => $query->where('title', 'like', '%'.$term.'%'));
    }

    public function rowView(): string
    {
        return 'admin.article.table';
    }

    // public function modalsView(): string
    // {
    //     return 'admin.pages.modal';
    // }
}
