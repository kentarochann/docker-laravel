<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**s
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // todo　ユーザー一覧を整える
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // Userモデルを作成する

        $user = new User;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index')->with('flash_message', '登録が完了しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::where('id', $id)->first();

        return view('user.show', compact(['user']));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $user = User::where('id', $id)->first();
        $user->fill($request->all());
        $user->update();

        return redirect()->route('users.show', $user->id)->with('flash_message', 'ユーザー情報を更新しました。');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return redirect()->route('users.index')->with('flash_message',  "$user->name を削除しました");

    }
}
