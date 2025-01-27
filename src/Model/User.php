<?php
declare(strict_types=1);

namespace App\Model;
class User
{
    public function __construct(
        private ?int $id,
        private string $firstName,
        private string $lastName,
        private ?string $middleName,
        private string $gender,
        private ?string $birthDate,
        private string $email,
        private ?string $phone,
        private ?string $avatarPath
        )
    {
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
    public function setMiddleName(?string $middleName): void
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
    public function setBirthDay(?string $birthDay): void
    {
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
    public function setPhone(?string $phone): void
    {
        if (empty($phone))
        {
            throw new \InvalidArgumentException('Empty phone');
        }
        $this->phone = $phone;
    }
    public function setAvatarPath(?string $avatarPath): void
    {
        $this->avatarPath = $avatarPath;
    }
}