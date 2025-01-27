<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Model\User;
use App\Model\UserRepositoryInterface;
class UserController extends AbstractController
{
  private const PNG = 'image/png';
  private const JPEG = 'image/jpeg';
  private const GIF = 'image/gif';
  private const UPLOADS = './uploads/';

  public function __construct(private readonly UserRepositoryInterface $repository)
  {
  }

  public function index(): Response
  {
    return $this->redirectToRoute('add_user');
  }

  public function login(): Response
  {
    return $this->render("register_user_form.html.twig");
  }

  public function registerUser(Request $request): Response
  {
    $user = new User(
      null,
      $request->get('first_name'),
      $request->get('last_name'),
      empty($request->get('middle_name')) ? null : $request->get('middle_name'),
      $request->get('gender'),
      $request->get('birth_date'),
      $request->get('email'),
      empty($request->get('phone')) ? null : $request->get('phone'),
      empty($request->get('avatar_path')) ? null : $request->get('avatar_path'),
    );

    $userId = $this->repository->saveUserToDatabase($user);

    if ($request->files->get('avatar_path'))
    {
      $avatarPath = $this->saveAvatar($request->files->get('avatar_path'), $userId);

      $user = $this->repository->findUserInDatabase((int)$userId);
      $user->setAvatarPath($avatarPath);
      $this->repository->saveAvatarToDatabase($user);
    }
    return $this->redirectToRoute('view_user', ['user_id' => $userId]);
  }

  public function viewUser(Request $request): Response
  { 
    $id = $request->get('user_id') ?? null;
    if ($id === null) {
      throw new BadRequestException('Parameter id is not defined');
    }

    $user = $this->repository->findUserInDatabase((int)$id);
    if ($user === null) {
      throw new BadRequestException('User not found');
    }

    return $this->render("view_user_form.php.twig", [
      "user" => $user
    ]);
  }

  public function viewUsers(Request $request): Response
  {
    $users = $this->repository->allUsers();
    if ($users === null) {
      throw new BadRequestException('Parameter id is not defined');
    }
      return $this->render("view_all_users_form.php.twig", [
        "users" => $users
      ]);
  }
  private function saveAvatar(UploadedFile $avatar, int $id): ?string
  {
    $type = $avatar->getClientMimeType();
    $newAvatarName = "avatar" . "{$id}" . "." . $avatar->getClientOriginalExtension();

    if ($type === self::PNG || $type === self::JPEG || $type === self::GIF)
    {
      $avatarPath = self::UPLOADS . $newAvatarName;
      $avatar->move(self::UPLOADS, $newAvatarName);
      return "." . $avatarPath;
    }
    else
    {
      throw new \RuntimeException('File is not saved');
    }
  }
  
  public function updateUser(Request $request): ?Response
  {
    $id = $request->get('user_id') ?? null;
    if ($id === null) {
      throw new BadRequestException('Parameter id is not defined');
    }

    $user = $this->repository->findUserInDatabase((int)$id);
    if ($user === null) {
      throw new BadRequestException('User not found');
    }
    $this->changeData($user, $request);

    if ($request->files->get('avatar_path'))
      {
        $avatarPath = $this->saveAvatar($request->files->get('avatar_path'), $id);
        $user->setAvatarPath($avatarPath);
      }
    $this->repository->updateUser($user);

    return $this->render("view_user_form.php.twig", [
      "user" => $user
    ]);
  }
  private function changeData(User $user, Request $request): void
    {
        $user->setFirstName($request->get('first_name'));
        $user->setLastName($request->get('last_name'));
        $user->setMiddleName(empty($request->get('middle_name')) ? null : $request->get('middle_name'),);
        $user->setGender($request->get('gender'));
        $user->setBirthDay($request->get('birth_date'));
        $user->setEmail($request->get('email'));
        $user->setPhone(empty($request->get('phone')) ? null : $request->get('phone'));
        $user->setAvatarPath(empty($request->get('avatar_path')) ? null : $request->get('avatar_path'),);
    }
  public function deleteUser(Request $request): Response
  {
    $id = $request->get('user_id') ?? null;
    if ($id === null) {
      throw new BadRequestException('Parameter id is not defined');
    }
    $this->repository->deleteUser($id);

    return $this->render("view_delete_user.html.twig");
  }
}