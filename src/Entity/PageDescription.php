<?php

namespace Syclass\Core\Entity;

class PageDescription
{
    private $pageId;

    private $localeCode;

    private $title;

    private $text;
    /**
     * @var Page
     */
    private $page;

    /**
    * @var Locale
    */
    private $locale;

    public function getLocaleCode(): ?string
    {
        return $this->localeCode;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = substr($title, 0, 100);

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLocale(): ?Locale
    {
        return $this->locale;
    }

    public function setLocale(?Locale $locale): self
    {
        $this->locale = $locale;
        $this->localeCode = $locale->getCode();

        return $this;
    }

    /**
     * Get the value of Page Id
     *
     * @return mixed
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set the value of Page Id
     *
     * @param mixed pageId
     *
     * @return self
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;

        return $this;
    }

    /**
     * Set the value of Locale Code
     *
     * @param mixed localeCode
     *
     * @return self
     */
    public function setLocaleCode($localeCode)
    {
        $this->localeCode = $localeCode;

        return $this;
    }

    /**
     * Get the value of Text
     *
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of Text
     *
     * @param mixed text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of Page
     *
     * @return Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Set the value of Page
     *
     * @param Page page
     *
     * @return self
     */
    public function setPage(Page $page)
    {
        $this->page = $page;

        return $this;
    }

}
