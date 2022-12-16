<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PageWeb;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Illuminate\Support\Str;

class PageTable extends DataTableComponent
{
    protected $model = PageWeb::class;

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
            Column::make("Title", "title")
            ->searchable()
            ->format(function($value){
                return '<strong>'.Str::words($value, 5, '...').'</strong>';
            })->html(),
            Column::make("Url", "slug")
            ->searchable()
            ->format(function($value){
                return '<i>/page/'.$value.'</i>';
            })->html(),
            Column::make('Author', 'created_by')
            ->format(function($value, $column, $row) {
                return $column->getAdd->name;
            }),
            Column::make("Created at", "created_at")
            ->sortable(),
            ButtonGroupColumn::make('Actions')
            ->unclickable()
            ->buttons([
                LinkColumn::make('Detail') // make() has no effect in this case but needs to be set anyway
                    ->title(fn($row) => 'Detail ')
                    ->location(fn($row) => route('pages.show', $row->id))
                    ->attributes(function($row) {
                        return [
                            'class' => 'btn btn-sm btn-icon btn-primary',
                        ];
                    }),
                LinkColumn::make('Edit')
                    ->title(fn($row) => 'Edit')
                    ->location(fn($row) => route('pages.edit', $row->id))
                    ->attributes(function($row) {

                        return [
                            'class' => 'btn btn-sm btn-icon btn-success',
                        ];
                    }),
                LinkColumn::make('Delete')
                    ->title(fn($row) => 'Delete')
                    ->location(fn($row) => '#')
                    ->attributes(function($row) {
                        return [
                            'class' => 'btn btn-sm btn-icon btn-danger',
                            'wire:click' => "deleteModal($row->id)",
                        ];
                    }),
            ])
        ];
    }

    public function builder(): Builder
    {

        return PageWeb::query()
            ->where('created_by', auth()->user()->id)
            ->when($this->columnSearch['title'] ?? null, fn ($query, $title) => $query->where('pages.title', 'like', '%' . $title . '%'));

    }


    public function deleteModal($id)
    {
        $this->selected_id = $id;
        $this->dispatchBrowserEvent('openModalDelete');
    }

    public function deleteStatus(){
        PageWeb::findOrFail($this->selected_id)->delete();
        $this->dispatchBrowserEvent('closeModalDelete');
    }

    public function delete(){
        PageWeb::whereIn('id', $this->getSelected())->delete();
        $message = 'Page deleted successfully !';
        $this->dispatchBrowserEvent('success', ['message' => $message]);
    }

    public function customView(): string
    {
        return 'admin.pages.modal';
    }
}
