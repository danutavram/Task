<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @MongoDB\Document
 * @Vich\Uploadable
 */

class Firma
{
    /**
     * @MongoDB\Id(strategy="UUID")
     */
    private $id;

    /**
     * @MongoDB\Field(type="string")
     */
    private $nume;

    /**
     * @MongoDB\Field(type="string")
     */
    private $adresa;

    /**
     * @MongoDB\Field(type="string")
     */
    private $categorie;

    /**
     * @Vich\UploadableField(mapping="firma_logo", fileNameProperty="logo")
     */
    private $logoFile;

    /**
     * @MongoDB\Field(type="integer")
     */
    private $views;

    /**
     * @MongoDB\Field(type="integer")
     */
    private $index;

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex($index)
    {
        $this->index = $index;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNume()
    {
        return $this->nume;
    }

    public function setNume($nume)
    {
        $this->nume = $nume;
    }

    public function getAdresa()
    {
        return $this->adresa;
    }

    public function setAdresa($adresa)
    {
        $this->adresa = $adresa;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getLogoFile()
    {
        return $this->logoFile;
    }

    public function setLogoFile(File $logo = null)
    {
        $this->logoFile = $logo;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function setViews($views)
    {
        $this->views = $views;
    }
}
