<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column]
    private ?int $timeGame = null;

    #[ORM\Column]
    private ?int $numberGame = null;

    #[ORM\Column]
    private ?int $winGame = null;

    #[ORM\Column]
    private ?int $levelMax = null;

    #[ORM\Column(length: 255)]
    private ?string $rank = null;

    #[ORM\Column]
    private ?int $reflexionTime = null;

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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getTimeGame(): ?int
    {
        return $this->timeGame;
    }

    public function setTimeGame(int $timeGame): static
    {
        $this->timeGame = $timeGame;

        return $this;
    }

    public function getNumberGame(): ?int
    {
        return $this->numberGame;
    }

    public function setNumberGame(int $numberGame): static
    {
        $this->numberGame = $numberGame;

        return $this;
    }

    public function getWinGame(): ?int
    {
        return $this->winGame;
    }

    public function setWinGame(int $winGame): static
    {
        $this->winGame = $winGame;

        return $this;
    }

    public function getLevelMax(): ?int
    {
        return $this->levelMax;
    }

    public function setLevelMax(int $levelMax): static
    {
        $this->levelMax = $levelMax;

        return $this;
    }

    public function getRank(): ?string
    {
        return $this->rank;
    }

    public function setRank(string $rank): static
    {
        $this->rank = $rank;

        return $this;
    }

    public function getReflexionTime(): ?int
    {
        return $this->reflexionTime;
    }

    public function setReflexionTime(int $reflexionTime): static
    {
        $this->reflexionTime = $reflexionTime;

        return $this;
    }
}
