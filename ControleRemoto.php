<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    //Metodos especiais
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }
     
    //Sobreescrevendo Metodos
    
    public  function Ligar(){
        $this->setLigado(true);
    }
    public  function Desligar(){
        $this->setLigado(false);
    }
    
    public  function abrirMenu(){
    echo"---Menu---";
    echo "<br>Esta ligado?:" . ($this->getLigado()?"Sim":"Não");
    echo"<br>Esta Tocando?:" . ($this->getTocando()?"Sim":"Não");
    echo"<br>Volume:" . $this->getVolume();
    for($i = 0; $i <= $this->getVolume(); $i += 10){
        echo"|";
    }
    echo"<br>";
    }
    
    public  function fecharMenu(){
        echo"Fechando Menu...";
    }
    public  function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public  function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }

    }
    public  function ligarMudo(){
        if($this->getLigado()&& $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public  function desligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(50);
        }
    }
    public  function Play(){
        if($this->getLigado() && ! ($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public  function Pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}

