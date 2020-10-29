<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Servicios Web</title>
       
        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
        
        <!-- jQuery -->

        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

        <link rel="stylesheet" href="mostrar.css"/>

</head>
<body background="fondo.jpg">
    <?php 
    $ur = $_GET['urlAPI'];
    $mod = $_GET['mod']
   ?>
    <header><h1>Listado de API</h1> </header>
    
    <nav class="container">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Codigo</th>
                </tr>
            </thead>
        </table>
    </nav>

    <nav class="salida"><a href="index.html" >Pagina Principal</a>
    </nav>
   
    <script>
         $(document).ready(function() {
            $('#example').DataTable( {
                "ajax": {
                    "url": "<?php echo $ur ?>",
                    "dataSrc": "<?php echo $mod ?>"
                    },
                "columns": [
						{ mData: 'nome' } ,
                        { mData: 'codigo' }
                ],
                "pageLength": 5
            } );
        } );
    </script>
   
</body>
</html>
