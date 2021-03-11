<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(protected UserRepositoryInterface $userRepository)
    {}

    public function show($id)
    {
       $user = $this->userRepository->show($id);

       return view('show', ['user' => $user]);
    }

    public function index()
    {
        $users = $this->userRepository->index();

        return view('index', compact('users'));
    }
}
