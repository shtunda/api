<?php

namespace App\Repositories;

use App\Http\Requests\StoreRequest;
use App\Models\User;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Symfony\Component\Console\Input\Input;

class UserRepository
{
    public function index()
    {
        return User::paginate(6);
    }

    public function getUser()
    {
        return User::all();
    }
    public function getUserById($id)
    {
        return User::find($id);
    }

    public function getPosition()
    {
        return User::select('position')->get();
    }
    public function getToken()
    {
        return User::select('api_token')->get();
    }

    public function create($request)
    {
        $data = $request->all();
        if(isset($data['img'])) {
            Image::make($request->img)->fit(70, 70)->save($data['img']);
            $data['img'] = Storage::put('images', $data['img']);
        }
        $data['password'] = Hash::make($request->password);
        $data['api_token'] = Str::random(80);
        return User::create($data);
    }
    
}
