<?php

namespace Nfser\LearningTests;

class User
{
    public string $name;
    public string $nickname;
    public int $age;
    public array $pets = [];

    public function __construct(string $name, string $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function tellName(): string
    {
        return "User's name is " . $this->name;
    }

    public function tellAge(): string
    {
        return "User's age is " . $this->age;
    }

    public function setNickname(string $nickname): bool
    {
        $this->nickname = $nickname;
        
        return true;
    }

    public function addPet(string $petName): bool
    {
        $this->pets[] = $petName;

        return true;
    }

    public function removePet(string $petName): bool
    {
        unset($this->pets[array_search($petName, $this->pets)]);

        return true;
    }
}