<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostManagerController extends Controller
{
    public function index()
    {
        return view('post-manager.index', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post-manager.show', [
            'post' => $post
        ]);
    }


    public function edit(Post $post)
    {
        return view('post-manager.edit',[
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect($post->path());
    }

    public function destroy(Post $post)
    {
        try {
            $post->delete();
        } catch (\Exception $e) {
            report($e);
            return false;

        }
        return redirect(route('post-manager.index'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post-manager.create', compact('categories'));
    }

    public function store()
    {
        $this->validatePost();
        $post = new Post(request([
            'slug',
            'category_id',
            'metatitle',
            'metadescription',
            'metaauthor',
            'logo_text',
            'logo_src',
            'menu_link_text',
            'menu_link_product_name',
            'menu_link_product_url',
            'featured_header',
            'featured_description',
            'featured_image_src',
            'featured_image_alt',
            'article_header',
            'article_text',
            'generator_header',
            'inputs',
            'call_to_action_header',
            'call_image1_src',
            'call_image1_alt',
            'call_image2_src',
            'call_image2_alt',
            'call_image3_src',
            'call_image3_alt',
            'connecting',
            'connected',
            'secondstep',
            'secondstepfinished',
            'thirdstep',
            'thirdsteperror',
            'thirdstepwaiting'

        ]));
        $post->save();
        return redirect(route('post-manager.index'));
    }

    protected function validatePost()
    {
        return request()->validate([
            'slug' => 'required',
            'category_id' => 'required'
        ]);
    }
}
