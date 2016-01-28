<?php

/* This file is generated by the Parm Generator. https://github.com/cassell/Parm */

namespace dao\empresaDatabase;

class ClienteDaoFactory extends \Parm\DataAccessObjectFactory  implements ClienteTable
{
    use ClienteTableFunctions;

    /**
     * Load an object associated with this factory
     * @return ClienteDaoObject An object built from a row out of the database table
     */
    public function loadDataObject(Array $row)
    {
        return new ClienteDaoObject($row);
    }

	final function addIdTrueBinding() { $this->addBinding(new \Parm\Binding\TrueBooleanBinding('cliente.id')); }
	final function addIdFalseBinding() { $this->addBinding(new \Parm\Binding\FalseBooleanBinding('cliente.id')); }
	final function addIdNotTrueBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.id',1)); }
	final function addIdNotFalseBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.id',0));  }


	final function addNombresTrueBinding() { $this->addBinding(new \Parm\Binding\TrueBooleanBinding('cliente.nombres')); }
	final function addNombresFalseBinding() { $this->addBinding(new \Parm\Binding\FalseBooleanBinding('cliente.nombres')); }
	final function addNombresNotTrueBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.nombres',1)); }
	final function addNombresNotFalseBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.nombres',0));  }


	final function addCiudadTrueBinding() { $this->addBinding(new \Parm\Binding\TrueBooleanBinding('cliente.ciudad')); }
	final function addCiudadFalseBinding() { $this->addBinding(new \Parm\Binding\FalseBooleanBinding('cliente.ciudad')); }
	final function addCiudadNotTrueBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.ciudad',1)); }
	final function addCiudadNotFalseBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.ciudad',0));  }


	final function addSexoTrueBinding() { $this->addBinding(new \Parm\Binding\TrueBooleanBinding('cliente.sexo')); }
	final function addSexoFalseBinding() { $this->addBinding(new \Parm\Binding\FalseBooleanBinding('cliente.sexo')); }
	final function addSexoNotTrueBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.sexo',1)); }
	final function addSexoNotFalseBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.sexo',0));  }


	final function addTelefonoTrueBinding() { $this->addBinding(new \Parm\Binding\TrueBooleanBinding('cliente.telefono')); }
	final function addTelefonoFalseBinding() { $this->addBinding(new \Parm\Binding\FalseBooleanBinding('cliente.telefono')); }
	final function addTelefonoNotTrueBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.telefono',1)); }
	final function addTelefonoNotFalseBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.telefono',0));  }


	final function addFechaNacimientoTrueBinding() { $this->addBinding(new \Parm\Binding\TrueBooleanBinding('cliente.fecha_nacimiento')); }
	final function addFechaNacimientoFalseBinding() { $this->addBinding(new \Parm\Binding\FalseBooleanBinding('cliente.fecha_nacimiento')); }
	final function addFechaNacimientoNotTrueBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.fecha_nacimiento',1)); }
	final function addFechaNacimientoNotFalseBinding() { $this->addBinding(new \Parm\Binding\NotEqualsBinding('cliente.fecha_nacimiento',0));  }


}
