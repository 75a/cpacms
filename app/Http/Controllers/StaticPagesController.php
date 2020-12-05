<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function aboutUs()
    {
        return view('static-pages.content.about-us', $this->getMenuCategories());
    }

    public function privacyPolicy()
    {
        return view('static-pages.content.privacy-policy', $this->getMenuCategories());
    }

    public function termsAndConditions()
    {
        return view('static-pages.content.terms-and-conditions', $this->getMenuCategories());
    }

    public function contactUs()
    {
        return view('static-pages.content.contact-us', $this->getMenuCategories());
    }



    private function getMenuCategories()
    {
        return [
            'categories' => Category::all(),
            'category' => "",
        ];
    }
}
