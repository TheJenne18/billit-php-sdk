<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Billit.API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Transaction Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_account_transaction_id' => 'int',
        'bank_name' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'bank_account_id' => 'int',
        'iban_counter_party' => 'string',
        'bic_counter_party' => 'string',
        'name_counter_party' => 'string',
        'total_amount' => 'double',
        'transaction_type' => 'string',
        'value_date' => '\DateTime',
        'intruction_note' => 'string',
        'currency' => 'string',
        'description' => 'string',
        'external_provider_id' => 'string',
        'external_provider_tc' => 'string',
        'assigned_entities' => '\Swagger\Client\Model\AssignedEntity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_account_transaction_id' => 'int32',
        'bank_name' => null,
        'iban' => null,
        'bic' => null,
        'bank_account_id' => 'int32',
        'iban_counter_party' => null,
        'bic_counter_party' => null,
        'name_counter_party' => null,
        'total_amount' => 'double',
        'transaction_type' => null,
        'value_date' => 'date-time',
        'intruction_note' => null,
        'currency' => null,
        'description' => null,
        'external_provider_id' => null,
        'external_provider_tc' => null,
        'assigned_entities' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bank_account_transaction_id' => 'BankAccountTransactionID',
        'bank_name' => 'BankName',
        'iban' => 'IBAN',
        'bic' => 'BIC',
        'bank_account_id' => 'BankAccountID',
        'iban_counter_party' => 'IBANCounterParty',
        'bic_counter_party' => 'BICCounterParty',
        'name_counter_party' => 'NameCounterParty',
        'total_amount' => 'TotalAmount',
        'transaction_type' => 'TransactionType',
        'value_date' => 'ValueDate',
        'intruction_note' => 'IntructionNote',
        'currency' => 'Currency',
        'description' => 'Description',
        'external_provider_id' => 'ExternalProviderID',
        'external_provider_tc' => 'ExternalProviderTC',
        'assigned_entities' => 'AssignedEntities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_account_transaction_id' => 'setBankAccountTransactionId',
        'bank_name' => 'setBankName',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'bank_account_id' => 'setBankAccountId',
        'iban_counter_party' => 'setIbanCounterParty',
        'bic_counter_party' => 'setBicCounterParty',
        'name_counter_party' => 'setNameCounterParty',
        'total_amount' => 'setTotalAmount',
        'transaction_type' => 'setTransactionType',
        'value_date' => 'setValueDate',
        'intruction_note' => 'setIntructionNote',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'external_provider_id' => 'setExternalProviderId',
        'external_provider_tc' => 'setExternalProviderTc',
        'assigned_entities' => 'setAssignedEntities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_account_transaction_id' => 'getBankAccountTransactionId',
        'bank_name' => 'getBankName',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'bank_account_id' => 'getBankAccountId',
        'iban_counter_party' => 'getIbanCounterParty',
        'bic_counter_party' => 'getBicCounterParty',
        'name_counter_party' => 'getNameCounterParty',
        'total_amount' => 'getTotalAmount',
        'transaction_type' => 'getTransactionType',
        'value_date' => 'getValueDate',
        'intruction_note' => 'getIntructionNote',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'external_provider_id' => 'getExternalProviderId',
        'external_provider_tc' => 'getExternalProviderTc',
        'assigned_entities' => 'getAssignedEntities'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bank_account_transaction_id'] = isset($data['bank_account_transaction_id']) ? $data['bank_account_transaction_id'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['bank_account_id'] = isset($data['bank_account_id']) ? $data['bank_account_id'] : null;
        $this->container['iban_counter_party'] = isset($data['iban_counter_party']) ? $data['iban_counter_party'] : null;
        $this->container['bic_counter_party'] = isset($data['bic_counter_party']) ? $data['bic_counter_party'] : null;
        $this->container['name_counter_party'] = isset($data['name_counter_party']) ? $data['name_counter_party'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['value_date'] = isset($data['value_date']) ? $data['value_date'] : null;
        $this->container['intruction_note'] = isset($data['intruction_note']) ? $data['intruction_note'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['external_provider_id'] = isset($data['external_provider_id']) ? $data['external_provider_id'] : null;
        $this->container['external_provider_tc'] = isset($data['external_provider_tc']) ? $data['external_provider_tc'] : null;
        $this->container['assigned_entities'] = isset($data['assigned_entities']) ? $data['assigned_entities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets bank_account_transaction_id
     *
     * @return int
     */
    public function getBankAccountTransactionId()
    {
        return $this->container['bank_account_transaction_id'];
    }

    /**
     * Sets bank_account_transaction_id
     *
     * @param int $bank_account_transaction_id bank_account_transaction_id
     *
     * @return $this
     */
    public function setBankAccountTransactionId($bank_account_transaction_id)
    {
        $this->container['bank_account_transaction_id'] = $bank_account_transaction_id;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string $bank_name bank_name
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets bank_account_id
     *
     * @return int
     */
    public function getBankAccountId()
    {
        return $this->container['bank_account_id'];
    }

    /**
     * Sets bank_account_id
     *
     * @param int $bank_account_id bank_account_id
     *
     * @return $this
     */
    public function setBankAccountId($bank_account_id)
    {
        $this->container['bank_account_id'] = $bank_account_id;

        return $this;
    }

    /**
     * Gets iban_counter_party
     *
     * @return string
     */
    public function getIbanCounterParty()
    {
        return $this->container['iban_counter_party'];
    }

    /**
     * Sets iban_counter_party
     *
     * @param string $iban_counter_party iban_counter_party
     *
     * @return $this
     */
    public function setIbanCounterParty($iban_counter_party)
    {
        $this->container['iban_counter_party'] = $iban_counter_party;

        return $this;
    }

    /**
     * Gets bic_counter_party
     *
     * @return string
     */
    public function getBicCounterParty()
    {
        return $this->container['bic_counter_party'];
    }

    /**
     * Sets bic_counter_party
     *
     * @param string $bic_counter_party bic_counter_party
     *
     * @return $this
     */
    public function setBicCounterParty($bic_counter_party)
    {
        $this->container['bic_counter_party'] = $bic_counter_party;

        return $this;
    }

    /**
     * Gets name_counter_party
     *
     * @return string
     */
    public function getNameCounterParty()
    {
        return $this->container['name_counter_party'];
    }

    /**
     * Sets name_counter_party
     *
     * @param string $name_counter_party name_counter_party
     *
     * @return $this
     */
    public function setNameCounterParty($name_counter_party)
    {
        $this->container['name_counter_party'] = $name_counter_party;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type transaction_type
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets value_date
     *
     * @return \DateTime
     */
    public function getValueDate()
    {
        return $this->container['value_date'];
    }

    /**
     * Sets value_date
     *
     * @param \DateTime $value_date value_date
     *
     * @return $this
     */
    public function setValueDate($value_date)
    {
        $this->container['value_date'] = $value_date;

        return $this;
    }

    /**
     * Gets intruction_note
     *
     * @return string
     */
    public function getIntructionNote()
    {
        return $this->container['intruction_note'];
    }

    /**
     * Sets intruction_note
     *
     * @param string $intruction_note intruction_note
     *
     * @return $this
     */
    public function setIntructionNote($intruction_note)
    {
        $this->container['intruction_note'] = $intruction_note;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external_provider_id
     *
     * @return string
     */
    public function getExternalProviderId()
    {
        return $this->container['external_provider_id'];
    }

    /**
     * Sets external_provider_id
     *
     * @param string $external_provider_id external_provider_id
     *
     * @return $this
     */
    public function setExternalProviderId($external_provider_id)
    {
        $this->container['external_provider_id'] = $external_provider_id;

        return $this;
    }

    /**
     * Gets external_provider_tc
     *
     * @return string
     */
    public function getExternalProviderTc()
    {
        return $this->container['external_provider_tc'];
    }

    /**
     * Sets external_provider_tc
     *
     * @param string $external_provider_tc external_provider_tc
     *
     * @return $this
     */
    public function setExternalProviderTc($external_provider_tc)
    {
        $this->container['external_provider_tc'] = $external_provider_tc;

        return $this;
    }

    /**
     * Gets assigned_entities
     *
     * @return \Swagger\Client\Model\AssignedEntity[]
     */
    public function getAssignedEntities()
    {
        return $this->container['assigned_entities'];
    }

    /**
     * Sets assigned_entities
     *
     * @param \Swagger\Client\Model\AssignedEntity[] $assigned_entities assigned_entities
     *
     * @return $this
     */
    public function setAssignedEntities($assigned_entities)
    {
        $this->container['assigned_entities'] = $assigned_entities;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

