<?php declare(strict_types=1);

namespace Del\Entity;

use JsonSerializable;

class Country
{
    private string $id = '';
    private string $iso = '';
    private string $name = '';
    private string $num_code = '';
    private string $flag = '';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIso(): string
    {
        return $this->iso;
    }

    /**
     * @param string $iso
     */
    public function setIso(string $iso): void
    {
        $this->iso = $iso;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNumCode(): string
    {
        return $this->num_code;
    }

    /**
     * @param string $num_code
     */
    public function setNumCode(string $num_code): void
    {
        $this->num_code = $num_code;
    }

    /**
     * @return string
     */
    public function getFlag(): string
    {
        return $this->flag;
    }

    /**
     * @param string $flag
     */
    public function setFlag(string $flag): void
    {
        $this->flag = $flag;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
             'id' => $this->id,
             'iso' => $this->iso,
             'num_code' => $this->num_code,
             'flag' => $this->flag,
        ];
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->iso;
    }
}
