<?php
/**
 * SmsAllOfTest
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

use FreeClimb\Api\Model\SmsAllOf;
use PHPUnit\Framework\TestCase;

/**
 * SmsAllOfTest Class Doc Comment
 *
 * @category    Class
 * @description SmsAllOf
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SmsAllOfTest extends TestCase
{
    protected $SmsAllOf;

    /**
     * Test "SmsAllOf"
     */
    public function setUp() : void
    {
        $this->SmsAllOf = new SmsAllOf();
    }
    /**
     * Test attribute "to"
     */
    public function testPropertyTo()
    {
        $this->SmsAllOf->setTo('TEST_STRING');
        $this->assertStringContainsString($this->SmsAllOf->getTo(), 'TEST_STRING');
        $this->assertIsString($this->SmsAllOf->getTo());
        

    }
    /**
     * Test attribute "from"
     */
    public function testPropertyFrom()
    {
        $this->SmsAllOf->setFrom('TEST_STRING');
        $this->assertStringContainsString($this->SmsAllOf->getFrom(), 'TEST_STRING');
        $this->assertIsString($this->SmsAllOf->getFrom());
        

    }
    /**
     * Test attribute "text"
     */
    public function testPropertyText()
    {
        $this->SmsAllOf->setText('TEST_STRING');
        $this->assertStringContainsString($this->SmsAllOf->getText(), 'TEST_STRING');
        $this->assertIsString($this->SmsAllOf->getText());
        

    }
    /**
     * Test attribute "notification_url"
     */
    public function testPropertyNotificationUrl()
    {
        $this->SmsAllOf->setNotificationUrl('TEST_STRING');
        $this->assertStringContainsString($this->SmsAllOf->getNotificationUrl(), 'TEST_STRING');
        $this->assertIsString($this->SmsAllOf->getNotificationUrl());
        

    }
}
