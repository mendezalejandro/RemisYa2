<?php
namespace app\models\CapaServicio\ServicioBD;
/**
 * OperacionState short summary.
 *
 * OperacionState description.
 *
 * @version 1.0
 * @author mende
 */
interface OperacionState
{
    public function EjecutarOperacion($parametros, $SP);
}
