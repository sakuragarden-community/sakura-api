<?php

namespace App\Repositories;

use App\Models\Role;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RoleRepository
{
    public function get(string $id, $isDiscord = false): Role|null
    {
        try {
            if ($isDiscord) {
                $role = Role::where('discord_id', '=', $id)->firstOrFail();
            } else {
                $role = Role::findOrFail($id);
            }
        } catch (ModelNotFoundException $e) {
            $role = null;
        }

        return $role;
    }

    public function getAll(): array
    {
        return Role::all()->toArray();
    }

    public function create(array $data = []): Role
    {
        return Role::factory()->create($data);
    }

    public function update(string $id, array $data = [], $isDiscord = false): Role
    {
        try {
            if ($isDiscord) {
                $role = Role::where('discord_id', '=', $id)->firstOrFail();
            } else {
                $role = Role::findOrFail($id);
            }

            $role->update($data);
        } catch (ModelNotFoundException $e) {
            $role = null;
        }

        return $role;
    }

    public function delete(int $id, $isDiscord = false): Role
    {
        try {
            if ($isDiscord) {
                $role = Role::where('discord_id', '=', $id)->firstOrFail();
            } else {
                $role = Role::findOrFail($id);
            }

            $role = $role->delete();
        } catch (ModelNotFoundException $e) {
            $role = null;
        }

        return $role;
    }
}
