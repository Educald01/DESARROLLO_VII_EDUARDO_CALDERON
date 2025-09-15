<?php
require_once 'Evaluable.php';

class Empresa {
    private array $empleados = [];

    public function agregarEmpleado(Empleado $empleado): void {
        $this->empleados[] = $empleado;
    }

    public function listarEmpleados(): void {
        foreach ($this->empleados as $emp) {
            echo "Nombre: {$emp->getNombre()} | ID: {$emp->getIdEmpleado()} | Salario Base: {$emp->getSalarioBase()}<br>";
        }
    }
    // Calcular la Planilla de los empleados
    public function calcularplanilla(): float {
        $total = 0;
        foreach ($this->empleados as $emp) {
            if (method_exists($emp, 'getSalarioTotal')) {
                $total += $emp->getSalarioTotal();
            } else {
                $total += $emp->getSalarioBase();
            }
        }
        return $total;
    }
    //Evaluacion de rendimiento
    public function evaluarEmpleados(): void {
        foreach ($this->empleados as $emp) {
            if ($emp instanceof Evaluable) {
                echo $emp->evaluarDesempenio() . "<br>";
            }
        }
    }
}