<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Post $postModel)
	{
        $data = array();
        //$data['posts'] = Post::all(); //выбираем все записи
        //$data['posts'] = Post::latest('published_at')->get(); //выбираем все записи с сортировкой в обратном порядке
        //$data['posts'] = Post::latest('published_at')->where('published_at', '<=', Carbon::now())->get(); //Carbon::now() - текущая дата, чтобы его использовать use Carbon\Carbon;


        $data['posts'] = $postModel->getPubPosts();

        return view('post.index', ['data'=> $data]); // post/index точка - это как слеш
	}


    public function unpub(Post $model)
    {
        $data['posts'] = $model->getUnPubPosts();
        return view('post.index', ['data'=>$data]);
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
