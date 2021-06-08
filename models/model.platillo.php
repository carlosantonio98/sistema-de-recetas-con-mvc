<?php
require_once("model.base.php");

class Platillo extends Model {
    public function __construct($db) {
        parent::__construct($db);
    }

    public function insertItemCategoriasDropdown($categorias, $idCategoria) {
        while($row = $categorias->next()){
            $comparation = ($row->IdCategoria == $idCategoria) ? 'selected':'';
            echo "<option $comparation value=$row->IdCategoria>$row->Categoria</option>";
        }
    }
}

$platillo = new Platillo($db);
$platillo->setView ("vw_Platillos");
$platillo->setTable("fin_Platillos");

$platillo->setKey  ("IdPlatillo");
$platillo->addField("Platillo");
$platillo->addField("Ingrediente");
$platillo->addField("Preparacion");
$platillo->addField("ImagenPlatillo");
$platillo->addField("FechaRegistro");
$platillo->addField("HoraRegistro");
$platillo->addField("NumeroVisita");
$platillo->addField("NumeroDescarga");
$platillo->addField("FkCategoria");
$platillo->addField("FkSeguimiento");
$platillo->addField("FkUsuario");
$platillo->newRecord();
?>