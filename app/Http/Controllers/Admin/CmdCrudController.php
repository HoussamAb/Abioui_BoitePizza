<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CmdRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CmdCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CmdCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Cmd');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/cmd');
        $this->crud->setEntityNameStrings('cmd', 'cmds');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();

        $this->crud->addColumn([
            'label' => "Client",
            'name' => 'client_id', // the db column for the foreign key
            'entity' => 'client', // the method that defines the relationship in your Model
            'attribute' => 'nom', // foreign key attribute that is shown to user
            'type' => "select",
            // optional
            'model' => "App\Models\Client", // foreign key model
            // 'options'   => (function ($query) {return $query->orderBy('nom', 'ASC')->get();}),
            // // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        ]);
        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'text',

        ]);
        $this->crud->addColumn([
            'name' => 'adressLiv',
            'label' => 'Adresse de livraison ',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name'        => 'type', // the name of the db column
            'label'       => 'type', // the input label
            'type'        => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                'domicile' => "domicile",
                'expresse' => "expresse",
                'none' => "sure place",
            ],

        ]);
        $this->crud->addColumn([
            'name' => 'realise',
            'label' => 'Prête ?',
            'type' => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                '1' => "oui",
                '0' => "non",
                ],
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CmdRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addField([
            'label' => "Client",
           'type' => 'select2',
           'name' => 'client_id', // the db column for the foreign key
           'entity' => 'client', // the method that defines the relationship in your Model
           'attribute' => 'nom', // foreign key attribute that is shown to user

           // optional
           'model' => "App\Models\Client", // foreign key model
           'default' => 2, // set the default value of the select2
           // 'options'   => (function ($query) {return $query->orderBy('nom', 'ASC')->get();}),
            // // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        ]);
        $this->crud->addField([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'datetime',
        ]);
        $this->crud->addField([
            'name' => 'adressLiv',
            'label' => 'Adresse de livraison ',
            'type' => 'textarea'
        ]);
        $this->crud->addField([
            'name'        => 'type', // the name of the db column
            'label'       => 'type', // the input label
            'type'        => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                'domicile' => "domicile",
                'expresse' => "expresse",
                'none' => "sure place",
            ],
            'inline'      => true,

        ]);
        $this->crud->addField([
            'name' => 'realise',
            'label' => 'Prête ?',
            'type' => 'checkbox'
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation(){
        $this->crud->addColumn([
            'label' => "Client",
            'name' => 'client_id', // the db column for the foreign key
            'entity' => 'client', // the method that defines the relationship in your Model
            'attribute' => 'nom', // foreign key attribute that is shown to user
            'type' => "select",
            // optional
            'model' => "App\Models\Client", // foreign key model
            // 'options'   => (function ($query) {return $query->orderBy('nom', 'ASC')->get();}),
            // // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        ]);
        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'text',

        ]);
        $this->crud->addColumn([
            'name' => 'adressLiv',
            'label' => 'Adresse de livraison ',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name'        => 'type', // the name of the db column
            'label'       => 'type', // the input label
            'type'        => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                'domicile' => "domicile",
                'expresse' => "expresse",
                'none' => "sure place",
            ],

        ]);
        $this->crud->addColumn([
            'name' => 'realise',
            'label' => 'Prête ?',
            'type' => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                '1' => "oui",
                '0' => "non",
            ],
        ]);
    }
}
