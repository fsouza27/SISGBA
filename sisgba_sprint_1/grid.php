<!DOCTYPE html>
<html>
    <meta charset="utf-8">
<head>
<link rel="stylesheet" href="styles/jqx.base.css" type="text/css" />
<link rel="stylesheet" href="styles/jqx.classic.css" type="text/css" />
<script type="text/javascript" src="jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="jqxcore.js"></script>
<script type="text/javascript" src="jqxbuttons.js"></script>
<script type="text/javascript" src="jqxscrollbar.js"></script>
<script type="text/javascript" src="jqxmenu.js"></script>
<script type="text/javascript" src="jqxdata.js"></script>
<script type="text/javascript" src="jqxgrid.js"></script>
</head>

    <body>

    <div id="jqxgrid">
            <?php
            $(document).ready(function() {
            // prepare the data
            var source ={
                datatype: "json",
                datafields: [{ name: 'nome' },{ name: 'ra' },{ name: 'email' },{ name: 'curso' },],
                url: 'GridConsultaAluno.php'
                };
            $("#jqxgrid").jqxGrid({
                source: source,
                theme: 'classic',
                columns: [{ text: 'Nome', datafield: 'nome', width: 250 },{ text: 'RA', datafield: 'ra', width: 150 },{ text: 'Email', datafield: 'email', width: 180 },{ text: 'Curso', datafield: 'curso', width: 200 }]
                });
            });
        ?>
      </div>

    </body>











    </html>
