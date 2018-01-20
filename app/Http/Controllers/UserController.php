<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\GeneralUserRules;
use Illuminate\Http\Request;

class UserController extends MasterController
{
    Use GeneralUserRules;

    protected $index_view = 'admin.user.index';
    protected $create_view = 'admin.user.form';
    protected $edit_view = 'admin.user.form';
    protected $route_bind_model = 'user'; //Route Model Binding name in RouteServiceProvider
    protected $redirect_when_success = 'user.index'; //Route Name
    protected $datatable_buttons = [
        'edit',
        'delete'
    ];

    public function save($model = null)
    {
        if (!$model) {
            $model = new User();
        }
        return $this->saveHandler($model);
    }

    public function dataTable($model = null)
    {
        $builder = $this->prepareDataTable(User::class);
        return $this->dataTableMaker($builder);
    }
}
