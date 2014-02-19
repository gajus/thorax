<?php
namespace Gajus\Dora\Dress;

/**
 * @link https://github.com/gajus/dora for the canonical source repository
 * @license https://github.com/gajus/dora/blob/master/LICENSE BSD 3-Clause
 */
abstract class Manikin {
	private
		$input,
		$form;
	
	final public function __construct (\Gajus\Dora\Input $input, \Gajus\Dora\Form $form) {
		$this->input = $input;
		$this->form = $form;
	}
	
	public function getInput () {
		return $this->input;
	}

	public function getForm () {
		return $this->form;
	}

	abstract public function toString ();
	
	public function __toString () {
		return $this->toString();
	}
}