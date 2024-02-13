<?php

declare(strict_types=1);

namespace Del\Entity;

use JsonSerializable;

class Country
{
    private string $id = '';
    private string $iso = '';
    private string $name = '';
    private int $numCode = 0;
    private string $flag = '';

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getIso(): string
    {
        return $this->iso;
    }

    public function setIso(string $iso): void
    {
        $this->iso = $iso;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getNumCode(): int
    {
        return $this->numCode;
    }

    public function setNumCode(int $numCode): void
    {
        $this->numCode = $numCode;
    }

    public function getFlag(): string
    {
        return $this->flag;
    }

    public function setFlag(string $flag): void
    {
        $this->flag = $flag;
    }

    public function toArray(): array
    {
        return [
             'id' => $this->id,
             'iso' => $this->iso,
             'num_code' => $this->numCode,
             'numCode' => $this->numCode,
             'flag' => $this->flag,
        ];
    }

    public function __toString(): string
    {
        return $this->iso;
    }
}
