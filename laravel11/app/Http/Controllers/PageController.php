<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function home()
    {
        $title = "Home Page";
        $message = "Welcome to Laravel Controllers";

        return view('home', compact('title', 'message'));
    }
  public function about()
    {
        $title = "About Page";
        $message = "This is the about page";

        return view('about', compact('title', 'message'));
    }
   public function contact()
    {
        $title = "Contact Page";
        $message = "Contact us anytime";

        return view('contact', compact('title', 'message'));
    }


// pass para
    public function user($name)
{
    return view('user', ['username' => $name]);
}

//part5
public function products()
{
    $products = [
        ['name' => 'Laptop', 'price' => 800],
        ['name' => 'Phone', 'price' => 500],
    ];

    return view('products', compact('products'));
}

public function productDetails($name)
{
    $products = [
        ['name' => 'Laptop', 'price' => 800],
        ['name' => 'Phone', 'price' => 500],
    ];

    $selectedProduct = null;

    foreach ($products as $product) {
        if ($product['name'] == $name) {
            $selectedProduct = $product;
        }
    }

    return view('product-details', compact('selectedProduct'));
}

}
