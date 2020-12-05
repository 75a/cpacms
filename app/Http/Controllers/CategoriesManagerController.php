<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesManagerController extends Controller
{
    public function index()
    {
        return view('categories-manager.index', [
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('categories-manager.show', [
            'category' => $category
        ]);
    }


    public function edit(Category $category)
    {
        return view('categories-manager.edit',[
            'category' => $category
        ]);
    }

    public function update(Category $category)
    {
        $category->update($this->validateCategory());
        return redirect($category->path());
    }

    public function destroy(Category $category)
    {
        try {
            $category->delete();
        } catch (\Exception $e) {
            report($e);
            return false;

        }
        return redirect(route('categories-manager.index'));
    }

    public function create()
    {
        return view('categories-manager.create');
    }

    public function store()
    {
        $this->validateCategory();
        $category = new Category(request(['slug', 'name']));
        $category->save();
        return redirect(route('categories-manager.index'));
    }

    protected function validateCategory()
    {
        return request()->validate([
            'name' => 'required',
        ]);
    }
}
