<?php

namespace App\Http\Livewire;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use RobertSeghedi\News\Models\Article;
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
            Column::make('Title'),
            Column::make('Category'),
            Column::make('Publish','published_at')->sortable(),
            Column::make('Author'),
            // Column::make('Status'),
            Column::make('View', 'counter')->sortable(),
            Column::make('Action'),
        ];
    }

    public function query(): Builder
    {
        return Article::query()
                // ->where('status', '!=', 3)
                ->when($this->getFilter('search'), fn ($query, $term) => $query->where('title', 'like', '%'.$term.'%'));
    }

    public function rowView(): string
    {
        return 'admin.articles.table';
    }

    // public function modalsView(): string
    // {
    //     return 'admin.pages.modal';
    // }
}
