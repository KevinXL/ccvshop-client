<?php

namespace JacobDeKeizer\Ccv\Models\Orders;

class User
{
    private $id;
    private $discountPercentage;
    private $href;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscountPercentage(): ?float
    {
        return $this->discountPercentage;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setDiscountPercentage(?float $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;
        return $this;
    }

    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }
}