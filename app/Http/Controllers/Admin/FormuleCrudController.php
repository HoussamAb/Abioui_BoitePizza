<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FormuleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FormuleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FormuleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Formule');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/formule');
        $this->crud->setEntityNameStrings('formule', 'formules');
    }

    protected function setupShowOperation(){
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
            'name' => 'nomFormule',
            'label' => 'Formule',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'description',
            'label' => 'description',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'prix',
            'label' => 'prix',
            'suffix' => " DH",
            'type' => 'number'
        ]);
    }
    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
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
            'name' => 'nomFormule',
            'label' => 'Formule',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'description',
            'label' => 'description',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'name' => 'prix',
            'label' => 'prix',
            'suffix' => " DH",
            'type' => 'number'
        ]);

    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(FormuleRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();

        $this->crud->addField([
            'name' => 'imgPath',
            'label' => 'Image',
            'type' => 'browse'
        ]);
        $this->crud->addField([
            'name' => 'nomFormule',
            'label' => 'Formule',
            'type' => 'text'
        ]);
        $this->crud->addField([
            'name' => 'description',
            'label' => 'description',
            'type' => 'textarea'
        ]);
        $this->crud->addField([
            'name' => 'prix',
            'label' => 'prix',
            'type' => 'number',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
