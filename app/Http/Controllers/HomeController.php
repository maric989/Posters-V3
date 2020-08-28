<?php

namespace App\Http\Controllers;

use App\Repository\User\UserRepositoryInterface;

class HomeController extends Controller
{
    private $userRepository;

    /**
     * HomeController constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
