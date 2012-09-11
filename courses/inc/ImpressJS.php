<?php

class ImpressJS {

	protected $position_x = 0;
	protected $position_y = 0;
	protected $position_z = 0;
	protected $rotation_x = 0;
	protected $rotation_y = 0;
	protected $rotation_z = 0;
	protected $scale      = 1;

	public function __construct($params = array())
	{
		if (is_array($params))
		{
			if (isset($params['position_x'])) $this->position_x = intval($params['position_x']);
			if (isset($params['position_y'])) $this->position_y = intval($params['position_y']);
			if (isset($params['position_z'])) $this->position_z = intval($params['position_z']);
			if (isset($params['rotation_x'])) $this->rotation_x = intval($params['rotation_x']);
			if (isset($params['rotation_y'])) $this->rotation_y = intval($params['rotation_y']);
			if (isset($params['rotation_z'])) $this->rotation_z = intval($params['rotation_z']);
			if (isset($params['scale']))      $this->scale      = intval($params['scale']);
		}

		return $this;
	}

	public function resetRotation()
	{
		$this->rotation_x = 0;
		$this->rotation_y = 0;
		$this->rotation_z = 0;

		return $this;
	}

	public function setPosX($value = 0)  { $this->position_x = intval($value);                     return $this; }
	public function setPosY($value = 0)  { $this->position_y = intval($value);                     return $this; }
	public function setPosZ($value = 0)  { $this->position_z = intval($value);                     return $this; }

	public function setRotX($value = 0)  { $this->rotation_x = intval($value);                     return $this; }
	public function setRotY($value = 0)  { $this->rotation_y = intval($value);                     return $this; }
	public function setRotZ($value = 0)  { $this->rotation_z = intval($value);                     return $this; }

	public function setScale($value = 1) { $this->scale      = intval($value);                     return $this; }

	public function shiftX($value = 0)   { $this->position_x = $this->position_x + intval($value); return $this; }
	public function shiftY($value = 0)   { $this->position_y = $this->position_y + intval($value); return $this; }
	public function shiftZ($value = 0)   { $this->position_z = $this->position_z + intval($value); return $this; }

	public function rotateX($value = 0)  { $this->rotation_x = $this->rotation_x + intval($value); return $this; }
	public function rotateY($value = 0)  { $this->rotation_y = $this->rotation_y + intval($value); return $this; }
	public function rotateZ($value = 0)  { $this->rotation_z = $this->rotation_z + intval($value); return $this; }

	public function scale($value = 1)    { $this->scale      = $this->scale * intval($value);      return $this; }

	public function moveUp($value)
	{
		// change coordinates relative to rotation

		return $this;
	}

	public function moveDown($value)
	{
		// change coordinates relative to rotation

		return $this;
	}

	public function moveLeft($value)
	{
		// change coordinates relative to rotation

		return $this;
	}

	public function moveRight($value)
	{
		// change coordinates relative to rotation

		return $this;
	}

	public function moveForward($value)
	{
		// change coordinates relative to rotation

		return $this;
	}

	public function moveBackward($value)
	{
		// change coordinates relative to rotation

		return $this;
	}

	public function __toString()
	{
		$attributes = array();

		$attributes[] = 'data-x="'        . $this->position_x . '"';
		$attributes[] = 'data-y="'        . $this->position_y . '"';
		$attributes[] = 'data-z="'        . $this->position_z . '"';
		$attributes[] = 'data-rotate-x="' . $this->rotation_x . '"';
		$attributes[] = 'data-rotate-y="' . $this->rotation_y . '"';
		$attributes[] = 'data-rotate-z="' . $this->rotation_z . '"';
		$attributes[] = 'data-scale="'    . $this->scale      . '"';

		$html = implode(' ', $attributes);

		return $html;
	}

}

?>