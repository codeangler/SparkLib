<?php

namespace SparkLib\UPS\Rate;

class FRSPaymentInfoType
{

  /**
   * 
   * @var CodeDescriptionType $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var string $AccountNumber
   * @access public
   */
  public $AccountNumber = null;

  /**
   * 
   * @var PayerAddressType $Address
   * @access public
   */
  public $Address = null;

  /**
   * 
   * @param CodeDescriptionType $Type
   * @param string $AccountNumber
   * @param PayerAddressType $Address
   * @access public
   */
  public function __construct($Type = null, $AccountNumber = null, $Address = null)
  {
    $this->Type = $Type;
    $this->AccountNumber = $AccountNumber;
    $this->Address = $Address;
  }

  /**
   * 
   * @return CodeDescriptionType
   */
  public function getType()
  {
    return $this->Type;
  }

  /**
   * 
   * @param CodeDescriptionType $Type
   */
  public function setType($Type)
  {
    $this->Type = $Type;
  }

  /**
   * 
   * @return string
   */
  public function getAccountNumber()
  {
    return $this->AccountNumber;
  }

  /**
   * 
   * @param string $AccountNumber
   */
  public function setAccountNumber($AccountNumber)
  {
    $this->AccountNumber = $AccountNumber;
  }

  /**
   * 
   * @return PayerAddressType
   */
  public function getAddress()
  {
    return $this->Address;
  }

  /**
   * 
   * @param PayerAddressType $Address
   */
  public function setAddress($Address)
  {
    $this->Address = $Address;
  }

}
