<?php

// je crée une classe appelée 'BackgroundBody'
class BackgroundBody
{
    /**
     * Propriété '$_color' qui accueillera la chaine de caractères représentant la couleur
     *
     * @var string
     */
    private string $_color = "";
    
    /**
     * Constructeur de la classe
     * Va permettre d'envoyer à la méthode setter qui va vérifier le tableau reçu
     *
     * @param array $get
     */
    public function __construct(array $get)
    {
        $this->setColor($get);
    }

    /**
     * Méthode setColor() qui va s'occuper de vérifier le tableau
     * Setter (mutateur)
     *
     * @param array $get
     * @return void
     */
    public function setColor(array $get) : void
    {
        if (isset($_GET['color'])) {
            $this->_color = $_GET['color'];
        }
    }

    /**
     * Méthode getColor() qui va permettre de récupérer la valeur de la propriété '$_color'
     * Getter (accesseur)
     *
     * @return void
     */
    public function getColor() : void
    {
        echo $this->_color;
    }
}