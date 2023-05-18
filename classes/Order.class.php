<?php

    class Order implements JsonSerializable{
        //Atributos
        private $product;
        private $price;

        //Constructor
        function __construct($producto, $precio){
            $this -> product = $producto;
            $this -> price = $precio;
        }


        //Metodos
        function getOrder(){
            echo "<tr>";
            echo "<td>$this->product</td>";
            echo "<td>\$$this->price</td>";
            echo "</tr>";
        }

        function jsonSerialize(){
			return get_object_vars($this);
		}
    }

?>