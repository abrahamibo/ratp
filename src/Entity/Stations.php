<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StationsRepository")
 */
class Stations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $geoPoint;

    /**
     * @ORM\Column(type="json")
     */
    private $geoShape = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $objectid ;

    /**
     * @ORM\Column(type="integer")
     */
    private $refZdl;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $stationName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $longName;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ivName;

    /**
     * @ORM\Column(type="integer")
     */
    private $numMod;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mode;

    /**
     * @ORM\Column(type="integer")
     */
    private $fer;

    /**
     * @ORM\Column(type="integer")
     */
    private $train;

    /**
     * @ORM\Column(type="integer")
     */
    private $rer;

    /**
     * @ORM\Column(type="integer")
     */
    private $metro;

    /**
     * @ORM\Column(type="integer")
     */
    private $tramway;

    /**
     * @ORM\Column(type="integer")
     */
    private $navette;

    /**
     * @ORM\Column(type="integer")
     */
    private $val;

    /**
     * @ORM\Column(type="integer")
     */
    private $terfer;

    /**
     * @ORM\Column(type="integer")
     */
    private $tertrain;

    /**
     * @ORM\Column(type="integer")
     */
    private $terrer;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $termetro;

    /**
     * @ORM\Column(type="integer")
     */
    private $ternavette;

    /**
     * @ORM\Column(type="integer")
     */
    private $tertram;

    /**
     * @ORM\Column(type="integer")
     */
    private $terval;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $refliga;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $refligc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $line;

    /**
     * @ORM\Column(type="float")
     */
    private $codLigf;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $codeLine;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $indiceLig;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $reseau;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $resCom;

    /**
     * @ORM\Column(type="float")
     */
    private $codResf;

    /**
     * @ORM\Column(type="float")
     */
    private $resStif;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $exploitant;

    /**
     * @ORM\Column(type="integer")
     */
    private $numPsr;

    /**
     * @ORM\Column(type="integer")
     */
    private $idf;

    /**
     * @ORM\Column(type="integer")
     */
    private $principal;

    /**
     * @ORM\Column(type="float")
     */
    private $x;

    /**
     * @ORM\Column(type="float")
     */
    private $y;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGeoPoint(): ?string
    {
        return $this->geoPoint;
    }

    public function setGeoPoint(string $geoPoint): self
    {
        $this->geoPoint = $geoPoint;

        return $this;
    }

    public function getGeoShape(): ?array
    {
        return $this->geoShape;
    }

    public function setGeoShape(array $geoShape): self
    {
        $this->geoShape = $geoShape;

        return $this;
    }

    public function getObjectid(): ?int
    {
        return $this->objectid;
    }

    public function setObjectid(int $objectid): self
    {
        $this->objectid = $objectid;

        return $this;
    }

    public function getRefZdl(): ?int
    {
        return $this->refZdl;
    }

    public function setRefZdl(int $refZdl): self
    {
        $this->refZdl = $refZdl;

        return $this;
    }

    public function getStationName(): ?string
    {
        return $this->stationName;
    }

    public function setStationName(string $stationName): self
    {
        $this->stationName = $stationName;

        return $this;
    }

    public function getLongName(): ?string
    {
        return $this->longName;
    }

    public function setLongName(string $longName): self
    {
        $this->longName = $longName;

        return $this;
    }

    public function getIvName(): ?string
    {
        return $this->ivName;
    }

    public function setIvName(string $ivName): self
    {
        $this->ivName = $ivName;

        return $this;
    }

    public function getNumMod(): ?int
    {
        return $this->numMod;
    }

    public function setNumMod(int $numMod): self
    {
        $this->numMod = $numMod;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getFer(): ?int
    {
        return $this->fer;
    }

    public function setFer(int $fer): self
    {
        $this->fer = $fer;

        return $this;
    }

    public function getTrain(): ?int
    {
        return $this->train;
    }

    public function setTrain(int $train): self
    {
        $this->train = $train;

        return $this;
    }

    public function getRer(): ?int
    {
        return $this->rer;
    }

    public function setRer(int $rer): self
    {
        $this->rer = $rer;

        return $this;
    }

    public function getMetro(): ?int
    {
        return $this->metro;
    }

    public function setMetro(int $metro): self
    {
        $this->metro = $metro;

        return $this;
    }

    public function getTramway(): ?int
    {
        return $this->tramway;
    }

    public function setTramway(int $tramway): self
    {
        $this->tramway = $tramway;

        return $this;
    }

    public function getNavette(): ?int
    {
        return $this->navette;
    }

    public function setNavette(int $navette): self
    {
        $this->navette = $navette;

        return $this;
    }

    public function getVal(): ?int
    {
        return $this->val;
    }

    public function setVal(int $val): self
    {
        $this->val = $val;

        return $this;
    }

    public function getTerfer(): ?int
    {
        return $this->terfer;
    }

    public function setTerfer(int $terfer): self
    {
        $this->terfer = $terfer;

        return $this;
    }

    public function getTertrain(): ?int
    {
        return $this->tertrain;
    }

    public function setTertrain(int $tertrain): self
    {
        $this->tertrain = $tertrain;

        return $this;
    }

    public function getTerrer(): ?int
    {
        return $this->terrer;
    }

    public function setTerrer(int $terrer): self
    {
        $this->terrer = $terrer;

        return $this;
    }

    public function getTermetro(): ?string
    {
        return $this->termetro;
    }

    public function setTermetro(string $termetro): self
    {
        $this->termetro = $termetro;

        return $this;
    }

    public function getTernavette(): ?int
    {
        return $this->ternavette;
    }

    public function setTernavette(int $ternavette): self
    {
        $this->ternavette = $ternavette;

        return $this;
    }

    public function getTertram(): ?int
    {
        return $this->tertram;
    }

    public function setTertram(int $tertram): self
    {
        $this->tertram = $tertram;

        return $this;
    }

    public function getTerval(): ?int
    {
        return $this->terval;
    }

    public function setTerval(int $terval): self
    {
        $this->terval = $terval;

        return $this;
    }

    public function getRefliga(): ?string
    {
        return $this->refliga;
    }

    public function setRefliga(string $refliga): self
    {
        $this->refliga = $refliga;

        return $this;
    }

    public function getRefligc(): ?string
    {
        return $this->refligc;
    }

    public function setRefligc(?string $refligc): self
    {
        $this->refligc = $refligc;

        return $this;
    }

    public function getLine(): ?string
    {
        return $this->line;
    }

    public function setLine(string $line): self
    {
        $this->line = $line;

        return $this;
    }

    public function getCodLigf(): ?float
    {
        return $this->codLigf;
    }

    public function setCodLigf(float $codLigf): self
    {
        $this->codLigf = $codLigf;

        return $this;
    }

    public function getCodeLine(): ?string
    {
        return $this->codeLine;
    }

    public function setCodeLine(string $codeLine): self
    {
        $this->codeLine = $codeLine;

        return $this;
    }

    public function getIndiceLig(): ?string
    {
        return $this->indiceLig;
    }

    public function setIndiceLig(string $indiceLig): self
    {
        $this->indiceLig = $indiceLig;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(string $reseau): self
    {
        $this->reseau = $reseau;

        return $this;
    }

    public function getResCom(): ?string
    {
        return $this->resCom;
    }

    public function setResCom(string $resCom): self
    {
        $this->resCom = $resCom;

        return $this;
    }

    public function getCodResf(): ?float
    {
        return $this->codResf;
    }

    public function setCodResf(float $codResf): self
    {
        $this->codResf = $codResf;

        return $this;
    }

    public function getResStif(): ?float
    {
        return $this->resStif;
    }

    public function setResStif(float $resStif): self
    {
        $this->resStif = $resStif;

        return $this;
    }

    public function getExploitant(): ?string
    {
        return $this->exploitant;
    }

    public function setExploitant(string $exploitant): self
    {
        $this->exploitant = $exploitant;

        return $this;
    }

    public function getNumPsr(): ?int
    {
        return $this->numPsr;
    }

    public function setNumPsr(int $numPsr): self
    {
        $this->numPsr = $numPsr;

        return $this;
    }

    public function getIdf(): ?int
    {
        return $this->idf;
    }

    public function setIdf(int $idf): self
    {
        $this->idf = $idf;

        return $this;
    }

    public function getPrincipal(): ?int
    {
        return $this->principal;
    }

    public function setPrincipal(int $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getX(): ?float
    {
        return $this->x;
    }

    public function setX(float $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function getY(): ?float
    {
        return $this->y;
    }

    public function setY(float $y): self
    {
        $this->y = $y;

        return $this;
    }
}
