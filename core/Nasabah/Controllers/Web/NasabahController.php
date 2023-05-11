<?php

namespace Core\Nasabah\Controllers\Web;

use Core\Nasabah\Models\Nasabah;
use Core\Nasabah\Requests\NasabahRequest;
use Core\Nasabah\Tables\NasabahTable;
use ProtoneMedia\Splade\Facades\SEO;
use ProtoneMedia\Splade\Facades\Splade;

class NasabahController extends \Core\Base\Controllers\Web\Controller
{
    protected $table;

    protected $model;

    protected $data;

    public function __construct(Nasabah $model, NasabahTable $table)
    {
        parent::__construct();
        $this->model = $model;
        $this->table = $table;
        $this->data['title'] = 'Nasabah';
        $this->data['url_index'] = url('admin/nasabah');
        $this->data['url_create'] = url('admin/nasabah/create');
        SEO::title($this->data['title'])
            ->description('Nasabah')
            ->keywords('aplikasi, nasabah, junior programmer');
    }

    public function index()
    {
        $this->data['models'] = $this->table;
        $this->data['number'] = 1;

        return view($this->path.__FUNCTION__, $this->data);
    }

    public function create()
    {
        $this->data['model'] = $this->model;

        return view($this->path.__FUNCTION__, $this->data);
    }

    public function store(NasabahRequest $request)
    {
        $this->model->create($request->validated());
        Splade::toast('Berhasil disimpan')
            ->success()
            ->centerTop()
            ->autoDismiss(3);

        return redirect($this->data['url_index']);
    }

    public function edit($id)
    {
        $this->data['model'] = $this->model->findOrFail($id);
        $this->data['url_update'] = url('admin/nasabah/'.$id);

        return view($this->path.__FUNCTION__, $this->data);
    }

    public function update(NasabahRequest $request, $id)
    {
        $current_model = $this->model->find($id);
        $current_model->update($request->validated());
        Splade::toast('Berhasil diupdate')
            ->success()
            ->centerTop()
            ->autoDismiss(3);

        return redirect($this->data['url_index']);
    }

    public function destroy($id)
    {
        $current_model = $this->model->findOrFail($id);
        $current_model->delete();
        Splade::toast('Berhasil dihapus')
            ->success()
            ->centerTop()
            ->autoDismiss(3);

        return redirect($this->data['url_index']);
    }
}
