<?php


use Applitools\RectangleSize;
use Applitools\Selenium\Eyes;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Applitools\Selenium\StitchMode;
use Facebook\WebDriver\WebDriver;

/**
 *
 * @category    selenium
 * @package     tests
 * @subpackage  smoke
 */

/**
 *

 *
 * @package     tests
 * @subpackage  smoke
 */
class Smoke_AppliFrontendTest extends PHPUnit_Extensions_Selenium2TestCase
{

    protected $_session;
    protected  $_driver;
    public function setUp()
    {

        $this->setBrowser('chrome');
        $this->setHost('mattdsauce:fc7530ea-9891-4618-aa52-5460e4beb094@ondemand.saucelabs.com');
        $this->setBrowserUrl("https://www.softwareadvice.com/");
        $this->_session = parent::prepareSession();
        $this->printSauceInfo($this->_session->id());

    }

    /**
     * <p>Preconditions:</p>
     */
    protected function assertPreConditions()
    {
    }


    /**
     * <p> POC for Applitools </p>
     *
     * @test
     *
     * @group smokeFrontendParallel
     */
    public function test_HomePageTest1()
    {

        $this->url("https://www.softwareadvice.com/");

        $this->assertTrue($this->isElementDisplayed("html/body/div[1]/div[11]/div/div[1]/a/button"));

    }

    public function test_HomePageTest2(){
        $this->url("https://www.softwareadvice.com/");

        $this->assertTrue($this->isElementDisplayed("html/body/div[1]/div[11]/div/div[1]/a/button[contains(., 'Hello')]"));

    }


    private function isElementDisplayed($xPath){
        try {
            if ($this->byXPath($xPath)->displayed()) {
                return true;
            } else {
                return false;
            }
        } catch (error $e) {
            return false;
        }
    }

    private function printSauceInfo($sessionId){
        $info = PHP_EOL . 'SauceOnDemandSessionID=' . $sessionId . ' job-name=' . $this->getName() . PHP_EOL;
        file_put_contents("sauceInfo.txt", $info, FILE_APPEND);
        echo $info;

    }


  }