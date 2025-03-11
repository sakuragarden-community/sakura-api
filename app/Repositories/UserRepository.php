<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserRepository
{
    public function get(string $id, $isDiscord = false): User|null
    {
        try {
            if ($isDiscord) {
                $user = User::where('discord_id', '=', $id)->firstOrFail();
            } else {
                $user = User::findOrFail($id);
            }
        } catch (ModelNotFoundException $e) {
            $user = null;
        }

        return $user;
    }

    public function getAll(): array
    {
        return User::all()->toArray();
    }

    public function create(array $data = []): User
    {
        return User::factory()->create($data);
    }

    public function update(string $id, array $data = [], $isDiscord = false): User
    {
        try {
            if ($isDiscord) {
                $user = User::where('discord_id', '=', $id)->firstOrFail();
            } else {
                $user = User::findOrFail($id);
            }

            $user->update($data);
        } catch (ModelNotFoundException $e) {
            $user = null;
        }

        return $user;
    }

    public function delete(int $id, $isDiscord = false): User
    {
        try {
            if ($isDiscord) {
                $user = User::where('discord_id', '=', $id)->firstOrFail();
            } else {
                $user = User::findOrFail($id);
            }

            $user = $user->delete();
        } catch (ModelNotFoundException $e) {
            $user = null;
        }

        return $user;
    }
}
