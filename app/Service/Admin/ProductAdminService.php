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

    public function getProductList(Request $request)
    {
        $productList = $this->productRepository->getProductList();
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
