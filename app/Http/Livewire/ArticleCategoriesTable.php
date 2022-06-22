<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use RobertSeghedi\News\Models\Category;
use Illuminate\Support\Str;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class ArticleCategoriesTable extends DataTableComponent
{
    protected $model = Category::class;
    public $selected_id;

    public $columnSearch = [
        'name' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('updated_at', 'desc');
    }

    public function createModal($id)
    {
        $this->selected_id = $id;
        $this->dispatchBrowserEvent('openModalCreate');
    }

    public function createStatus(){
        $save = Category::findOrFail($this->selected_id);
        dd($save);
        $this->dispatchBrowserEvent('closeModalCreate');
    }

    public function editModal($id)
    {
        $this->selected_id = $id;
        $save = Category::findOrFail($id);
        $save->name = $this->name;
        $save->slug = Str::slug($name);
        $save->save();

        // $this->dispatchBrowserEvent('openModalCreate');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable()
                ->format(function($value){
                    return '<strong>'.Str::title($value).'</strong>';
                })
                ->html(),
            Column::make("Created By", "created_by")
                ->sortable()
                ->format(function($value, $column, $row) {
                    return $column->getUser->name;
                }),
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
                    ->title(fn($row) => 'View ')
                    ->location(fn($row) => route('articles.show', $row->id))
                    ->attributes(function($row) {
                        return [
                            'class' => 'btn btn-icon btn-primary',
                        ];
                    }),
                LinkColumn::make('Edit')
                    ->title(fn($row) => 'Edit')
                    ->location(fn($row) => '#')
                    ->attributes(function($row) {
                        return [
                            'class' => 'btn btn-icon btn-success',
                            'wire:click' => "editModal($row->id)",
                        ];
                    }),
                LinkColumn::make('Delete')
                    ->title(fn($row) => 'Delete')
                    ->location(fn($row) => '#')
                    ->attributes(function($row) {
                        return [
                            'class' => 'btn btn-icon btn-danger',
                            'wire:click' => "deleteModal($row->id)",
                        ];
                    }),
            ])
        ];
    }

    public function builder(): Builder
    {
        return Category::query()
            ->when($this->columnSearch['name'] ?? null, fn ($query, $title) => $query->where('categories.name', 'like', '%' . $title . '%'));
    }

    public function customView(): string
    {
        return 'admin.article.category.modal';
    }
}