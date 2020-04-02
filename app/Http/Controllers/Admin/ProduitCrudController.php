<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProduitRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProduitCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProduitCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Produit');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/produit');
        $this->crud->setEntityNameStrings('produit', 'produits');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // $this->crud->setFromDb();
        $this->crud->addColumn([
            'name' => 'nom',
            'label' => 'Nom produit ',
            'type' => 'text'
        ]);
        $this->crud->addColumn([
            'label' => "Category",
            'type' => 'text',
            'name' => 'catID', // the db column for the foreign key
            'entity' => 'category', // the method that defines the relationship in your Model
            'attribute' => 'nomCat', // foreign key attribute that is shown to user
            'model' => "App\Models\Catproduit",
        ]);
        $this->crud->addColumn([
            'name' => 'prix',
            'label' => 'Prix  ',
            'suffix' => " DH",
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'isPromo',
            'label' => 'En Promotion  ',
            'type' => 'radio',
            'options'     => [
                    0 => "Non",
                    1 => "Oui"
                      ]
        ]);
        $this->crud->addColumn([
            'name' => 'remise',
            'label' => 'Remise',
            'suffix' => " DH",
            'type' => 'number'
        ]);
        $this->crud->addColumn([
            'name' => 'imgPath',
            'label' => 'Image',
            'type' => 'image',
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProduitRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // $this->crud->setFromDb();
        $this->crud->addField([
            'name' => 'nom',
            'label' => 'Nom produit ',
            'type' => 'text'
        ]);
        $this->crud->addField([  // Select

            'label' => "Category",
            'type' => 'select',
            'name' => 'catID', // the db column for the foreign key
            'entity' => 'category', // the method that defines the relationship in your Model
            'attribute' => 'nomCat', // foreign key attribute that is shown to user
            'model' => "App\Models\Catproduit",
        ]);
        $this->crud->addField([
            'name' => 'prix',
            'label' => 'Prix  ',
            'type' => 'number'
        ]);
        $this->crud->addField([
            'name' => 'remise',
            'label' => 'Remise  ',
            'type' => 'number'
        ]);
        $this->crud->addField([
            'name' => 'date_debut',
            'label' => 'Date debut  ',
            'type' => 'date',
            'date_picker_options' => [
                'todayBtn' => 'linked',
                'format' => 'dd-mm-yyyy',
                'language' => 'fr'
            ],
        ]);
        $this->crud->addField([
            'name' => 'date_fin',
            'label' => 'Date fin  ',
            'type' => 'date',
            'date_picker_options' => [
                'todayBtn' => 'linked',
                'format' => 'dd-mm-yyyy',
                'language' => 'fr'
            ],
        ]);
        $this->crud->addField([
            'name' => 'isPromo',
            'label' => 'En Promotion  ',
            'type' => 'checkbox'
        ]);
        $this->crud->addField([
            'name' => 'imgPath',
            'label' => 'Image',
            //'type' => 'browse'
            'filename' => "image_filename", // set to null if not needed
            'type' => 'base64_image',
            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
            'crop' => true, // set to true to allow cropping, false to disable
            'src' => NULL, // null to read straight from DB, otherwise set to model accessor function
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
