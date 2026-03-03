<?php

namespace App\Entity;

use App\Repository\DubRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DubRepository::class)]
class Dub
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 3)]
    private ?int $age = null;

    #[ORM\Column(length: 999)]
    private ?string $hobbys = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getHobbys(): ?string
    {
        return $this->hobbys;
    }

    public function setHobbys(string $hobbys): static
    {
        $this->hobbys = $hobbys;

        return $this;
    }
}
