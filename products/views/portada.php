<!DOCTYPE html>
<html>
	<head>
		<title>Portada</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/ampliada.css">
		<link rel="stylesheet" type="text/css" href="/css/templates.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/js/templates.js"></script>
        <script>
            /*
            * Recibimos una variable de PHP y la convertimos a JSON para que
            * pueda ser leida por javascript
            */
            var myProducts = <?php echo json_encode($products); ?> ;
        </script>
        <script type="text/javascript" src="/js/products.js"></script>

	</head>
	<body lang="es">
		<?php
			Template::menu();
		?>
		<div class="contenido">
			<div class="marco">
                <p>
                    Solo se puede guardar un fichero CSV concreto porque la base de datos esta preparada para recibir los datos
                    con un determinado nombre de columnas.<br><br>
                    En este caso es el fichero products.csv
                </p>
                <div class="marco_formulario">
                    <form action="/productController" method="post" enctype="multipart/form-data">
                        <label for="ficherocsv">Elija un fichero CSV:</label>
                        <input type="file" name="ficherocsv" id="ficherocsv">
                        <input type="submit" name="subircsv" value="Subir fichero">
                    </form>
                </div>
                <div>
                    <p>
                        <strong>Nombre del las columnas:</strong><br>
                        Nombre, Referencia, EAN13, Precio de coste, Precio de venta, IVA, Cantidad, Categorias, Marca
                    </p>
                </div>
                <div>
                    <table id="all_the_products">
                        <thead>
                        <th>Nº</th>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Referencia</th>
                        <th>EAN13</th>
                        <th>precio de coste</th>
                        <th>precio de venta</th>
                        <th>IVA</th>
                        <th>Cantidad</th>
                        <th>Categorias</th>
                        <th>Marca</th>
                        </thead>
                        <tbody>
                                <tr><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        </tbody>
                    </table>
                </div>
			</div>
		</div>		
		<?php Template::footer();?>
	</body>
</html>
