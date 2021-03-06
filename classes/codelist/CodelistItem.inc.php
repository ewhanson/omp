<?php

/**
 * @defgroup codelist ONIX code lists
 */

/**
 * @file classes/codelist/CodelistItem.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CodelistItem
 * @ingroup codelist
 * @see CodelistItemDAO
 *
 * @brief Basic class describing a codelist item.
 *
 */

class CodelistItem extends DataObject {

	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}


	//
	// Get/set methods
	//
	/**
	 * Get the text component of the codelist.
	 * @return string
	 */
	function getText() {
		return $this->getData('text');
	}

	/**
	 * Set the text component of the codelist.
	 * @param $text string
	 */
	function setText($text) {
		return $this->setData('text', $text);
	}

	/**
	 * Get codelist code.
	 * @return string
	 */
	function getCode() {
		return $this->getData('code');
	}

	/**
	 * Set codelist code.
	 * @param $code string
	 */
	function setCode($code) {
		return $this->setData('code', $code);
	}

	/**
	 * @return String the numerical value representing this item in the ONIX 3.0 schema
	 */
	function getOnixSubjectSchemeIdentifier() {
		assert(false); // provided by subclasses
	}
}


