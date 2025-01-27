<?php
namespace App\Model;


interface UserRepositoryInterface
{
    public function saveUserToDatabase(User $user): int;
    public function findUserInDatabase(int $id): ?User;
    public function allUsers(): ?array;
    public function updateUser(User $user): void;
    public function deleteUser(int $id): void;
    public function saveAvatarToDatabase(User $user): void;
}