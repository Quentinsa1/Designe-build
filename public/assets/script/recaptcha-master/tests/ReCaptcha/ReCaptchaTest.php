<?php
/**
 * This is a PHP library that handles calling reCAPTCHA.
 *
 * @copyright Copyright (c) 2025, Google Inc.
 * @link      http://www.google.com/recaptcha
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace ReCaptcha;

class ReCaptchaTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \RuntimeException
     * @dataProvider invalidSecretProvider
     */
    public function testExceptionThrownOnInvalidSecret($invalid)
    {
        $rc = new ReCaptcha($invalid);
    }

    public function invalidSecretProvider()
    {
        return array(
            array(''),
            array(null),
            array(0),
            array(new \stdClass()),
            array(array()),
        );
    }

    public function testVerifyReturnsErrorOnMissingResponse()
    {
        $rc = new ReCaptcha('secret');
        $response = $rc->verify('');
        $this->assertFalse($response->isSuccess());
        $this->assertEquals(array('missing-input-response'), $response->getErrorCodes());
    }

    public function testVerifyReturnsResponse()
    {
        $method = $this->getMock('\\ReCaptcha\\RequestMethod', array('submit'));
        $method->expects($this->once())
                ->method('submit')
                ->with($this->callback(function ($params) {

                            return true;
                        }))
                ->will($this->returnValue('{"success": true}'));
        ;
        $rc = new ReCaptcha('secret', $method);
        $response = $rc->verify('response');
        $this->assertTrue($response->isSuccess());
    }
}
