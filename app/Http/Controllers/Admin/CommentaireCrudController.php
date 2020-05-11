<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentaireRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CommentaireCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CommentaireCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Commentaire');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/commentaire');
        $this->crud->setEntityNameStrings('commentaire', 'commentaires');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
         // $this->crud->setFromDb();
         $this->crud->addColumn([
            'label' => "Client",
            'type' => "select",
            'name' => 'client_id', // the column that contains the ID of that connected entity;
            'entity' => 'client', // the method that defines the relationship in your Model
            'attribute' => "nom", // foreign key attribute that is shown to user
            'model' => "App\Models\Client", // foreign key model
                // optional
        ]);
        $this->crud->addColumn([
            'label' => "Produit",
            'type' => "select",
            'name' => 'produit_id', // the column that contains the ID of that connected entity;
            'entity' => 'produit', // the method that defines the relationship in your Model
            'attribute' => "nom", // foreign key attribute that is shown to user
            'model' => "App\Models\Produit", // foreign key model
            // optional
        ]);
        $this->crud->addColumn([
            'label' => 'Corps',
            'name' => 'texte',
            'type' => 'text',
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CommentaireRequest::class);

        // TODO: remove setFromDb() and manually define Fields
       //  $this->crud->setFromDb();
        $this->crud->addField([
            'label' => "Client",
            'type' => "select",
            'name' => 'client_id', // the column that contains the ID of that connected entity;
            'entity' => 'client', // the method that defines the relationship in your Model
            'attribute' => "nom", // foreign key attribute that is shown to user
            'model' => "App\Models\Client", // foreign key model
            // optional
        ]);
        $this->crud->addField([
            'label' => "Produit",
            'type' => "select",
            'name' => 'produit_id', // the column that contains the ID of that connected entity;
            'entity' => 'produit', // the method that defines the relationship in your Model
            'attribute' => "nom", // foreign key attribute that is shown to user
            'model' => "App\Models\Produit", // foreign key model
            // optional
        ]);
        $this->crud->addField([
            'label' => 'Corps',
            'name' => 'texte',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'label' => 'Corps',
            'name' => 'date_pub',
            'type' => 'datetime',

        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
