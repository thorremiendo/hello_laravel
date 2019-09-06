<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index() 
    {
      return view ('users.index');
   }
   public function show() 
   {
      return view ('users.show');
   }
   public function edit() 
   {
      return view ('users.edit'); 
   }
   public function destroy() 
   {
      return 'User 1 Deleted';
   }
   public function update() 
   {
      return 'User 1 Updated';
   }
   public function store() 
   {
      return 'User 1 Added';
   }
}
