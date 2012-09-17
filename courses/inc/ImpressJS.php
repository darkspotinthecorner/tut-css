<?php

class ImpressJS {

	protected $position = array(0, 0, 0);
	protected $rotation = array(0, 0, 0);
	protected $scale    = 1;

	public function __construct($params = array())
	{
		if (is_array($params))
		{
			if (isset($params['position_x'])) $this->position[0] = intval($params['position_x']);
			if (isset($params['position_y'])) $this->position[1] = intval($params['position_y']);
			if (isset($params['position_z'])) $this->position[2] = intval($params['position_z']);
			if (isset($params['rotation_x'])) $this->rotation[0] = intval($params['rotation_x']);
			if (isset($params['rotation_y'])) $this->rotation[1] = intval($params['rotation_y']);
			if (isset($params['rotation_z'])) $this->rotation[2] = intval($params['rotation_z']);
			if (isset($params['scale']))      $this->scale       = intval($params['scale']);
		}

		return $this;
	}

	public function resetPosition()      { $this->position = array(0, 0, 0);                                 return $this; }
	public function resetRotation()      { $this->rotation = array(0, 0, 0);                                 return $this; }

	public function setPosX($value = 0)  { $this->position[0] = intval($value);                              return $this; }
	public function setPosY($value = 0)  { $this->position[1] = intval($value);                              return $this; }
	public function setPosZ($value = 0)  { $this->position[2] = intval($value);                              return $this; }

	public function setRotX($value = 0)  { $this->rotation[0] = intval($value);                              return $this; }
	public function setRotY($value = 0)  { $this->rotation[1] = intval($value);                              return $this; }
	public function setRotZ($value = 0)  { $this->rotation[2] = intval($value);                              return $this; }

	public function setScale($value = 1) { $this->scale = intval($value);                                    return $this; }

	public function shiftX($value = 0)   { $this->applyVectorToPosition(array(intval($value), 0, 0), false); return $this; }
	public function shiftY($value = 0)   { $this->applyVectorToPosition(array(0, intval($value), 0), false); return $this; }
	public function shiftZ($value = 0)   { $this->applyVectorToPosition(array(0, 0, intval($value)), false); return $this; }

	public function rotateX($value = 0)  { $this->rotation[0] = $this->rotation[0] + intval($value);         return $this; }
	public function rotateY($value = 0)  { $this->rotation[1] = $this->rotation[1] + intval($value);         return $this; }
	public function rotateZ($value = 0)  { $this->rotation[2] = $this->rotation[2] + intval($value);         return $this; }

	public function scale($value = 1)    { $this->scale = $this->scale * intval($value);                     return $this; }

	public function moveLeft($value)     { $this->applyVectorToPosition(array(-intval($value), 0, 0));       return $this; }
	public function moveRight($value)    { $this->applyVectorToPosition(array( intval($value), 0, 0));       return $this; }
	public function moveUp($value)       { $this->applyVectorToPosition(array(0, -intval($value), 0));       return $this; }
	public function moveDown($value)     { $this->applyVectorToPosition(array(0,  intval($value), 0));       return $this; }
	public function moveForward($value)  { $this->applyVectorToPosition(array(0, 0,  intval($value)));       return $this; }
	public function moveBackward($value) { $this->applyVectorToPosition(array(0, 0, -intval($value)));       return $this; }

	public function __toString()
	{
		$attributes = array();

		$attributes[] = 'data-x="'        . $this->position[0] . '"';
		$attributes[] = 'data-y="'        . $this->position[1] . '"';
		$attributes[] = 'data-z="'        . $this->position[2] . '"';
		$attributes[] = 'data-rotate-x="' . $this->rotation[0] . '"';
		$attributes[] = 'data-rotate-y="' . $this->rotation[1] . '"';
		$attributes[] = 'data-rotate-z="' . $this->rotation[2] . '"';
		$attributes[] = 'data-scale="'    . $this->scale       . '"';

		$html = implode(' ', $attributes);

		return $html;
	}

	protected function getRotationMatrixFromAngles($x, $y, $z)
	{
		/* order of applied rotations needs to be tested... */
		return array(
			array(
				(cos($y) * cos($z)),
				(-cos($y) * sin($z)),
				(sin($y)),
			),
			array(
				((cos($x) * sin($z)) + (sin($x) * sin($y) * cos($z))),
				((cos($x) * cos($z)) - (sin($x) * sin($y) * sin($z))),
				(-sin($x) * cos($y)),
			),
			array(
				((sin($x) * sin($z)) - (cos($x) * sin($y) * cos($z))),
				((sin($x) * cos($z)) + (cos($x) * sin($y) * sin($z))),
				(cos($x) * cos($y)),
			),
		);
	}

	protected function getRotationMatrixFromAnglesNew($x, $y, $z)
	{
		$matrix = array(array(1, 0, 0), array(0, 1, 0), array(0, 0, 1));
		$store  = array(array(0, 0, 0), array(0, 0, 0), array(0, 0, 0));

		$rot_x = ($x * M_PI) / 180;
		$rot_y = ($y * M_PI) / 180;
		$rot_z = ($z * M_PI) / 180;

		$rotator = array(
			array(array(1, 0, 0), array(0, cos($rot_x), sin($rot_x)), array(0, -sin($rot_x), cos($rot_x))),
			array(array(cos($rot_y), 0, -sin($rot_y)), array(0, 1, 0), array(sin($rot_y), 0, cos($rot_y))),
			array(array(cos($rot_z), sin($rot_z), 0), array(-sin($rot_z), cos($rot_z), 0), array(0, 0, 1)),
		);

		foreach($rotator as $rotid => $rotation)
		{
			for($i = 0; $i < 3; $i++)
			{
				for($j = 0; $j < 3; $j++)
				{
					$store[$i][$j] = 0;

					for($n = 0; $n < 3; $n++)
					{
						$store[$i][$j] += $matrix[$i][$n] * $rotation[$n][$j];
					}
				}
			}

			for($i = 0; $i < 3; $i++)
			{
				for($j = 0; $j < 3; $j++)
				{
					$matrix[$i][$j] = $store[$i][$j];
				}
			}
		}

		return $matrix;
	}

	protected function applyRotationMatrixToVector($vector, $matrix)
	{
		return array(
			(($matrix[0][0] * $vector[0]) + ($matrix[0][1] * $vector[1]) + ($matrix[0][2] * $vector[2])),
			(($matrix[1][0] * $vector[0]) + ($matrix[1][1] * $vector[1]) + ($matrix[1][2] * $vector[2])),
			(($matrix[2][0] * $vector[0]) + ($matrix[2][1] * $vector[1]) + ($matrix[2][2] * $vector[2])),
		);
	}

	protected function applyVectorToPosition($vector, $relative = true)
	{
		if($relative === true)
		{
			$vector = $this->applyRotationMatrixToVector($vector, $this->getRotationMatrixFromAnglesNew($this->rotation[0], $this->rotation[1], $this->rotation[2]));
		}

		$position_new = array(
			($this->position[0] = $this->position[0] + $vector[0]),
			($this->position[1] = $this->position[1] + $vector[1]),
			($this->position[2] = $this->position[2] + $vector[2]),
		);

		$this->position = $position_new;
	}
}















?>