<?php

namespace App\Entity;

use App\Repository\FormulaireTitulaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormulaireTitulaireRepository::class)
 */
class FormulaireTitulaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $echelleCalendrier;

    /**
     * @ORM\Column(type="text")
     */
    private $texteHebdomadaire;

    /**
     * @ORM\Column(type="text")
     */
    private $textePonctuel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $remarquesHebdoActives;

    /**
     * @ORM\Column(type="boolean")
     */
    private $remarquesPonctuelActives;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estOuvert;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantiteProForte;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantiteProMoy;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantiteProFaible;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantitePersForte;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantitePersMoy;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantitePersFaible;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeProForte;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeProMoy;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureeProFaible;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureePersForte;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureePersMoy;

    /**
     * @ORM\Column(type="integer")
     */
    private $dureePersFaible;

    /**
     * @ORM\Column(type="time")
     */
    private $heureDebutCalendrier;

    /**
     * @ORM\Column(type="time")
     */
    private $heureFinCalendrier;

    /**
     * @ORM\Column(type="boolean")
     */
    private $autoriserTitreVideContraintePerso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $anneeUniversitaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEchelleCalendrier(): ?int
    {
        return $this->echelleCalendrier;
    }

    public function setEchelleCalendrier(int $echelleCalendrier): self
    {
        $this->echelleCalendrier = $echelleCalendrier;

        return $this;
    }

    public function getTexteHebdomadaire(): ?string
    {
        return $this->texteHebdomadaire;
    }

    public function setTexteHebdomadaire(string $texteHebdomadaire): self
    {
        $this->texteHebdomadaire = $texteHebdomadaire;

        return $this;
    }

    public function getTextePonctuel(): ?string
    {
        return $this->textePonctuel;
    }

    public function setTextePonctuel(string $textePonctuel): self
    {
        $this->textePonctuel = $textePonctuel;

        return $this;
    }

    public function getRemarquesHebdoActives(): ?bool
    {
        return $this->remarquesHebdoActives;
    }

    public function setRemarquesHebdoActives(bool $remarquesHebdoActives): self
    {
        $this->remarquesHebdoActives = $remarquesHebdoActives;

        return $this;
    }

    public function getRemarquesPonctuelActives(): ?bool
    {
        return $this->remarquesPonctuelActives;
    }

    public function setRemarquesPonctuelActives(bool $remarquesPonctuelActives): self
    {
        $this->remarquesPonctuelActives = $remarquesPonctuelActives;

        return $this;
    }

    public function getEstOuvert(): ?bool
    {
        return $this->estOuvert;
    }

    public function setEstOuvert(bool $estOuvert): self
    {
        $this->estOuvert = $estOuvert;

        return $this;
    }

    public function getQuantiteProForte(): ?int
    {
        return $this->quantiteProForte;
    }

    public function setQuantiteProForte(int $quantiteProForte): self
    {
        $this->quantiteProForte = $quantiteProForte;

        return $this;
    }

    public function getQuantiteProMoy(): ?int
    {
        return $this->quantiteProMoy;
    }

    public function setQuantiteProMoy(int $quantiteProMoy): self
    {
        $this->quantiteProMoy = $quantiteProMoy;

        return $this;
    }

    public function getQuantiteProFaible(): ?int
    {
        return $this->quantiteProFaible;
    }

    public function setQuantiteProFaible(int $quantiteProFaible): self
    {
        $this->quantiteProFaible = $quantiteProFaible;

        return $this;
    }

    public function getQuantitePersForte(): ?int
    {
        return $this->quantitePersForte;
    }

    public function setQuantitePersForte(int $quantitePersForte): self
    {
        $this->quantitePersForte = $quantitePersForte;

        return $this;
    }

    public function getQuantitePersMoy(): ?int
    {
        return $this->quantitePersMoy;
    }

    public function setQuantitePersMoy(int $quantitePersMoy): self
    {
        $this->quantitePersMoy = $quantitePersMoy;

        return $this;
    }

    public function getQuantitePersFaible(): ?int
    {
        return $this->quantitePersFaible;
    }

    public function setQuantitePersFaible(int $quantitePersFaible): self
    {
        $this->quantitePersFaible = $quantitePersFaible;

        return $this;
    }

    public function getDureeProForte(): ?int
    {
        return $this->dureeProForte;
    }

    public function setDureeProForte(int $dureeProForte): self
    {
        $this->dureeProForte = $dureeProForte;

        return $this;
    }

    public function getDureeProMoy(): ?int
    {
        return $this->dureeProMoy;
    }

    public function setDureeProMoy(int $dureeProMoy): self
    {
        $this->dureeProMoy = $dureeProMoy;

        return $this;
    }

    public function getDureeProFaible(): ?int
    {
        return $this->dureeProFaible;
    }

    public function setDureeProFaible(int $dureeProFaible): self
    {
        $this->dureeProFaible = $dureeProFaible;

        return $this;
    }

    public function getDureePersForte(): ?int
    {
        return $this->dureePersForte;
    }

    public function setDureePersForte(int $dureePersForte): self
    {
        $this->dureePersForte = $dureePersForte;

        return $this;
    }

    public function getDureePersMoy(): ?int
    {
        return $this->dureePersMoy;
    }

    public function setDureePersMoy(int $dureePersMoy): self
    {
        $this->dureePersMoy = $dureePersMoy;

        return $this;
    }

    public function getDureePersFaible(): ?int
    {
        return $this->dureePersFaible;
    }

    public function setDureePersFaible(int $dureePersFaible): self
    {
        $this->dureePersFaible = $dureePersFaible;

        return $this;
    }

    public function getHeureDebutCalendrier(): ?\DateTimeInterface
    {
        return $this->heureDebutCalendrier;
    }

    public function setHeureDebutCalendrier(\DateTimeInterface $heureDebutCalendrier): self
    {
        $this->heureDebutCalendrier = $heureDebutCalendrier;

        return $this;
    }

    public function getHeureFinCalendrier(): ?\DateTimeInterface
    {
        return $this->heureFinCalendrier;
    }

    public function setHeureFinCalendrier(\DateTimeInterface $heureFinCalendrier): self
    {
        $this->heureFinCalendrier = $heureFinCalendrier;

        return $this;
    }

    public function getAutoriserTitreVideContraintePerso(): ?bool
    {
        return $this->autoriserTitreVideContraintePerso;
    }

    public function setAutoriserTitreVideContraintePerso(bool $autoriserTitreVideContraintePerso): self
    {
        $this->autoriserTitreVideContraintePerso = $autoriserTitreVideContraintePerso;

        return $this;
    }

    public function getAnneeUniversitaire(): ?string
    {
        return $this->anneeUniversitaire;
    }

    public function setAnneeUniversitaire(string $anneeUniversitaire): self
    {
        $this->anneeUniversitaire = $anneeUniversitaire;

        return $this;
    }
}
