<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'price' => '$15'],
            ['title' => '1984', 'author' => 'George Orwell', 'price' => '$12'],
            ['title' => 'The Catcher in the Rye', 'author' => 'J.D. Salinger', 'price' => '$14'],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'price' => '$18'],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'price' => '$10']
        ];

        return view('products', compact('products'));
    }
}
