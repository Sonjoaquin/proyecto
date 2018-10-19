<?php

class Carrito
{
    private $productos = [];

    private function __construct()
    {

    }

    public static function getCarrito()
    {
      if (isset($_SESSION['micarrito']))
      {
        return  $_SESSION['micarrito'];
      }
      $carrito = new Carrito();
      $_SESSION['micarrito'] = $carrito;
      return $carrito;
    }

    public function meter($producto)
    {
        $this->productos[] = $producto;
    }

    public function mostrar()
    {
        $total = 0;
        $totalIva = 0;

        echo '<div class="carrito">';

        foreach ($this->productos as $key => $producto) {
            echo '<article class="lineacarrito">';
            echo $producto->mostrar();
            echo '</article>';

            $enlaceMasUnidad = "?accion=masunidad&&indice=$key";
            $enlaceMenosUnidad = "?accion=menosunidad&&indice=$key";
            $enlaceEliminar = "?accion=eliminar&&indice=$key";

            if ($producto->permiteUnidades())
            {
              echo "<a href=\"$enlaceMenosUnidad\">-</a> / <a href=\"$enlaceMasUnidad\">+</a>";
            }
            echo "<a href=\"$enlaceEliminar\" class=\"enlaceeliminar\">Eliminar</a>";
            echo '</article>';

            $total += $producto->precio();
            $totalIva += $producto->precioIva();
        }

        echo '<div class="totalcarrito">Total: ' . $total . ' (' . $totalIva . ' IVA incluido)</div>';

        echo '</div>';
    }

    public function quitar($indice)
    {
        unset($this->productos[$indice]);
    }

    public function masunidad($indice)
    {
        $this->productos[$indice]->masUnidad();
    }

    public function menosUnidad($indice)
    {
        $this->productos[$indice]->menosUnidad();
    }
}
