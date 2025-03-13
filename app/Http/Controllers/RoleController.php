<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected RoleRepository $roleRepository;

    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function index()
    {
        return $this->getResponse(
            $this->roleRepository->getAll()
        );
    }

    public function store(RoleRequest $request)
    {
        return $this->getResponse(
            $this->roleRepository->create($request->all())
        );
    }

    public function show(Request $request, string $id)
    {
        return $this->getResponse(
            $this->roleRepository->get($id, $this->isDiscord($request))
        );
    }

    public function update(RoleRequest $request, string $id)
    {
        return $this->getResponse(
            $this->roleRepository->update($id, $request->all(), $this->isDiscord($request))
        );
    }

    public function destroy(Request $request, string $id)
    {
        return $this->getResponse(
            $this->roleRepository->delete($id, $this->isDiscord($request))
        );
    }
}
