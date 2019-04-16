<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\XXXX;
use Illuminate\Http\Request;

class XXXXController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$x_x_x_xes = XXXX::orderBy('id', 'desc')->paginate(10);

		return view('x_x_x_xes.index', compact('x_x_x_xes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('x_x_x_xes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$x_x_x_x = new XXXX();

		$x_x_x_x->title = $request->input("title");
        $x_x_x_x->price = $request->input("price");
        $x_x_x_x->body = $request->input("body");
        $x_x_x_x->published = $request->input("published");

		$x_x_x_x->save();

		return redirect()->route('x_x_x_xes.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$x_x_x_x = XXXX::findOrFail($id);

		return view('x_x_x_xes.show', compact('x_x_x_x'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$x_x_x_x = XXXX::findOrFail($id);

		return view('x_x_x_xes.edit', compact('x_x_x_x'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$x_x_x_x = XXXX::findOrFail($id);

		$x_x_x_x->title = $request->input("title");
        $x_x_x_x->price = $request->input("price");
        $x_x_x_x->body = $request->input("body");
        $x_x_x_x->published = $request->input("published");

		$x_x_x_x->save();

		return redirect()->route('x_x_x_xes.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$x_x_x_x = XXXX::findOrFail($id);
		$x_x_x_x->delete();

		return redirect()->route('x_x_x_xes.index')->with('message', 'Item deleted successfully.');
	}

}
