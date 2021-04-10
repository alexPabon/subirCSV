<?php
/*
 *Controlador para subir un fichero CSV a la DB
 *
 * @athor Alex Pabon
 *
 */

class ProductController{


    
        //operacion por defecto
    public function index(){

        if(empty($_FILES['ficherocsv']["tmp_name"]))
            throw new Exception("No hay fichero");

        $csv = array_map('str_getcsv', file($_FILES['ficherocsv']["tmp_name"]));
        $newcsv = [];

        for ($i=1; $i < count($csv); $i++){
            $rowcsv = [];
            for ($j=0; $j<count($csv[$i]); $j++){
                $key = strtolower(str_replace(' ','_',$csv[0][$j]));
                $rowcsv[$key] = $csv[$i][$j];
            }
            $objRowCSV = (object)$rowcsv;
            $newcsv[]= $objRowCSV;

            if(!isset($objRowCSV->nombre) || !isset($objRowCSV->iva))
                throw new Exception("Parece que hay un error con el fichero,<br>Compruebe que el fichero sea <b>products.csv</b>");

            if($i==1)
                Product::empty_table();

            if(!$this->storeCSV($objRowCSV))
                throw new Exception("Ocurrio un problema al guardar el producto");

        }



      //echo json_encode($newcsv);


        header("refresh:0, url=/");
    }

    protected function storeCSV(stdClass $product){

        $saveProduct = new Product();
        $saveProduct->nombre = DB::escape($product->nombre);
        $saveProduct->referencia = DB::escape($product->referencia);
        $saveProduct->ean13 = DB::escape($product->ean13);
        $saveProduct->precio_de_coste = floatval($product->precio_de_coste);
        $saveProduct->precio_de_venta = floatval($product->precio_de_venta);
        $saveProduct->iva = floatval($product->iva);
        $saveProduct->cantidad = intval($product->cantidad);
        $saveProduct->categorias = DB::escape($product->categorias);
        $saveProduct->marca = DB::escape($product->marca);

        return ($saveProduct->save() > 0)?true:false;
    }

}
