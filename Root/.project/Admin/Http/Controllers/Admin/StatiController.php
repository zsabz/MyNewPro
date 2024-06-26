<?php

namespace Admin\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Admin\Http\Controllers\Traits\SiteTraits;
use App\Http\Requests\Store;
use Admin\Models\Stati;
use Illuminate\Support\Facades\Auth;
class StatiController extends Controller
{
    use SiteTraits;
    function index(){
        $items = Stati::orderBy('id', 'DESC')->paginate(5);  
        // return view('views::products/category')->with(compact('items'));
        return $this->view('views::products.stati', true)->with(compact('items'));
    }

    function store(Store $r){
        // dd($r);
        $r->validate([
                'title' => 'required|string|max:20',
                'parent_id' => 'required',

            
        ]);
        $category = new category();
        $category->title= $r->title;
        // dd($category);
        $category->parent_id=$r->parent_id;
        $category->save();
        return back()->with('success','کتگوری با موفقیت اظافه شد');
        }
        public function edit($id)
        {
            $items = Category::where('parent_id', 0)->with('child')->get();
            $item =  Category::where('id',$id)->first();
            // dd($item);
            return view('views::products/editcat')->with(compact('item','items'));
            
        }

        public function update(Request $request, $id)
    {
        // dd($request->all());
            $cat = Category::where('id', $id)->first();
            $cat->update($request->all());
            // dd($key);
             return redirect('/ad/addCategory');
    }

        public function destroy($id)
        {
            
            $cat = Category::findOrFail($id);
            $cat->delete();
            return back();
            //
        }
}
