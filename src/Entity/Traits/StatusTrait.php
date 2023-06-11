<?php

declare(strict_types=1);

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait StatusTrait
{
    #[ORM\Column(
        nullable: false,
        columnDefinition: "ENUM('PUBLISHED', 'UN_PUBLISHED') DEFAULT 'Published'"
    )
    ]
    private ?string $status = null;

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(
        string $status
    ): self {
        $this->status = $status;

        return $this;
    }
}
