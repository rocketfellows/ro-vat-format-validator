<?php

namespace rocketfellows\ROVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\ROVatFormatValidator\ROVatFormatValidator;

class ROVatFormatValidatorTest extends TestCase
{
    /**
     * @var ROVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new ROVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'RO00',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO0000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO00000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO0000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO11',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO1111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO11111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO1111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO99',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO9999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO99999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO9999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO12',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO123',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO1234',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO12345',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO123456',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO1234567',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => true,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'RO0',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'RO1',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'RO9',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'RO12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
