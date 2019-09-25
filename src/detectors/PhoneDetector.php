<?php
namespace phputils\detectors;

/**
 *
 * @author iomar
 *
 */
declare(strict_types = 1);

class PhoneDetector
{

    private static $REGEX_IOS = '#(iPhone|iPad|iPod)#i';

    private static $REGEX_ANDROID = '#android#i';

    /** @var string */
    private $userAgent;

    public function __construct()
    {
        $this->userAgent = $this->getUserAgent();
    }

    public function isIos()
    {
        return $this->testUserAgentWith(self::$REGEX_IOS);
    }

    public function isAndroid()
    {
        return $this->testUserAgentWith(self::$REGEX_ANDROID);
    }

    private function testUserAgentWith($regex)
    {
        return (bool) preg_match($regex, $this->userAgent);
    }

    private function getUserAgent()
    {
        return (string) $_SERVER['HTTP_USER_AGENT'];
    }
}

