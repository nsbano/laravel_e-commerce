<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
  public function show(){
    return view('user.profile');
  }
  public function edit(){
    return view('user.edit');
  }
  public function update(){
    $rules=[
      "name"=>"required",
      "lastname"=>"required|numeric|min:0|max:100",
      "email"=>"required|numeric|min:0|max:200",
      "release_date"=>"required|date",
      "genre_id"=>"required|integer",
      "image"=>"nullable|image",
    ];
    $this->validate($form,$rules);
    $editUser = User::findOrFail($id);
    $editUser->name = $form["username"];
    $editUser->email = $form["email"];

    if ($form->has("avatar")) {
      $editUser->avatar = $form->file("avatar")->store("public/users");
    }
    $editUser->save();
  }
}
