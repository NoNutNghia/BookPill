<?php

namespace App\Service;

use App\Service\Repository\GenreRepositoryInterface;
use App\Service\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductService
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

        $genreList = $this->genreRepository->getGenre();

        return view('pages.product.main')->with(array(
            'productList' => $productList,
            'genreList' => $genreList
        ));
    }

    public function getProductDetail(Request $request)
    {
        $foundProduct = $this->productRepository->getProductDetail($request->id);

        $imageList = $this->getImageFile($request->id);

        $foundProduct->genre = json_decode($foundProduct->genre);

        $genreList = $this->genreRepository->getGenreByProduct($foundProduct->genre);

        return view('pages.product.detail')->with(array(
            'product' => $foundProduct,
            'imageProduct' => $imageList,
            'genreList' => $genreList
        ));
    }

    public function getProductFilter(Request $request)
    {
        if(!$request->clear) {
            $data = json_decode($request->data);
            $genre = '';
            if ( count($data->genreList) > 0) {
                foreach ($data->genreList as $genreItem) {
                    $genre .= '%"';
                    $genre .= $genreItem;
                    $genre .= '"%';
                }
            } else {
                $genre .= '%%';
            }

            $data->genreList = $genre;

            $foundProduct = $this->productRepository->getProductByFilter($data);

            $dataResponse = $this->dataResponseProduct($foundProduct);

        } else {
            $foundProduct = $this->productRepository->getProductList();
            $dataResponse = $this->dataResponseProduct($foundProduct);
        }

        return response()->json(array(
            'result' => 1,
            'data' => $dataResponse,
        ));
    }

    public function getProductTitle(Request $request)
    {
        $searchKey = '%'. str_replace( '%', '\%', $request->searchKey) . '%';

        $foundTitleProductList = $this->productRepository->getTitleProduct($searchKey);

        $data = $this->dataResponseTitleProduct($foundTitleProductList);

        return response()->json(array(
            'result' => 1,
            'data' => $data
        ));
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

    private function dataResponseProduct($productList)
    {
        $dataResponse = '';

        if($productList->count() > 0) {
            $dataResponse = '<div class="product_list_search grid grid-cols-5 mt-[2rem] gap-[8px]">';
            foreach ($productList as $product) {
                $dataResponse .= view('partial.product_card', compact('product'))->render();
            }
            $dataResponse .= '</div>';
        } else {
            $dataResponse .= '<img src="' . asset("storage/product_image/no-product-found-image.png") . '">';
        }

        return $dataResponse;
    }

    private function dataResponseTitleProduct($productTitleList)
    {
        $dataResponse = '';

        if($productTitleList->count() > 0) {
            foreach ($productTitleList as $productTitle) {
                $dataResponse .= '<a href="' . route('product.detail', ['id' => $productTitle->id])
                    . '" class="flex flex-row items-center">' .'<span>' . $productTitle->title . '</span>' .'</a>';
            }
        } else {
            $dataResponse .= '<div class="flex flex-col no_title_product_found justify-center items-center">'
                . '<span> No Product Found </span> </div>';
        }

        return $dataResponse;
    }
}
