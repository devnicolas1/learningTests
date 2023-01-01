<?php

namespace Nfser\LearningTests;

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testClassConstructor()
    {
        $user = new User('John', 18);

        $this->assertSame('John', $user->name);
        $this->assertSame(18, $user->age);
        $this->assertEmpty($user->pets);
    }

    public function testTellName()
    {
        $user = new User('John', 18);

        $this->assertIsString($user->tellName());
        $this->assertStringContainsString('John', $user->tellName());
    }

    public function testTellAge()
    {
        $user = new User('John', 18);

        $this->assertIsString($user->tellAge());
        $this->assertStringContainsString('18', $user->tellAge());
    }

    public function testAddPet()
    {
        $user = new User('John', 18);

        $this->assertTrue($user->addPet('Dog'));
        $this->assertContains('Dog', $user->pets);
        $this->assertCount(1, $user->pets);
    }

    public function testRemovePet()
    {
        $user = new User('John', 18);

        $this->assertTrue($user->addPet('Dog'));
        $this->assertTrue($user->addPet('Cat'));

        $this->assertTrue($user->removePet('Dog'));
        $this->assertNotContains('Dog', $user->pets);
        $this->assertCount(1, $user->pets);
    }
}