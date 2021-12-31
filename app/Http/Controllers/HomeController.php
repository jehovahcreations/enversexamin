<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function addblog()
    {
        return view('addblog');
    }

    public function insert(Request $request)
    {
        $blog =new Blog;
        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
           // $this->save();

           $blog->name = $request->name;
           $blog->title = $request->title;
           $blog->sub = $request->sub;
           $blog->decp = $request->decp;
           $blog->input_img = $name;
           $blog->save();
           return redirect('home')->with("status", "BLOG SUCESSFULLY ADDED");
          // return Redirect::back()->withErrors(['msg' => 'The Message']);
           // return back()->with('success','Image Upload successfully');
        }
    }

    public function getEmployees(Request $request)
    {
       // return'benet';
        if ($request->ajax()) {
            $edit = '/edit/';
            $data = Blog::latest()->get();
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a href="/edit/'.$data->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="/delete/'.$data->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>';
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->rawColumns(['action'])
                ->make(true);
        //     $builder = Blog::query()->select('id', 'name', 'title', 'sub', 'decp');

        // return datatables()->eloquent($builder)
        //                   ->editColumn('id', function ($user) {
        //                       return '<a>' . $user->id . '</a>';
        //                   })
        //                   //->addColumn('action', 'eloquent.tables.users-action')
        //                   ->rawColumns([1, 5])
        //                   ->make();
    }

        }

        public function edit($id)
        {
            $data = Blog::latest()->where('id','=',$id)->get();
            return view('edit', compact('data'));
        }

        public function delete($id)
        {
            $data = Blog::where('id', $id)->delete();
            return redirect('home')->with("status", "BLOG SUCESSFULLY DELETED");
        }

        public function update(Request $request)
        {
            Blog::where('id', $request->id)
       ->update([
           'name' => $request->name,
           'sub' => $request->sub,
           'title' => $request->title,
           'decp' => $request->decp,
           'input_img'=>$request->input_img
        ]);
        return redirect('home')->with("status", "BLOG SUCESSFULLY UPDATED");
        }

        // public function getAddEditRemoveColumnData()
        // {
        //     $users = Blog::select(['id', 'name', 'title', 'created_at', 'updated_at']);

        //     return Datatables::of($users)
        //         ->addColumn('action', function ($user) {
        //             return '<a href="/edit/'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        //         })
        //         ->editColumn('id', 'ID: {{$id}}')
        //         ->removeColumn('password')
        //         ->make(true);
        // }
    }


