<?php


namespace App\Providers;


use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\ICategoryRepository;
use App\Repositories\Combo\ComboRepository;
use App\Repositories\Combo\IComboRepository;
use App\Repositories\ComboProduct\ComboProductRepository;
use App\Repositories\ComboProduct\IComboProductRepository;
use App\Repositories\Invoice\IInvoiceRepository;
use App\Repositories\Invoice\InvoiceRepository;
use App\Repositories\InvoiceDetail\IInvoiceDetailRepository;
use App\Repositories\InvoiceDetail\InvoiceDetailRepository;
use App\Repositories\ListSlider\IListSliderRepository;
use App\Repositories\ListSlider\ListSliderRepository;
use App\Repositories\Page\IPageRepository;
use App\Repositories\Page\PageRepository;
use App\Repositories\Post\IPostRepository;
use App\Repositories\Post\PostRepository;
use App\Repositories\Product\IProductRepository;
use App\Repositories\Product\ProductRepository;
use App\Repositories\ProductCategory\IProductCategoryRepository;
use App\Repositories\ProductCategory\ProductCategoryRepository;
use App\Repositories\ProductPrice\IProductPriceRepository;
use App\Repositories\ProductPrice\ProductPriceRepository;
use App\Repositories\Slider\ISliderRepository;
use App\Repositories\Slider\SliderRepository;
use App\Repositories\TransactionDetail\ITransactionDetailRepository;
use App\Repositories\TransactionDetail\TransactionDetailRepository;

class RepositoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {

    }

    public function boot():void
    {
        app()->singleton(ICategoryRepository::class,CategoryRepository::class);
        app()->singleton(IPostRepository::class,PostRepository::class);
        app()->singleton(IComboRepository::class,ComboRepository::class);
        app()->singleton(IComboProductRepository::class,ComboProductRepository::class);
        app()->singleton(IInvoiceRepository::class,InvoiceRepository::class);
        app()->singleton(IInvoiceDetailRepository::class,InvoiceDetailRepository::class);
        app()->singleton(IListSliderRepository::class,ListSliderRepository::class);
        app()->singleton(IPageRepository::class,PageRepository::class);
        app()->singleton(IProductRepository::class,ProductRepository::class);
        app()->singleton(IProductCategoryRepository::class,ProductCategoryRepository::class);
        app()->singleton(IProductPriceRepository::class,ProductPriceRepository::class);
        app()->singleton(ISliderRepository::class,SliderRepository::class);
        app()->singleton(ITransactionDetailRepository::class,TransactionDetailRepository::class);
    }
}
