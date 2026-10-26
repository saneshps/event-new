<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $username = config('cms.admin_username');
        $email = config('cms.admin_email');
        $password = config('cms.admin_password');

        if (
            ! is_string($username)
            || $username === ''
            || strlen($username) > 255
            || ! is_string($email)
            || filter_var($email, FILTER_VALIDATE_EMAIL) === false
            || ! is_string($password)
            || strlen($password) < 12
        ) {
            throw new RuntimeException('Set ADMIN_USERNAME, ADMIN_EMAIL, and an ADMIN_PASSWORD of at least 12 characters before seeding.');
        }

        User::query()->updateOrCreate(
            ['username' => $username],
            [
                'name' => config('cms.admin_name'),
                'email' => $email,
                'password' => Hash::make($password),
            ],
        );
    }
}
