<?php

namespace App\Http\Controllers\Admin;

use App\Bizz\Upload;
use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Combo\ComboStoreRequest;
use App\Http\Requests\Combo\ComboUpdateRequest;
use App\Models\Combo;
use App\Models\ComboProduct;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\Combo\IComboRepository;
use App\Transformers\Combo\ListComboAdminTransformer;
use Illuminate\Http\Request;

class ComboController extends BaseWebController
{
    public $repository;
    public $upload;

    public function __construct(
        IComboRepository $repository,
        Upload $upload
    )
    {
        $this->repository = $repository;
        $this->upload = $upload;
    }

    public function index()
    {
        $entries = $this->repository->model()->with([
            'productCategory',
            'products'
        ])->get();
        $transformer = new ListComboAdminTransformer();
        $this->setTransformer($transformer);
        $data = $this->transformData($entries, $this->transformer);
        return view('admin.combo.index')->with([
            'data' => $data['data']
        ]);
    }

    public function create()
    {
        $categories = ProductCategory::where('type', BaseEnum::TypeCombo)
            ->where('status', BaseEnum::Active)
            ->get();
        $products = Product::where('status', BaseEnum::Active)->get();
        return view('admin.combo.add')->with([
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function generateSlug(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        return response()->json(['slug' => $slug]);
    }

    public function store(ComboStoreRequest $request)
    {
        $data = $request->all();
        $dataProducts = $data['products'];
        $dataQuantityProducts = $data['product_quantity'];
        $arrayComboProduct = array();
        $i =0;
        foreach ($dataProducts as $key => $dataProduct) {
            foreach ($dataQuantityProducts as $keyQuantity => $quantityProduct) {
                if ($key == $keyQuantity) {
                    $arrayComboProduct[$i]['product_id'] = $dataProduct[0];
                    $arrayComboProduct[$i]['quantity'] = $quantityProduct[0];
                    $i++;
                }
            }
        }
        if (array_key_exists('files', $data)) {
            $file = $data['files'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        } else {
            $image = null;
        }
        $entry = Combo::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'body' => $data['content'],
            'image' => $image,
            'slug' => $data['slug'],
            'meta_description' => $data['description'],
            'meta_keywords' => $data['keywords'],
            'status' => $data['status'],
            'quantity' => $data['quantity'],
            'freeship' => $data['freeship'],
            'is_hot' => $data['is_hot'],
            'product_category_id' => $data['category'],
        ]);
        $entry->products()->attach($arrayComboProduct);
        return \redirect('/admin/combos');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = ProductCategory::where('type',BaseEnum::TypeCombo)->get();
        $combo = Combo::with([
            'productCategory',
            'products'
        ])->find($id);
        $products = Product::where('status', BaseEnum::Active)->get();
        $comboProducts = ComboProduct::query()
            ->select('product_id','quantity')
        ->where('combo_id',$id)
            ->get()
            ->toArray();
        $comboProducts = array_column($comboProducts,'quantity', 'product_id');
        $selectedCategory = @$combo->productCategory->id;
        return view('admin.combo.edit')->with(
            [
                'combo' => $combo,
                'selectedCategory' => $selectedCategory,
                'categories' => $categories,
                'products' => $products,
                'comboProducts' => $comboProducts,
            ]
        );
    }


    public function update(ComboUpdateRequest $request, $id)
    {
        $data = $request->all();
        $dataProducts = $data['products'];
        $dataQuantityProducts = $data['product_quantity'];
        $arrayComboProduct = array();
        $i =0;
        foreach ($dataProducts as $key => $dataProduct) {
            foreach ($dataQuantityProducts as $keyQuantity => $quantityProduct) {
                if ($key == $keyQuantity) {
                    $arrayComboProduct[$i]['product_id'] = $dataProduct[0];
                    $arrayComboProduct[$i]['quantity'] = $quantityProduct[0];
                    $i++;
                }
            }
        }
        if (array_key_exists('newimage', $data)) {
            $file = $data['newimage'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        } else {
            $image = null;
        }
        $entry = Combo::find($id);
        if ($image) {
            $entry->update([
                'name' => $data['name'],
                'code' => $data['code'],
                'body' => $data['content'],
                'image' => $image,
                'slug' => $data['slug'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
                'status' => $data['status'],
                'quantity' => $data['quantity'],
                'freeship' => $data['freeship'],
                'is_hot' => $data['is_hot'],
                'product_category_id' => $data['category'],
            ]);
        } else {
            $entry->update([
                'name' => $data['name'],
                'code' => $data['code'],
                'body' => $data['content'],
                'slug' => $data['slug'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
                'status' => $data['status'],
                'quantity' => $data['quantity'],
                'freeship' => $data['freeship'],
                'is_hot' => $data['is_hot'],
                'product_category_id' => $data['category'],
            ]);
        }
        $entry->products()->sync($arrayComboProduct);
        return \redirect('/admin/combos');
    }

    public function destroy($id)
    {
        $entry = Combo::find($id);
        $entry->products()->sync([]);
        $entry->productPrices()->delete();
        $entry->delete();
        return \redirect('/admin/combos');
    }
}
