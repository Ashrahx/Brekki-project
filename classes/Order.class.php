<?php

    class Order implements JsonSerializable{
        //Atributos
        private $name;
        private $price;
        private $quantity;

        //Constructor


        //Metodos

        function jsonSerialize(){
			return get_object_vars($this);
		}
    }

?>