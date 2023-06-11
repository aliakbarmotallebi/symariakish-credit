<?php

namespace App\Entity;

use App\Repository\ApplianceRepairRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApplianceRepairRepository::class)]
class ApplianceRepair
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $brand_name = null;

    #[ORM\Column(length: 255)]
    private ?string $productName = null;

    #[ORM\Column(length: 255)]
    private ?string $groupName = null;

    #[ORM\Column(length: 255)]
    private ?string $ModelName = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $imageBeforeUrl = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageAfterUrl = null;

    #[ORM\Column(length: 255)]
    private ?string $brandName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $costAmonut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrandName(): ?string
    {
        return $this->brand_name;
    }

    public function setBrandName(string $brand_name): static
    {
        $this->brand_name = $brand_name;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): static
    {
        $this->productName = $productName;

        return $this;
    }

    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): static
    {
        $this->groupName = $groupName;

        return $this;
    }

    public function getModelName(): ?string
    {
        return $this->ModelName;
    }

    public function setModelName(string $ModelName): static
    {
        $this->ModelName = $ModelName;

        return $this;
    }

    public function getImageBeforeUrl(): ?string
    {
        return $this->imageBeforeUrl;
    }

    public function setImageBeforeUrl(?string $imageBeforeUrl): static
    {
        $this->imageBeforeUrl = $imageBeforeUrl;

        return $this;
    }

    public function getImageAfterUrl(): ?string
    {
        return $this->imageAfterUrl;
    }

    public function setImageAfterUrl(?string $imageAfterUrl): static
    {
        $this->imageAfterUrl = $imageAfterUrl;

        return $this;
    }

    public function getCostAmonut(): ?string
    {
        return $this->costAmonut;
    }

    public function setCostAmonut(?string $costAmonut): static
    {
        $this->costAmonut = $costAmonut;

        return $this;
    }
}
