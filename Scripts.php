<?php

/**
 * @author gencyolcu
 * @copyright 2018
 */

class Script {
    public $database;
    public $nombre_tabla;
    public $sql;
    public $descripcion_inicial = "-- Modifica los valores por defecto..!";
    
    function getDatabase() {
        return $this->database;
    }
    
    function getSql() {
        return $this->sql;
    }
    
    function getNombreTabla()
    {
        return $this->nombre_tabla;
    }
    
    function setDatabase($database) {
        $this->database = $database;
    }
    
    function setSql($sql) {
        $this->sql = $sql;
    }
    
    function setNombreTabla($nombre_tabla) {
        $this->nombre_tabla = $nombre_tabla;
    }
    
    function newTableDDL()
    {
        $this->setSql(
$this->descripcion_inicial."

USE ".$this->getDatabase()."

CREATE TABLE [TABLE_NAME] 
    (
        [PARAMETRO_1] NVARCHAR(40) NOT NULL,
        [PARAMETRO_2] INT NOT NULL,
        [PARAMETRO_3] DATE
    )");
    }
    
    function dropTableDDL()
    {
        $this->setSql(
$this->descripcion_inicial."        

DROP TABLE [TABLE_NAME]        
        ");
    }
    
    function newIndexDDL() {

        $this->setSql(
$this->descripcion_inicial."

USE ".$this->getDatabase()."

CREATE INDEX [INDEX_NAME]
    ON [TABLE_NAME](param1, param2, param...)
    ");
    }
    
    function dropIndexDDL()
    {
        $this->setSql(
$this->descripcion_inicial."
USE ".$this->getDatabase()."

DROP INDEX [TABLE_NAME].[INDEX_NAME]

    ");
    }
    
    function newProcedureDDL() {
        
        $this->setSql(
$this->descripcion_inicial."

CREATE OR REPLACE PROCEDURE [PROCEDURE_NAME] 
AS
    BEGIN 
       --Aqui cualquier instruccion SQL
       
    END
        ");        
    }
    
    function dropProcedureDDL() {
        $this->setSql(
$this->descripcion_inicial."        

USE ".$this->getDatabase()."

DROP PROCEDURE [PROCEDURE_NAME]        
        ");
    }
    
    function newViewDDL() {
        $this->setSql(
$this->descripcion_inicial."
        
CREATE OR REPLACE VIEW [VIEW_NAME] (PARAM1, PARAM2, PARAM...) 
AS 
    SELECT
    
        FROM
        
            WHERE
        ");
        
    }
    
    function dropViewDDL() {
        $this->setSql(
$this->descripcion_inicial."        

USE ".$this->getDatabase()."

DROP VIEW [VIEW_NAME]
        ");
    }
    
    function newTriggerDDL() {
        $this->setSql(
$this->descripcion_inicial."
--Los nombres son Case Sensitive
        
CREATE TRIGGER [TRIGGER_NAME]
ON [OWNER]
FOR INSERT,UPDATE,DELETE AS                
        ");
        
    }
    
    function dropTriggerDDL() {
        $this->setSql(
$this->descripcion_inicial."
--Los nombres son Case Sensitive

USE ".$this->getDatabase()."

DROP TRIGGER [TRIGGER_NAME]
        ");
    }
    
    function newFunctionDDL() {
        $this->setSql(
$this->descripcion_inicial."

CREATE FUNCTION [FUNCTION_NAME] ( )
RETURNS
AS
    BEGIN

    END
        ");
    }
    
    function dropFunctionDDL() {
        $this->setSql(
$this->descripcion_inicial."        

USE ".$this->getDatabase()."

DROP FUNCTION [FUNCTION_NAME]
        ");
    }
}

?>