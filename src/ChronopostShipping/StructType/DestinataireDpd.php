<?php

declare(strict_types=1);

namespace ChronopostShipping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinataireDpd StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinataireDpd extends AbstractStructBase
{
    /**
     * The adresseDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\AdresseDestinataire|null
     */
    protected ?\ChronopostShipping\StructType\AdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\InfoClient|null
     */
    protected ?\ChronopostShipping\StructType\InfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\Particularites|null
     */
    protected ?\ChronopostShipping\StructType\Particularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostShipping\StructType\ParticularitesColisDpd|null
     */
    protected ?\ChronopostShipping\StructType\ParticularitesColisDpd $particularitesColisDpd = null;
    /**
     * Constructor method for destinataireDpd
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
     * @param \ChronopostShipping\StructType\AdresseDestinataire $adresseDestinataire
     * @param \ChronopostShipping\StructType\InfoClient $infoClient
     * @param \ChronopostShipping\StructType\Particularites $particularites
     * @param \ChronopostShipping\StructType\ParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(?\ChronopostShipping\StructType\AdresseDestinataire $adresseDestinataire = null, ?\ChronopostShipping\StructType\InfoClient $infoClient = null, ?\ChronopostShipping\StructType\Particularites $particularites = null, ?\ChronopostShipping\StructType\ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd);
    }
    /**
     * Get adresseDestinataire value
     * @return \ChronopostShipping\StructType\AdresseDestinataire|null
     */
    public function getAdresseDestinataire(): ?\ChronopostShipping\StructType\AdresseDestinataire
    {
        return $this->adresseDestinataire;
    }
    /**
     * Set adresseDestinataire value
     * @param \ChronopostShipping\StructType\AdresseDestinataire $adresseDestinataire
     * @return \ChronopostShipping\StructType\DestinataireDpd
     */
    public function setAdresseDestinataire(?\ChronopostShipping\StructType\AdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;
        
        return $this;
    }
    /**
     * Get infoClient value
     * @return \ChronopostShipping\StructType\InfoClient|null
     */
    public function getInfoClient(): ?\ChronopostShipping\StructType\InfoClient
    {
        return $this->infoClient;
    }
    /**
     * Set infoClient value
     * @param \ChronopostShipping\StructType\InfoClient $infoClient
     * @return \ChronopostShipping\StructType\DestinataireDpd
     */
    public function setInfoClient(?\ChronopostShipping\StructType\InfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;
        
        return $this;
    }
    /**
     * Get particularites value
     * @return \ChronopostShipping\StructType\Particularites|null
     */
    public function getParticularites(): ?\ChronopostShipping\StructType\Particularites
    {
        return $this->particularites;
    }
    /**
     * Set particularites value
     * @param \ChronopostShipping\StructType\Particularites $particularites
     * @return \ChronopostShipping\StructType\DestinataireDpd
     */
    public function setParticularites(?\ChronopostShipping\StructType\Particularites $particularites = null): self
    {
        $this->particularites = $particularites;
        
        return $this;
    }
    /**
     * Get particularitesColisDpd value
     * @return \ChronopostShipping\StructType\ParticularitesColisDpd|null
     */
    public function getParticularitesColisDpd(): ?\ChronopostShipping\StructType\ParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }
    /**
     * Set particularitesColisDpd value
     * @param \ChronopostShipping\StructType\ParticularitesColisDpd $particularitesColisDpd
     * @return \ChronopostShipping\StructType\DestinataireDpd
     */
    public function setParticularitesColisDpd(?\ChronopostShipping\StructType\ParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;
        
        return $this;
    }
}
