<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class UserController extends Controller
{
    use WithPagination;
    protected $userRepository;
    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function index()
    {
        $all = $this->userRepository->index();
        return view('index.index', compact('all'));
    }

    public function form()
    {
        return view('form.index');
    }

    public function store(StoreRequest $request)
    {

        $this->userRepository->create($request);
        return back();

    }

    public function getUsers()
    {
        return response($this->userRepository->index(), 200);
    }

    public function getUserById($id)
    {
        return response($this->userRepository->getUserById($id), 200);
    }

    public function getPosition()
    {
        return response($this->userRepository->getPosition(), 200);
    }
    public function getToken()
    {
        return response($this->userRepository->getToken(), 200);
    }

    public function apiStore(StoreRequest $request)
    {
        return response($this->userRepository->create($request), 200);
    }
}

