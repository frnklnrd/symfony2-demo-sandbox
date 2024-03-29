<?php

namespace Samples\AvaliacaoDesempenhoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="samples_avaliacao_desempenho__participacaoactividade")
 * @ORM\Entity
 */
class ParticipacaoActividade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Pessoal")
     * @ORM\JoinColumn(name="pessoal_id", referencedColumnName="id")
     */
    protected $pessoal;
    
    /**
     * @ORM\ManyToOne(targetEntity="TipoActividade")
     * @ORM\JoinColumn(name="tipo_actividade_id", referencedColumnName="id")
     */
    protected $tipo_actividade;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date")
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="nacional_internacional", type="string", length=255, nullable=true)
     */
    private $nacional_internacional;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="text", nullable=true)
     */
    private $observacoes;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return ParticipacaoActividade
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set nacional_internacional
     *
     * @param string $nacionalInternacional
     * @return ParticipacaoActividade
     */
    public function setNacionalInternacional($nacionalInternacional)
    {
        $this->nacional_internacional = $nacionalInternacional;

        return $this;
    }

    /**
     * Get nacional_internacional
     *
     * @return string 
     */
    public function getNacionalInternacional()
    {
        return $this->nacional_internacional;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return ParticipacaoActividade
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     * @return ParticipacaoActividade
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }

    /**
     * Get observacoes
     *
     * @return string 
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set pessoal
     *
     * @param \Samples\AvaliacaoDesempenhoBundle\Entity\Pessoal $pessoal
     * @return ParticipacaoActividade
     */
    public function setPessoal(\Samples\AvaliacaoDesempenhoBundle\Entity\Pessoal $pessoal = null)
    {
        $this->pessoal = $pessoal;

        return $this;
    }

    /**
     * Get pessoal
     *
     * @return \Samples\AvaliacaoDesempenhoBundle\Entity\Pessoal 
     */
    public function getPessoal()
    {
        return $this->pessoal;
    }

    /**
     * Set tipo_actividade
     *
     * @param \Samples\AvaliacaoDesempenhoBundle\Entity\TipoActividade $tipoActividade
     * @return ParticipacaoActividade
     */
    public function setTipoActividade(\Samples\AvaliacaoDesempenhoBundle\Entity\TipoActividade $tipoActividade = null)
    {
        $this->tipo_actividade = $tipoActividade;

        return $this;
    }

    /**
     * Get tipo_actividade
     *
     * @return \Samples\AvaliacaoDesempenhoBundle\Entity\TipoActividade 
     */
    public function getTipoActividade()
    {
        return $this->tipo_actividade;
    }
}
