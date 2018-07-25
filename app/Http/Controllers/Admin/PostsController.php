<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use  App\Models\Post;
use Illuminate\Http\Request;
use Image;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $posts = Post::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $posts = Post::latest()->paginate($perPage);
        }

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        
        // if ($request->hasFile('file')){
        //     $file = $request->file('file');
        //     // $img_size = $request->file('file')->getClientSize();
        //     $file->move('uploads',$file->getClientOriginalName());

        //     $user->img_name = $file->getClientOriginalName();
           
        //     $user->save();
        // }
        

        // $requestData = $request->all();
        
        // Post::create($requestData);

        // return redirect('admin/posts')->with('flash_message', 'Post added!');


        // $product = new Post($request->input()) ;
        $post = new Post ($request->input());
     
         if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();
            // $destinationPath = public_path().'/images/' ;
            // $file->move($destinationPath,$fileName);
            Image::make($file)->save( public_path('/images/' . $fileName ) );
            $post->img_name = $fileName ;
            $post->img_size = $fileSize ;
        }
        $post->save() ;
        return redirect('admin/posts')->with('flash_message', 'Post added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $post = Post::findOrFail($id);

            // if($file = $request->hasFile('image')) {
            
            // $file = $request->file('image') ;
            
            // $fileName = $file->getClientOriginalName() ;
            // $destinationPath = public_path().'/images/' ;
            // $file->move($destinationPath,$fileName);
            // }
        if( $request->hasFile('image') ) {
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName();
            $fileSize = $file->getClientSize();
            // $destinationPath = public_path().'/images/' ;
            // $file->move($destinationPath,$fileName);

            Image::make($file)->save( public_path('/images/' . $fileName ) );
            $post->img_name = $fileName;
            $post->img_size = $fileSize ;
        }

        $post->save();
        // $post->update($requestData);

        return redirect('admin/posts')->with('flash_message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('admin/posts')->with('flash_message', 'Post deleted!');
    }
}
