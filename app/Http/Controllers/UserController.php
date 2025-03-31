<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return $this->getResponse(
            $this->userRepository->getAll()
        );
    }

    public function store(UserRequest $request)
    {
        return $this->getResponse(
            $this->userRepository->create($request->all())
        );
    }

    public function show(Request $request, string $id)
    {
        return $this->getResponse(
            $this->userRepository->get($id, $this->isDiscord($request))
        );
    }

    public function update(UserRequest $request, string $id)
    {
        return $this->getResponse(
            $this->userRepository->update($id, $request->all(), $this->isDiscord($request))
        );
    }

    public function destroy(Request $request, string $id)
    {
        return $this->getResponse(
            $this->userRepository->delete($id, $this->isDiscord($request))
        );
    }
}
