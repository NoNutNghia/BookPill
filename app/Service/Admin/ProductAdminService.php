<?php

namespace App\Service\Admin;

use App\Service\Repository\GenreRepositoryInterface;
use App\Service\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductAdminService
{
    private ProductRepositoryInterface $productRepository;
    private GenreRepositoryInterface $genreRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     * @param GenreRepositoryInterface $genreRepository
     */
    public function __construct(
        ProductRepositoryInterface $productRepository,
        GenreRepositoryInterface $genreRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->genreRepository = $genreRepository;
    }

    public function getProductAdd(Request $request)
    {
        $genreList = $this->genreRepository->getGenre();
        return view('pages.admin.product.add',
            compact('genreList')
        );
    }

    public function addProduct(Request $request)
    {
        return $request;
    }

    public function getProductList(Request $request)
    {
        if(!$request->searchKey) {
            $key = '%%';
        } else {
            $key = '%' . str_replace('%', '\%', trim($request->searchKey)) . '%';
        }

        $productList = $this->productRepository->getProductAdminList($key);
        return view('pages.admin.product.list', compact('productList'));
    }

    public function getProductDetail(Request $request)
    {
        $foundProduct = $this->productRepository->getProductDetail($request->id);
        $genreList = $this->genreRepository->getGenre();
        $imageList = $this->getImageFile($foundProduct->id);
        $genreProduct = collect(json_decode($foundProduct->genre))->map(function ($genre, $key) {
            return (int) $genre;
        });
        return view('pages.admin.product.detail',
            compact('foundProduct', 'genreList', 'genreProduct', 'imageList')
        );
    }

    public function getProductEdit(Request $request)
    {
        $foundProduct = $this->productRepository->getProductDetail($request->id);
        $genreList = $this->genreRepository->getGenre();
        $imageList = $this->getImageFile($foundProduct->id);
        $genreProduct = collect(json_decode($foundProduct->genre))->map(function ($genre, $key) {
            return (int) $genre;
        });
        return view('pages.admin.product.edit',
            compact('foundProduct', 'genreList', 'genreProduct', 'imageList')
        );
    }

    public function editProduct(Request $request)
    {
        return $request;
    }

    private function getImageFile($id)
    {
        $fileList = collect();

        $files = Storage::files('public/product_image/' . $id);

        foreach ($files as $file)
        {
            $fileList->push(basename($file));
        }

        return $fileList;
    }
}
