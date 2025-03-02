<?php
/**
 * CallResultTest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  FreeClimb\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FreeClimb API
 *
 * FreeClimb is a cloud-based application programming interface (API) that puts the power of the Vail platform in your hands. FreeClimb simplifies the process of creating applications that can use a full range of telephony features without requiring specialized or on-site telephony equipment. Using the FreeClimb REST API to write applications is easy! You have the option to use the language of your choice or hit the API directly. Your application can execute a command by issuing a RESTful request to the FreeClimb API. The base URL to send HTTP requests to the FreeClimb REST API is: /apiserver. FreeClimb authenticates and processes your request.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@freeclimb.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace FreeClimb\Api\Test\Model;

use FreeClimb\Api\Model\CallResult;
use PHPUnit\Framework\TestCase;

/**
 * CallResultTest Class Doc Comment
 *
 * @category    Class
 * @description CallResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class CallResultTest extends TestCase
{
    protected $CallResult;

    /**
     * Test "CallResult"
     */
    public function setUp() : void
    {
        $this->CallResult = new CallResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->CallResult->setUri('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getUri(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->CallResult->setDateCreated('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getDateCreated(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->CallResult->setDateUpdated('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getDateUpdated(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->CallResult->setRevision(12345);
        $this->assertEquals($this->CallResult->getRevision(), 12345);
        $this->assertIsInt($this->CallResult->getRevision());
    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {
        $this->CallResult->setCallId('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getCallId(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getCallId());
        

    }
    /**
     * Test attribute "parent_call_id"
     */
    public function testPropertyParentCallId()
    {
        $this->CallResult->setParentCallId('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getParentCallId(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getParentCallId());
        

    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->CallResult->setAccountId('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getAccountId(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getAccountId());
        

    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->CallResult->setFrom('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getFrom(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getFrom());
        

    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->CallResult->setTo('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getTo(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getTo());
        

    }
    /**
     * Test attribute "phone_number_id"
     */
    public function testPropertyPhoneNumberId()
    {
        $this->CallResult->setPhoneNumberId('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getPhoneNumberId(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getPhoneNumberId());
        

    }
    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        
        $this->CallResult->setStatus('queued');
        $this->assertStringContainsString($this->CallResult->getStatus(), 'queued');
        $this->assertIsString($this->CallResult->getStatus());

    }
    /**
     * Test attribute "start_time"
     */
    public function testPropertyStartTime()
    {
        $this->CallResult->setStartTime('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getStartTime(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getStartTime());
        

    }
    /**
     * Test attribute "connect_time"
     */
    public function testPropertyConnectTime()
    {
        $this->CallResult->setConnectTime('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getConnectTime(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getConnectTime());
        

    }
    /**
     * Test attribute "end_time"
     */
    public function testPropertyEndTime()
    {
        $this->CallResult->setEndTime('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getEndTime(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getEndTime());
        

    }
    /**
     * Test attribute "duration"
     */
    public function testPropertyDuration()
    {
        $this->CallResult->setDuration(12345);
        $this->assertEquals($this->CallResult->getDuration(), 12345);
        $this->assertIsInt($this->CallResult->getDuration());
    }
    /**
     * Test attribute "connect_duration"
     */
    public function testPropertyConnectDuration()
    {
        $this->CallResult->setConnectDuration(12345);
        $this->assertEquals($this->CallResult->getConnectDuration(), 12345);
        $this->assertIsInt($this->CallResult->getConnectDuration());
    }
    /**
     * Test attribute "direction"
     */
    public function testPropertyDirection()
    {
        $this->CallResult->setDirection('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getDirection(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getDirection());
        

    }
    /**
     * Test attribute "answered_by"
     */
    public function testPropertyAnsweredBy()
    {
        $this->CallResult->setAnsweredBy('TEST_STRING');
        $this->assertStringContainsString($this->CallResult->getAnsweredBy(), 'TEST_STRING');
        $this->assertIsString($this->CallResult->getAnsweredBy());
        

    }
    /**
     * Test attribute "subresource_uris"
     */
    public function testPropertySubresourceUris()
    {
        $this->CallResult->setSubresourceUris(new \stdClass);
        $this->assertIsObject($this->CallResult->getSubresourceUris());
    }
}
