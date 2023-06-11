<?php

namespace App\Entity;

use App\Entity\Traits\TimableTrait;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
#[UniqueEntity(fields:"code", message:"this mobile is already used")]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    use TimableTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 200)]
    private ?string $code = null;

    #[ORM\Column(length: 11, nullable: true)]
    private ?string $phoneNumberI = null;

    #[ORM\Column(length: 11, nullable: true)]
    private ?string $phoneNumberIi = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tel = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $nationalIdNumber = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $nationalCardImageUrl = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $postalCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fullname = null;

    #[ORM\OneToMany(mappedBy: 'userId', targetEntity: ApplianceRepair::class)]
    private Collection $applianceRepairs;

    public function __construct()
    {
        $this->applianceRepairs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getPhoneNumberI(): ?string
    {
        return $this->phoneNumberI;
    }

    public function setPhoneNumberI(string $phoneNumberI): static
    {
        $this->phoneNumberI = $phoneNumberI;

        return $this;
    }

    public function getPhoneNumberIi(): ?string
    {
        return $this->phoneNumberIi;
    }

    public function setPhoneNumberIi(?string $phoneNumberIi): static
    {
        $this->phoneNumberIi = $phoneNumberIi;

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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getNationalIdNumber(): ?string
    {
        return $this->nationalIdNumber;
    }

    public function setNationalIdNumber(?string $nationalIdNumber): static
    {
        $this->nationalIdNumber = $nationalIdNumber;

        return $this;
    }

    public function getNationalCardImageUrl(): ?string
    {
        return $this->nationalCardImageUrl;
    }

    public function setNationalCardImageUrl(?string $nationalCardImageUrl): static
    {
        $this->nationalCardImageUrl = $nationalCardImageUrl;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): static
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(?string $fullname): static
    {
        $this->fullname = $fullname;

        return $this;
    }

    // Required methods from UserInterface

    public function getRoles(): array
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {
        // You can leave this method empty if using bcrypt for password hashing
    }

    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the admin, clear it here
    }

    public function getUserIdentifier(): string
    {
        return $this->code;
    }

    /**
     * @return Collection<int, ApplianceRepair>
     */
    public function getApplianceRepairs(): Collection
    {
        return $this->applianceRepairs;
    }

    public function addApplianceRepair(ApplianceRepair $applianceRepair): static
    {
        if (!$this->applianceRepairs->contains($applianceRepair)) {
            $this->applianceRepairs->add($applianceRepair);
            $applianceRepair->setUserId($this);
        }

        return $this;
    }

    public function removeApplianceRepair(ApplianceRepair $applianceRepair): static
    {
        if ($this->applianceRepairs->removeElement($applianceRepair)) {
            // set the owning side to null (unless already changed)
            if ($applianceRepair->getUserId() === $this) {
                $applianceRepair->setUserId(null);
            }
        }

        return $this;
    }

}