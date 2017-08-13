<?php

namespace App\Http\Controllers;
use App\Mail\welcome;
use Illuminate\Support\Facades\DB;
use TeamTNT\TNTSearch\TNTFuzzyMatch;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\RequestException;

class ArticlesController extends Controller
{

    public function _construct()
    {
        $this->middleware('auth');
    }

    public function delete($id)
    {
        $delete = Articles::findorFail($id);
        $delete->delete();
        return redirect('/articles/index');
    }

    public function edit(Request $get_data_form, $user_id_db)
    {
        $edit = Articles::findorFail($user_id_db);
        $edit->title = $get_data_form->title;
        $edit->body = $get_data_form->body;
        $edit->update();
        //$edit->update($id->all());
        return redirect('/articles/index');
    }

    public function index()
    {
        if (Auth::check() == false) {
            return redirect('login');
        }

        $Articles = articles::all()->where('user_id', \auth()->id());//users id that's model.
        return view('articles/index')->with('user_login', $Articles);
    }

    // insert into database
    public function insert_db_mail(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255|min:3',
            'body' => 'required|min:5'
        ]);
        // Insert data
        $idUser = \auth()->id();// check specified ID of users that is loginning.
        $sql = new Articles();// create connection to database and create new object                                      model6
        $sql->title = $request->title;
        $sql->active = 1;
        $sql->user_id = $idUser;
        $sql->body = $request->body;
        $sql->save();

        $user = Auth::user();
        //auth()->model($user);
        \Mail::to($user)->send(new welcome($request));
        return redirect('index');

    }

    /**
     *Display Database
     */
    public function edit1($user_id)
    {

        $get_data = Articles::findorFail($user_id);

        return view('articles/edit')->with('key', $get_data);//Key is a key of function width();
    }

    public function save_update(Request $get_form_data, $get_user_id)
    {
        $this->validate($get_form_data, [
            'title' => 'max:255|min:5',// max is key word and it does action
            'body' => 'min:3',
        ]);
        $edit = Articles::findOrFail($get_user_id);
        $edit->title = $get_form_data->title;
        $edit->body = $get_form_data->body;
        $edit->update();
        //$edit->update($id->all());
        return redirect('articles/index');//bos dom lai tov db ai return jol articles/index.
        //return view('articles/index');bos dol lai jol 'articles/index' and return jol "articles/index".
    }


    public function getdata()
    {
        //return 'hello';

        $Articles = Articles::all()->where('user_id', \auth()->id());//users id that's model.
        return Datatables::of($Articles)
            ->addColumn('action', function ($Articles) {

                return '<a href="/articles/edits/' . $Articles->id . '" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a> <a href="/articles/delete/' . $Articles->id . '" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>';
            })
            ->make(true);
    }

    public function search(Request $request)
    {
        if (Auth::check() == false) {
            return redirect('login');
        }
        $exist = $request->title;
        return view('articles/searchable')->with('exist', $exist);
    }

    public function go(Request $request)
    {
        $client = new \GuzzleHttp\Client();

        $this->validate($request, [
            'title' => 'required|max:255|min:1'
        ]);

        try {
            $result = $client->request('GET', $request->title);//get 200
            $exist = $request->title . ' is up';
            return view('articles/searchable', compact('exist'));

        } catch (RequestException $e) {

            $exist = $request->title . ' is down';
            return view('articles/searchable')->with('exist', $exist);//compact('exist')


        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tntindex()
    {

        $id = \auth()->id();
        $Articles = DB::table('Articles')
            ->select('title', 'body')
            ->where('user_id', '=', $id)
            ->get();
        return view('tntindex', compact('Articles'));
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function tntsearch(Request $request)
    {
        //$this->validate($request, [
        //   'title' => 'required|max:255|min:1'
        //]);
        $id = \auth()->id();
        $search = $request->title;
        //dd($search);
        //$Articles = Articles::search('title', '=', '%'.$request->title.'%')
        $Articles = Articles::search($search)
            ->where('user_id', $id)
            ->orderBy('title', 'desc')
            ->get();
        //dd($Articles);
        if (count($Articles) > 0) {
            return view('tntindex', compact('Articles'));
        } else {
            $words =$search. " doesn't exist.";
            return view('tntindex', compact('words'));
        }
    }
    public function algoindex(Request $request)
    {
        $search = $request->title;
        $Articles = Articles::search($search)->get();
        //return($Articles);
        $words = $search . "words not found!";
        return view('algoindex', compact('Articles'), compact('words'));
    }

    public function algosearch(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255|min:1'
        ]);
        $search = $request->title;
        $Articles = Articles::search($search)->get();
        //dd($Articles);
        if (count($Articles) > 0) {
            return view('algoindex', compact('Articles'));
        } else {
            $words =$search. " doesn't exist.";
            return view('algoindex')->with('name', $words);


        }


    }
}
