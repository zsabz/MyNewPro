<?php

namespace Admin\Http\Controllers\admin\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\Store;
use Admin\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('12');
        $items=Blog::get();
      
        // dd($subjects);
        $items =  Blog::with('user')->get();
        // dd($items);
        //    if (!is_null($sub)) {
        //     $items = $items->where('subject_id', $sub);
        //    }
        // $items = $items->paginate(10);
        // dd($items);

        return view('admin.allblogs')
            ->with(compact('items'))
            ->with(compact('subjects'))
            ->with(compact('allsubjects'))
            ->with(compact('keywords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        // dd($request->all());
        auth()->user()->id;
        $blog = Blog::create([
            'title' => $request->title,
            'summery' => $request->Summery,
            'text' => $request->text,
            'image'=> $request->image ,
            'subject_id'=>$request->subject_id,
            'creator_user_id'=>auth()->user()->id,

            // session()->get('test'),
        ]);
        // dd($request->states);
        $blog->keywords()->sync($request->states);
        // $key = blog_keyword::create();
        // $keyword = keyword::find($request->keyword_id);
        // $blog->keywords()->attach($keyword, ['confirm' => 1]);
        return redirect('admin/blogs/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('12');
        $blog = Blog::with('comments', 'keywords', 'Subject')->find($id);
        $subjects = Subject::where('id', $id)->get();
        //  $blog=Blog::findOrFail($id);
        //  dd($subjects -> title);
        // dd($blog);
        return view('admin.showblog')
            ->with(compact('blog', 'subjects'));
            //   $com=Comment::with('blogs')->select('id','blog_id','comment')->get();
            // dd($blog);
            // dd(55);
            // $blog=Blog::with('comment.replies','keywords')->find($id);
            // return view ('admin.showblog')
            // ->with(compact('blog'))
        ;
    }

    public function showBlog()
    {

        $subjects = Subject::where('parent_id', 0)->get();
        $blogs =  Blog::get();
        //    dd($blogs);
        return view('show_blog')
            ->with(compact('blogs', 'subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::with('comments', 'keywords', 'Subject')->find($id);
        $subjects = Subject::where('parent_id', 0)->with('child')->get();
        $keywords =  Keyword::get();
        // dd($blog);
        return view('admin.editsblog')
            ->with(compact('blog', 'subjects','keywords'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlogRequest $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
    
        
        $blog->update($request->all());
    
        $blog->keywords()->sync($request->states);
        return redirect('admin/blogs/blog');
    }
    public function delete($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //   dd("12");
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return back();
        //
    }
    public function new_form()
    {
        $subjects = Subject::where('parent_id', 0)->get();
        // dd($subjects);
        $items = Keyword::all();
        return view('create_blog')->with(compact('items', 'subjects'));
    }

    public function upload(Request $request)
    {
        $image = $request->file('file');
        // dd($image);
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('img/blog'), $imageName);
          session()->put('test', $imageName);

        return response()->json(['success' => $imageName]);
    }

     public function apend(Request $request)
    {
        $option = $request->all();
        // dd($image);
       dd($option);
    }

 public function active(Request $request)
    {
        // dd(123);
        $blog = Blog::find($request->id);
alert('22222222');
        $txt= 'غیرفعال';
        if ($blog->status == 0)
        {
            $blog->status = 1;
            $txt= 'فعال';
        }else{
            $blog->status = 0;
        }
        $blog->update();
        
        return response()->json(['status' => 200, 'message' => 'عملیات مورد نظر با موفقیت انجام شد!', 'txt' => $txt]);
// alert('انجام شد');
// `email_verified_at`
    }


}
