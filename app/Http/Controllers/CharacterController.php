<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Character::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Character::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Character::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->show($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Character::destroy($id);
    }

    /**
     * Search for a resource by name.
     *
     * @param  string $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Character::where('Name', 'like', '%'.$name.'%')->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $userId
     * @return \Illuminate\Http\Response
     */
    public function userCharacter($userId)
    {
        return Character::where('UserId', $userId)->get();
    }

    /**
     * Display all metadata for the specified resource.
     *
     * @param  int $userId
     * @return \Illuminate\Http\Response
     */
    public function characterMeta($id)
    {
        return $this->show($id)->meta();
    }

    /**
     * Display metadata with a specified meta key for the specified resource.
     *
     * @param  int $userId
     * @param  string $key
     * @return \Illuminate\Http\Response
     */

     public function characterSingleMeta($id, $key) {
        return $this->show($id)->meta()->where('MetaKey', $key)->get();
     }

}
