<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ResolucioInicidencies
{
    public $db;
    
    public function __construct($db)
    {
        $this->db = $db;
    }
    
    /*VASA funció per afegir el preu a les linies de serveis o productes*/
    public function actualitzarLiniaFacturaEnIncidencia($facturaId){
        //var_dump($idFactura); die();
        /*$sql = 'UPDATE llx_facturedet SET FACDET.qty = FACT.rowid FROM llx_facturedet FACTDET';
        $sql.'LEFT JOIN llx_facture FACT ON FACTDET.fk_facture = FACT.rowid';
        $sql.'WHERE FACDET.fk_facture = '.$facturaId.';';
        $resql = $this->db->query($sql);
        var_dump("funcio OK ".$sql);*/
        //die();
        return $facturaId;
    }
}

?>