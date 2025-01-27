<?php
declare(strict_types=1);

namespace App\Infrastructure;

use App\Connection\ConnectionProvider;
use App\Model\User;
use App\Model\UserRepositoryInterface;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
class UserRepository implements UserRepositoryInterface
{
  private  $connection;
  public function __construct()
  {
    $this->connection = ConnectionProvider::connectDatabase();
  }

  public function saveUserToDatabase(User $user): int
  {
    $query = <<<SQL
      INSERT INTO user
        (first_name, last_name, middle_name, gender, birth_date, email, phone, avatar_path)
      VALUES (:firstName, :lastName, :middleName, :gender, :birthDate, :email, :phone, :avatarPath)
      SQL;
      $request = $this->connection->prepare($query);
      
      $request->execute([
          ':firstName' => $user->getFirstName(),
          ':lastName' => $user->getLastName(),
          ':middleName' => $user->getMiddleName(),
          ':gender' => $user->getGender(),
          ':birthDate' => $user->getBirthDate(),
          ':email' => $user->getEmail(),
          ':phone' => $user->getPhone(),
          ':avatarPath' => $user->getAvatarPath(),
        ]);
        return (int)$this->connection->lastInsertId();
    }
  public function findUserInDatabase(int $id): ?User
  {
      $query = "SELECT user_id, first_name, last_name, middle_name, gender, birth_date, email, phone, avatar_path FROM user WHERE user_id = :user_id";
      $request = $this->connection->prepare($query);
      $request->execute([':user_id' => $id]);
      if ($row = $request->fetch(\PDO::FETCH_ASSOC)) {
          return $this->createUserFromRow($row);
      }
          return null;
  }
  public function allUsers(): ?array
  {
    $usersArray = [];
    $query = "SELECT * FROM user";
    $request = $this->connection->prepare($query);
    $request->execute();
    $users = $request->fetchAll(\PDO::FETCH_ASSOC);
    foreach ($users as $user)
    {
      $usersArray[] = $this->createUserFromRow($user);
    }
    return $usersArray;
  }
  private function createUserFromRow(array $row): User
  {
      return new User(
          (int)$row['user_id'],
          $row['first_name'],
          $row['last_name'],
          $row['middle_name'] ?? null,
          $row['gender'],
          $row['birth_date'] ?? null,
          $row['email'],
          $row['phone'] ?? null,
          $row['avatar_path'] ?? null
      );
  }
  public function saveAvatarToDatabase(User $user): void
  {
    $query = " UPDATE user SET avatar_path = :avatar WHERE user_id = :id";
    $request = $this->connection->prepare($query);
    $request->execute([':avatar'=> $user->getAvatarPath(), ':id' => $user->getId()]);
  }
  public function updateUser(User $user): void
  {
    $query = "UPDATE user SET first_name = :first_name, last_name = :last_name, middle_name = :middle_name, gender = :gender, birth_date = :birth_date, email = :email, phone = :phone WHERE user_id = :user_id";
    $request = $this->connection->prepare($query);
    $request->execute([':user_id' => $user->getId(), ':first_name' => $user->getFirstName(), ':last_name' => $user->getLastName(), ':middle_name' => $user->getMiddleName(), ':gender' => $user->getGender(), ':birth_date' => $user->getBirthDate(), ':email' => $user->getEmail(), ':phone' => $user->getPhone()]);
  }
  public function deleteUser(int $id): void
  {
    $query = "DELETE FROM user WHERE user_id = :user_id";
    $request = $this->connection->prepare($query);
    $request->execute([':user_id' => $id]);
  }
}