<?php
/**
 * AvailableNumberListTest
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

use FreeClimb\Api\Model\AvailableNumberList;
use PHPUnit\Framework\TestCase;

/**
 * AvailableNumberListTest Class Doc Comment
 *
 * @category    Class
 * @description AvailableNumberList
 * @package     FreeClimb\Api
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class AvailableNumberListTest extends TestCase
{
    protected $AvailableNumberList;

    /**
     * Test "AvailableNumberList"
     */
    public function setUp() : void
    {
        $this->AvailableNumberList = new AvailableNumberList();
    }
    /**
     * Test attribute "total"
     */
    public function testPropertyTotal()
    {
        $this->AvailableNumberList->setTotal(12345);
        $this->assertEquals($this->AvailableNumberList->getTotal(), 12345);
        $this->assertIsInt($this->AvailableNumberList->getTotal());
    }
    /**
     * Test attribute "start"
     */
    public function testPropertyStart()
    {
        $this->AvailableNumberList->setStart(12345);
        $this->assertEquals($this->AvailableNumberList->getStart(), 12345);
        $this->assertIsInt($this->AvailableNumberList->getStart());
    }
    /**
     * Test attribute "end"
     */
    public function testPropertyEnd()
    {
        $this->AvailableNumberList->setEnd(12345);
        $this->assertEquals($this->AvailableNumberList->getEnd(), 12345);
        $this->assertIsInt($this->AvailableNumberList->getEnd());
    }
    /**
     * Test attribute "page"
     */
    public function testPropertyPage()
    {
        $this->AvailableNumberList->setPage(12345);
        $this->assertEquals($this->AvailableNumberList->getPage(), 12345);
        $this->assertIsInt($this->AvailableNumberList->getPage());
    }
    /**
     * Test attribute "num_pages"
     */
    public function testPropertyNumPages()
    {
        $this->AvailableNumberList->setNumPages(12345);
        $this->assertEquals($this->AvailableNumberList->getNumPages(), 12345);
        $this->assertIsInt($this->AvailableNumberList->getNumPages());
    }
    /**
     * Test attribute "page_size"
     */
    public function testPropertyPageSize()
    {
        $this->AvailableNumberList->setPageSize(12345);
        $this->assertEquals($this->AvailableNumberList->getPageSize(), 12345);
        $this->assertIsInt($this->AvailableNumberList->getPageSize());
    }
    /**
     * Test attribute "next_page_uri"
     */
    public function testPropertyNextPageUri()
    {
        $this->AvailableNumberList->setNextPageUri('TEST_STRING');
        $this->assertStringContainsString($this->AvailableNumberList->getNextPageUri(), 'TEST_STRING');
        $this->assertIsString($this->AvailableNumberList->getNextPageUri());
        

    }
    /**
     * Test attribute "available_phone_numbers"
     */
    public function testPropertyAvailablePhoneNumbers()
    {
        $this->AvailableNumberList->setAvailablePhoneNumbers(array());
        $this->assertIsArray($this->AvailableNumberList->getAvailablePhoneNumbers());
    }
}
