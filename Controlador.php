<?php

interface Controlador {
    public function Ligar();
    public function Desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function Play();
    public function Pause();
    
}
