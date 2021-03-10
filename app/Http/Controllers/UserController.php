<?php

namespace App\Http\Controllers;

use App\Models\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(protected UserRepository $userRepository)
    {}

    public function show($id)
    {
       $user = $this->userRepository->show($id);

       return view('main', ['user' => $user]);
    }
}
