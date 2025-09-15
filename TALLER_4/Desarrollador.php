<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';

class Desarrollador extends Empleado implements Evaluable {
    private string $lenguajePrincipal;
    private string $nivelExperiencia;

    public function __construct(string $nombre, int $idEmpleado, float $salarioBase, string $lenguajePrincipal, string $nivelExperiencia) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->lenguajePrincipal = $lenguajePrincipal;
        $this->nivelExperiencia = $nivelExperiencia;
    }

    public function getLenguajePrincipal(): string { return $this->lenguajePrincipal; }
    public function setLenguajePrincipal(string $lenguaje): void { $this->lenguajePrincipal = $lenguaje; }

    public function getNivelExperiencia(): string { return $this->nivelExperiencia; }
    public function setNivelExperiencia(string $nivel): void { $this->nivelExperiencia = $nivel; }

    public function evaluarDesempenio(): string {
        return "El desarrollador {$this->nombre} ha demostrado habilidad sobresaliente en  {$this->lenguajePrincipal}.";
    }
}