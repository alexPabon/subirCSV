<?php
class Product{
    //PROPIEDADES
    public $id=0, $nombre='', $referencia='', $ean13='', $precio_de_coste= 0,
    $precio_de_venta=0, $iva='', $cantidad=0, $categorias='', $marca='';


    //METODOS DEL CRUD
    //recuperar todos los products
    public static function get():array{
        $consulta="SELECT * FROM products";   //preparar la consulta
        return DB::selectAll($consulta,'Product');
    }
    
    //recuperar una products en concreto por id
    public static function getProduct(int $id):?Product{
        $consulta="SELECT * FROM products WHERE id=$id";   //preparar la consulta
        return DB::select($consulta,'Product');        //ejecutar y retornar el resultado
    }


    //crea una tabla en DB
    public static function new_table(){
        $consulta= "CREATE TABLE IF NOT EXISTS products(
                            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            nombre VARCHAR(255) NOT NULL,
                            referencia VARCHAR(255) NOT NULL,
                            ean13 VARCHAR(255) NOT NULL,
                            precio_de_coste FLOAT4 NULL,
                            precio_de_venta FLOAT4 NULL,
                            iva FLOAT4 NULL,
                            cantidad INT(11),
                            categorias VARCHAR(255) NULL,
                            marca VARCHAR(255) NULL    
                        )";

        return DB::insert($consulta);
    }
    
    //Guardar
    public function save(){
        $consulta = "INSERT INTO products(nombre,referencia,ean13,precio_de_coste,precio_de_venta,iva,cantidad,categorias,marca)
                        VALUES('$this->nombre','$this->referencia','$this->ean13','$this->precio_de_coste', '$this->precio_de_venta','$this->iva','$this->cantidad',
                        '$this->categorias','$this->marca')";
        return DB::insert($consulta);
    }

    public static function empty_table(){
        $consulta = "DELETE FROM products
	                    WHERE id>0;";

        return DB::delete($consulta);
    }
    
    //Actualizar un products
    public function update(){
        $consulta="UPDATE products SET
                        nombre='$this->nombre',
                        referencia='$this->referencia',
                        ean13='$this->ean13',
                        precio_de_coste='$this->precio_de_coste',
                        precio_de_venta='$this->precio_de_venta',
                        iva='$this->iva',
                        cantidad= $this->cantidad,
                        categorias= $this->categorias,
                        marca= $this->marca,                       
                    WHERE id=$this->id";
        return DB::update($consulta);
    }
    
    //__toString()
    public function __toString():string{
        return "$this->id $this->nombre $this->referencia $this->ean13 $this->precio_de_coste $this->precio_de_venta $this->iva";
    }
}