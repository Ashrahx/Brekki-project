<?php

    class Order implements JsonSerializable{
        //Atributos


        //Constructor


        //Metodos

        function jsonSerialize(){
			return get_object_vars($this);
		}
    }

?>