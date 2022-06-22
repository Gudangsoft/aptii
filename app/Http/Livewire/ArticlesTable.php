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
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class ArticlesTable extends DataTableComponent
{
    // protected $model = Article::class;

    public $columnSearch = [
        'title' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('updated_at', 'desc');
    }

    public array $bulkActions = [
        'export' => 'Export',
    ];

    public function export()
    {
        $articles = $this->getSelected();
        $this->clearSelected();

        return Excel::download(new UsersExport($articles), 'articles.xlsx');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
            ->sortable(),
            Column::make('Title')
            ->searchable()
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

    public function builder(): Builder
    {
        return Article::query()
            ->when($this->columnSearch['title'] ?? null, fn ($query, $title) => $query->where('articles.title', 'like', '%' . $title . '%'));
    }

}
