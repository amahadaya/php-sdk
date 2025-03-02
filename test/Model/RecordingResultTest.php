<?php
/**
 * RecordingResultTest
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

use FreeClimb\Api\Model\RecordingResult;
use PHPUnit\Framework\TestCase;

/**
 * RecordingResultTest Class Doc Comment
 *
 * @category    Class
 * @description RecordingResult
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RecordingResultTest extends TestCase
{
    protected $RecordingResult;

    /**
     * Test "RecordingResult"
     */
    public function setUp() : void
    {
        $this->RecordingResult = new RecordingResult();
    }
    /**
     * Test attribute "uri"
     */
    public function testPropertyUri()
    {
        $this->RecordingResult->setUri('TEST_STRING');
        $this->assertStringContainsString($this->RecordingResult->getUri(), 'TEST_STRING');
        $this->assertIsString($this->RecordingResult->getUri());
        

    }
    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
        $this->RecordingResult->setDateCreated('TEST_STRING');
        $this->assertStringContainsString($this->RecordingResult->getDateCreated(), 'TEST_STRING');
        $this->assertIsString($this->RecordingResult->getDateCreated());
        

    }
    /**
     * Test attribute "date_updated"
     */
    public function testPropertyDateUpdated()
    {
        $this->RecordingResult->setDateUpdated('TEST_STRING');
        $this->assertStringContainsString($this->RecordingResult->getDateUpdated(), 'TEST_STRING');
        $this->assertIsString($this->RecordingResult->getDateUpdated());
        

    }
    /**
     * Test attribute "revision"
     */
    public function testPropertyRevision()
    {
        $this->RecordingResult->setRevision(12345);
        $this->assertEquals($this->RecordingResult->getRevision(), 12345);
        $this->assertIsInt($this->RecordingResult->getRevision());
    }
    /**
     * Test attribute "recording_id"
     */
    public function testPropertyRecordingId()
    {
        $this->RecordingResult->setRecordingId('TEST_STRING');
        $this->assertStringContainsString($this->RecordingResult->getRecordingId(), 'TEST_STRING');
        $this->assertIsString($this->RecordingResult->getRecordingId());
        

    }
    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
        $this->RecordingResult->setAccountId('TEST_STRING');
        $this->assertStringContainsString($this->RecordingResult->getAccountId(), 'TEST_STRING');
        $this->assertIsString($this->RecordingResult->getAccountId());
        

    }
    /**
     * Test attribute "call_id"
     */
    public function testPropertyCallId()
    {
        $this->RecordingResult->setCallId('TEST_STRING');
        $this->assertStringContainsString($this->RecordingResult->getCallId(), 'TEST_STRING');
        $this->assertIsString($this->RecordingResult->getCallId());
        

    }
    /**
     * Test attribute "duration_sec"
     */
    public function testPropertyDurationSec()
    {
        $this->RecordingResult->setDurationSec(12345);
        $this->assertEquals($this->RecordingResult->getDurationSec(), 12345);
        $this->assertIsInt($this->RecordingResult->getDurationSec());
    }
    /**
     * Test attribute "conference_id"
     */
    public function testPropertyConferenceId()
    {
        $this->RecordingResult->setConferenceId('TEST_STRING');
        $this->assertStringContainsString($this->RecordingResult->getConferenceId(), 'TEST_STRING');
        $this->assertIsString($this->RecordingResult->getConferenceId());
        

    }
}
