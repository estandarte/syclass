<?php

namespace Syclass\Core\Entity;

class Keywords
{
    private $sMd5;

    private $sOriginalText;

    private $sAnchorText;

    private $sNormalizedText;

    private $fkCLocaleCode;

    private $fkICategory;

    private $fkICity;

    public function getSMd5(): ?string
    {
        return $this->sMd5;
    }

    public function getSOriginalText(): ?string
    {
        return $this->sOriginalText;
    }

    public function setSOriginalText(string $sOriginalText): self
    {
        $this->sOriginalText = $sOriginalText;

        return $this;
    }

    public function getSAnchorText(): ?string
    {
        return $this->sAnchorText;
    }

    public function setSAnchorText(string $sAnchorText): self
    {
        $this->sAnchorText = $sAnchorText;

        return $this;
    }

    public function getSNormalizedText(): ?string
    {
        return $this->sNormalizedText;
    }

    public function setSNormalizedText(string $sNormalizedText): self
    {
        $this->sNormalizedText = $sNormalizedText;

        return $this;
    }

    public function getFkCLocaleCode(): ?Locale
    {
        return $this->fkCLocaleCode;
    }

    public function setFkCLocaleCode(?Locale $fkCLocaleCode): self
    {
        $this->fkCLocaleCode = $fkCLocaleCode;

        return $this;
    }

    public function getFkICategory(): ?Category
    {
        return $this->fkICategory;
    }

    public function setFkICategory(?Category $fkICategory): self
    {
        $this->fkICategory = $fkICategory;

        return $this;
    }

    public function getFkICity(): ?City
    {
        return $this->fkICity;
    }

    public function setFkICity(?City $fkICity): self
    {
        $this->fkICity = $fkICity;

        return $this;
    }
}
