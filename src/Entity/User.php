<?php
declare(strict_types=1);

namespace App\Entity;
class User
{
    private $id;
    private $firstName;
    private $lastName;
    private $middleName;
    private $gender;
    private $birthDate;
    private $email;
    private $phone;
    private $avatarPath;
    public function __construct(
        ?int $id,
        string $firstName,
        string $lastName,
        ?string $middleName,
        string $gender,
        ?string $birthDate,
        string $email,
        ?string $phone,
        ?string $avatarPath
        )
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->middleName = $middleName;
        $this->gender = $gender;
        $this->birthDate = $birthDate;
        $this->email = $email;
        $this->phone = $phone;
        $this->avatarPath = $avatarPath;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    public function getGender(): string
    {
        return $this->gender;
    }

    public function getBirthDate(): ?string
    {
        return empty($this->birthDate) ? null : $this->birthDate;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    public function getAvatarPath(): ?string
    {
        return $this->avatarPath;
    }
    public function setId(int $id): void
    {
        if (empty($id))
        {
            throw new \InvalidArgumentException('Empty id');
        }
        $this->id = $id;
    }
    public function setFirstName(string $firstName): void
    {
        if (empty($firstName))
        {
            throw new \InvalidArgumentException('Empty FirstName');
        }
        $this->firstName = $firstName;
    }
    public function setLastName(string $lastName): void
    {
        if (empty($lastName))
        {
            throw new \InvalidArgumentException('Empty lastName');
        }
        $this->lastName = $lastName;
    }
    public function setMiddleName(string $middleName): void
    {
        if (empty($middleName))
        {
            throw new \InvalidArgumentException('Empty MiddleName');
        }
        $this->middleName = $middleName;
    }
    public function setGender(string $gender): void
    {
        if (empty($gender))
        {
            throw new \InvalidArgumentException('Empty gender');
        }
        $this->gender = $gender;
    }
    public function setBirthDay(\DateTimeImmutable $birthDay): void
    {
        if (empty($birthDay))
        {
            throw new \InvalidArgumentException('Empty BirthDay');
        }
        $this->birthDate = $birthDay;
    }
    public function setEmail(string $email): void
    {
        if (empty($email))
        {
            throw new \InvalidArgumentException('Empty email');
        }
        $this->email = $email;
    }
    public function setPhone(string $phone): void
    {
        if (empty($phone))
        {
            throw new \InvalidArgumentException('Empty phone');
        }
        $this->phone = $phone;
    }
    public function setAvatarPath(string $avatarPath): void
    {
        if (empty($avatarPath))
        {
            throw new \InvalidArgumentException('Empty AvatarPath');
        }
        $this->avatarPath = $avatarPath;
    }
}