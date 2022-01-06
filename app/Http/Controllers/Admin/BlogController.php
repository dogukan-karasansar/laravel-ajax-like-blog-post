<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(5) ?? abort(404,'Blog bulunamadı');
        return view('admin/list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCreateRequest $request)
    {
        if($request->hasFile('image')){
            $fileName = Str::slug($request->title).'.'.$request->image->extension();
            $fileNameWithUpload ='images/'.$fileName;
            $request->image->move(public_path('images'),$fileName);
            $request->merge([
                'image'=>$fileNameWithUpload
            ]);
        }

        Blog::create($request->post());
        return redirect()->route('blogs.index')->withSuccess('Blog Oluşturuldu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id) ?? abort(404,'Blog bulunamadı');
        return view('admin.edit',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, $id)
    {
        $asdImage = Blog::find($id);
        if($request->hasFile('image')){
            $fileName = Str::slug($request->title).'.'.$request->image->extension();
            $fileNameWithUpload ='images/'.$fileName;
            $request->image->move(public_path('images'),$fileName);
            $request->merge([

                'image'=>$fileNameWithUpload
            ]);
        }
        else{
            $fileNameWithUpload = $asdImage->image;
        }


        $request ?? abort(404,'Blog Bulunamadı');
        Blog::find($id)->update([
            'image'=>$fileNameWithUpload,
            'title'=>$request->get('title'),
            'slug'=>$request->get('slug'),
            'description'=>$request->get('description'),
            'status'=>$request->get('status'),
            'category'=>$request->get('category'),
        ]);

        return redirect()->route('blogs.index')->withSuccess('Blog güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete() ?? abort(404,'Blog bulunamadı');
        return redirect()->route('blogs.index')->withSuccess('Blog Silindi');
    }
}
