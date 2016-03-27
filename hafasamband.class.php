<?php

/*
* Virkni (validate) á hafa samband síðunni 
*/
class ValidationError
{
	public $field;
	public $error;
}

class Spurning
{
	public $nafn;
	public $netfang;
	public $simi;
	public $fyrirspurn;
	public $fail;

	private $errors;

	function __construct()
	{
		$this->errors = array();
	}

	public function gilding($data)
	{
		$this->nafn 		= htmlspecialchars($this->get($data, 'Nafn'), ENT_QUOTES);
		$this->netfang 		= htmlspecialchars($this->get($data, 'Netfang'), ENT_QUOTES);
		$this->simi 		= htmlspecialchars($this->get($data, 'Simi'), ENT_QUOTES);
		$this->fyrirspurn 	= htmlspecialchars($this->get($data, 'Fyrirspurn'), ENT_QUOTES);
	}

	public function emaila()
	{
		$nafnn = htmlspecialchars_decode($this->nafn, ENT_QUOTES);
		$netfangg = htmlspecialchars_decode($this->netfang, ENT_QUOTES);
	  	$simii = htmlspecialchars_decode($this->simi, ENT_QUOTES);
		$fyrirspurnn = htmlspecialchars_decode($this->fyrirspurn, ENT_QUOTES);
		$timi = date("Y-m-d H:i:s");
 
		$email_content = "Nafn: ". $nafnn."\n";  
		$email_content .= "Netfang: ". $netfangg."\n";
		$email_content .= "Simi: ".$simii."\n";
		$email_content .= "Fyrirspurn: "."\n".$fyrirspurnn."\n\n";
		$email_content .= "Sent: ". $timi."\n";

		mail("sjukrathjalfunarstodin@gmail.com", "Fyrirspurn af heimasíðu frá ". $nafnn, $email_content);
	}

	public function valid()
	{
		if ($this->nafn === ''){
			$this->errors[] = MakeError('nafn', 'Fylla verður út í reitinn Nafn');
		}

		if (strlen($this->nafn) > 200){
			$this->errors[] = MakeError('nafn', 'Nafn má ekki vera lengri en 200 stafir');
		}

		if ($this->netfang === ''){
			$this->errors[] = MakeError('netfang', 'Fylla verður út í reitinn Netfang');
		}

		if (strlen($this->netfang) > 400){
			$this->errors[] = MakeError('netfang', 'Netfang má ekki vera langra en 400 stafir');
		}
		if (!filter_var($this->netfang, FILTER_VALIDATE_EMAIL)){
			$this->errors[] = MakeError('netfang', 'Netfang verður að vera gilt');
		}

		if ($this->simi === ''){
			$this->errors[] = MakeError('simi', 'Tilgreina verður símanúmer');
		}

		if (strlen($this->simi) > 30){
			$this->errors[] = MakeError('simi', 'Símanúmer má ekki vera lengra en 30 stafir');
		}
		if (strlen($this->simi) < 7){
			$this->errors[] = MakeError('simi', 'Símanúmer verður að vera minnst 7 stafir');
		}

		if ($this->fyrirspurn === ''){
			$this->errors[] = MakeError('fyrirspurn', 'Tilgreina verður fyrirspurn');
		}

		if (strlen($this->fyrirspurn) > 1000){
			$this->errors[] = MakeError('fyrirspurn', 'Fyrirspurn má ekki vera lengri en 1000 stafir. Ef 1000 stafir er ekki nóg, vinstamlegast hafðu samband í gegnum síma.');
		}

		return sizeof($this->errors) == 0;
	}

	public function insert()
	{
		return array(	':nafn' 		=> $this->nafn,
						':netfang' 		=> $this->netfang,
						':simi'			=> $this->simi,
						':fyrirspurn'	=> $this->fyrirspurn,
			);
	}

	public function errors()
	{
		return $this->errors;
	}

	private function get($array, $key)
	{
		if (isset($array[$key]))
		{
			return $array[$key];
		}

		return '';
	}
}

function MakeError($field, $error)
{
	$o = new ValidationError();
	$o->field = $field;
	$o->error = $error;

	return $o;
}