<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClientRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ClientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Client');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/client');
        $this->crud->setEntityNameStrings('client', 'clients');
    }
    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false);

        $this->crud->addColumn([
            'name' => 'nom',
            'label' => 'Nom',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'prenom',
            'label' => 'Prénom',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'login',
            'label' => 'pseudo',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'imgPath',
            'label' => 'Image',
            'type' => 'image',
            // 'prefix' => 'folder/subfolder/',
            // image from a different disk (like s3 bucket)
            // 'disk' => 'disk-name',
            // optional width/height if 25px is not ok with you
            'height' => '80px',
            'width' => '80px',
        ]);
        $this->crud->addColumn([
            'name' => 'admin',
            'label' => 'Role',
            'type' => 'radio',
            'options'     => [
                'o' => "admin",
                'n' => "simple"
            ]
        ]);
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
        $this->crud->addColumn([
            'name' => 'nom',
            'label' => 'Nom',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'prenom',
            'label' => 'Prénom',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'login',
            'label' => 'pseudo',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'imgPath',
            'label' => 'Image',
            'type' => 'image',
            // 'prefix' => 'folder/subfolder/',
            // image from a different disk (like s3 bucket)
            // 'disk' => 'disk-name',
            // optional width/height if 25px is not ok with you
             'height' => '80px',
             'width' => '80px',
        ]);
        $this->crud->addColumn([
            'name' => 'admin',
            'label' => 'Role',
            'type' => 'radio',
            'options'     => [
                'o' => "admin",
                'n' => "simple"
            ]
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ClientRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addField([
            'name' => 'nom',
            'label' => 'Nom',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'prenom',
            'label' => 'Prénom',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'adresse',
            'label' => 'adresse client',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'email',
            'label' => 'Email',
            'type' => 'email'
        ]);
        $this->crud->addField([
            'name' => 'login',
            'label' => 'pseudo',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'motdepasse',
            'label' => 'mot de passe',
            'type' => 'password'
        ]);
        $this->crud->addField([
            'name' => 'imgPath',
            'label' => 'Image',
            'type' => 'browse'
        ]);
        $this->crud->addField([
            'name'        => 'admin', // the name of the db column
            'label'       => 'Role', // the input label
            'type'        => 'radio',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                'o' => "admin",
                'n' => "simple"
            ]
        ]);
    }

    protected function setupUpdateOperation()
    {
         $this->setupCreateOperation();
    }
}
