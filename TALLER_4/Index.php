<?php
require_once 'Gerente.php';
require_once 'Desarrollador.php';
require_once 'Empresa.php';

$empresa = new Empresa();

//Gerente
$gerente = new Gerente("Michael Jackson", 281755, 2500.50, "Departamento Marketing");
$gerente->asignarBono(500);

//Developer
$dev = new Desarrollador("Eduardo Calderon", 5527, 1785.23, "Python", "Semi Senior");

// Empleados
$empresa->agregarEmpleado($gerente);
$empresa->agregarEmpleado($dev);

// Listar empleados
echo "<h3>Lista de empleados:</h3>";
$empresa->listarEmpleados();

// Calcular planilla total
echo "<h3>Total de Planilla:</h3>";
echo $empresa->calcularplanilla() . "<br>";

// Evaluacion Desempeño
echo "<h3>Evaluaciones de desempeño:</h3>";
$empresa->evaluarEmpleados();