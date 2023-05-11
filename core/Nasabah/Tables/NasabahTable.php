<?php

namespace Core\Nasabah\Tables;

use Core\Nasabah\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class NasabahTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('nama', 'LIKE', "%{$value}%")
                        ->orWhere('tempat_lahir', 'LIKE', "%{$value}%")
                        ->orWhere('tanggal_lahir', 'LIKE', "%{$value}%")
                        ->orWhere('penghasilan', 'LIKE', "%{$value}%")
                        ;
                });
            });
        });

        return QueryBuilder::for(Nasabah::class)
            ->defaultSort('-id')
            ->allowedSorts(['nama','tempat_lahir','tanggal_lahir','penghasilan'])
            ->allowedFilters(['nama','tempat_lahir','tanggal_lahir','penghasilan', $globalSearch]);

        // return Lesson::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $perPage = 15;
        if (request('perPage') != '') {
            $perPage = (int) request('perPage');
        }
        $table
            ->withGlobalSearch()
            ->defaultSort('-id')
            // ->column('number',label: 'No',alignment: 'left',classes:'w-5')
            ->column('nama', sortable: true, searchable: true, canBeHidden: false, alignment: 'left')
            ->column('tempat_lahir', sortable: true, searchable: true)
            ->column('tanggal_lahir', sortable: true, searchable: true)
            ->column('penghasilan', sortable: true, searchable: true)
            ->column('action', alignment: 'right', exportAs: false)
            ->bulkAction(
                label: 'Hapus',
                each: fn (Nasabah $project) => $project->delete(),
                after: fn () => Toast::info('Berhasil dihapus!')
            )
            ->export()
            ->paginate($perPage);
    }
}
