<?php 

// @author Caique M. Oliveira
// @data 27/05/2018
// @description Fuel Class
class SupplyRegister
{

	// Attributes
	public $idControleAbastecimento;
	public $idTipoCombustivel;
	public $idVeiculoCliente;
	public $quilometroRodado;
	public $valorAbastecimento;
	public $latitude;
	public $longitude;
	public $logControleAbastecimento;

	// Default constructor 
	function __construct
	(
		$idControleAbastecimento,
		$idTipoCombustivel,
		$idVeiculoCliente,
		$quilometroRodado,
		$valorAbastecimento,
		$latitude,
		$longitude,
		$logControleAbastecimento
	)
	{
		$this->idControleAbastecimento = $idControleAbastecimento;
		$this->idTipoCombustivel = $idTipoCombustivel;
		$this->idVeiculoCliente = $idVeiculoCliente;
		$this->quilometroRodado = $quilometroRodado;
		$this->valorAbastecimento = $valorAbastecimento;
		$this->latitude = $latitude;
		$this->longitude = $longitude;
		$this->logControleAbastecimento = $logControleAbastecimento;
	}

	/**
	* Insert a new supply register into database
	* @param SupplyRegisterObj Object that will be inserted into database
	* @return true Data inserted with succeed
	* @return false Fail in to attemp to insert the data into database
	*/
	function setSupplyRegister($supplyRegisterObj)
	{
		$supplyRegisterDAO = new SupplyRegisterDAO();

		return $supplyRegisterDAO->setSupplyRegister($supplyRegisterObj);
	}



}


?>