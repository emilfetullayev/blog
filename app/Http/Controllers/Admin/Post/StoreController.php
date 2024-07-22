<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        // Resmi yükleme
        if ($request->hasFile('post_image')) {
            $imagePath = $request->file('post_image')->store('uploads/images', 'public');
            $data['post_image'] = $imagePath;
        }

        Post::firstOrCreate(
            ['title' => $data['title'], 'content' => $data['content']],
            $data
        );

        return redirect()->route('post.home');
    }
}
