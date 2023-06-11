<?php

namespace App\Entity;

use App\Entity\Traits\TimableTrait;
use App\Repository\PaymentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
#[ORM\Table(name: 'payments')]
class Payment
{
    use TimableTrait;
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $resnumber = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bank_name = null;

    #[ORM\Column(length: 255)]
    private ?string $amount = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $result = null;

    #[ORM\Column(
        nullable: false,
        columnDefinition: "ENUM('PUBLISHED', 'UN_PUBLISHED') DEFAULT 'UN_PUBLISHED'"
        )
    ]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'payments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Wallet $walletId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResnumber(): ?string
    {
        return $this->resnumber;
    }

    public function setResnumber(?string $resnumber): static
    {
        $this->resnumber = $resnumber;

        return $this;
    }

    public function getBankName(): ?string
    {
        return $this->bank_name;
    }

    public function setBankName(?string $bank_name): static
    {
        $this->bank_name = $bank_name;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): static
    {
        $this->result = $result;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getWalletId(): ?Wallet
    {
        return $this->walletId;
    }

    public function setWalletId(?Wallet $walletId): static
    {
        $this->walletId = $walletId;

        return $this;
    }
}
