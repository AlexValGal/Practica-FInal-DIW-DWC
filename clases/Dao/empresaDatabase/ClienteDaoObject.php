<?php

/* This file is generated by the open source Parm Generator. https://github.com/cassell/Parm */

namespace dao\empresaDatabase;

use \Parm\Config;

class ClienteDaoObject extends \Parm\DataAccessObject implements ClienteTable
{
    use ClienteTableFunctions;

    /**
     * Get the ID (Primary Key) of the object
     * @return integer|null ID of the record in the database. null if a new record
     */
    public function getId()
    {
        return $this->getIntFieldValue($this->getIdField());
    }

    /**
    * Set the ID (Primary Key) of the object
    * @param int $id
    */
    public function setNewObjectId($id)
    {
        $this->setIntFieldValue($this->getIdField(),$id);
        $this->setupAsNewObject();
    }

    /**
    * @return bool
    */
    public function isAutoIncremented()
    {
        return true;
    }



    /**
    * Set  field cliente.id in logical database "empresa"
    * @param int|null $val
    */
    public function setId($val)
    {
        $this->setNewObjectId($val);
    }
    /**
    * Set  field cliente.nombres in logical database "empresa"
    * @param string|null $val
    */
    public function setNombres($val)
    {
        $this->setFieldValue(self::NOMBRES_COLUMN,$val);
    }

    /**
    * Get  field cliente.nombres from logical database "empresa"
    * @return string|null
    */
    public function getNombres()
    {
        return $this->getFieldValue(self::NOMBRES_COLUMN);
    }

    /**
    * Set  field cliente.ciudad in logical database "empresa"
    * @param string|null $val
    */
    public function setCiudad($val)
    {
        $this->setFieldValue(self::CIUDAD_COLUMN,$val);
    }

    /**
    * Get  field cliente.ciudad from logical database "empresa"
    * @return string|null
    */
    public function getCiudad()
    {
        return $this->getFieldValue(self::CIUDAD_COLUMN);
    }

    /**
    * Set  field cliente.sexo in logical database "empresa"
    * @param string|null $val
    */
    public function setSexo($val)
    {
        $this->setFieldValue(self::SEXO_COLUMN,$val);
    }

    /**
    * Get  field cliente.sexo from logical database "empresa"
    * @return string|null
    */
    public function getSexo()
    {
        return $this->getFieldValue(self::SEXO_COLUMN);
    }

    /**
    * Set  field cliente.telefono in logical database "empresa"
    * @param string|null $val
    */
    public function setTelefono($val)
    {
        $this->setFieldValue(self::TELEFONO_COLUMN,$val);
    }

    /**
    * Get  field cliente.telefono from logical database "empresa"
    * @return string|null
    */
    public function getTelefono()
    {
        return $this->getFieldValue(self::TELEFONO_COLUMN);
    }

    /**
    * Set  field cliente.fecha_nacimiento in logical database "empresa"
    * @param string|\DateTime|int|timestamp $val
    */
    public function setFechaNacimiento($val)
    {
        $this->setDatetimeFieldValue(self::FECHA_NACIMIENTO_COLUMN,$val);
    }

    /**
    * Get  field cliente.fecha_nacimiento from logical database "empresa"
    * @param string $format optional Defaults to MySQL formatted Datetime YYYY-MM-DD HH:MM:SS
    * @return string
    */
    public function getFechaNacimiento($format = null)
    {
        return $this->getDatetimeFieldValue(self::FECHA_NACIMIENTO_COLUMN,$format);
    }

    /**
    * Get  field cliente.fecha_nacimiento from logical database "empresa" as a DateTime object
    * @return \DateTime
    */
    public function getFechaNacimientoDateTimeObject()
    {
        return $this->getDatetimeObjectFromField(self::FECHA_NACIMIENTO_COLUMN,Config::getDatetimeStorageFormat());
    }


}
