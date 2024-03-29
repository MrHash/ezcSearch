<?php
/**
 * File containing the ezcBasePersistable interface
 *
 * @package Base
 * @version //autogen//
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * This class provides the interface that classes need to implement to be able
 * to be used by the PersistentObject and Search components.
 *
 * @package Base
 * @version //autogen//
 */
interface ezcBasePersistable
{
    /**
     * The constructor for the object needs to be able to accept no arguments.
     *
     * The data is later set through the setState() method.
     * 
     * Removed from interface to support Doctrine proxies. Ensure that your entities
     * do not require constructor arguments otherwise generation of entities from index
     * will fail!!
     */
	 //public function __construct();

	 /**
	  * Public id accessor for building document index from results
	  * 
	  * @return mixed
	  */
    public function getId();
	
    /**
     * Returns all the object's properties so that they can be stored or indexed.
     *
     * @return array(string=>mixed)
     */
    public function getState();

    /**
     * Accepts an array containing data for one or more of the class' properties.
     *
     * @param array $properties
     */
    public function setState( array $properties );
}
?>
