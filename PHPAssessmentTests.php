<?php

define('ASSESSMENT_FILE', __DIR__ . '/assessment.php');

require ASSESSMENT_FILE;

class PHPAssessmentTests extends PHPUnit_Framework_TestCase
{
    public function test_is_negative()
    {
        $negativeNumber = mt_rand(-200, -50);
        $positiveNumber = mt_rand(20, 400);


        $this->assertInternalType(
            'callable',
            'isNegative',
            'Expected isNegative() function to be present.'
        );

        $this->assertInternalType(
            'bool',
            isNegative(12),
            "Expected the isNegative(12) function to return a boolean"
        );

        $this->assertInternalType(
            'bool',
            isNegative(-12),
            "Expected the isNegative(-12) function to return a boolean"
        );


        $this->assertTrue(
            isNegative($negativeNumber),
             "Expected isNegative($negativeNumber) to return true."
        );

        $this->assertFalse(
            isNegative($positiveNumber),
            "Expected isNegative($positiveNumber) to return false."
        );

        $this->assertTrue(
            isNegative(-10),
            "Expected isNegative(-10) to return true"
        );

        $this->assertFalse(
            isNegative(123),
            "Expected isNegative(123) to return false"
        );

        $this->assertFalse(
            isNegative(0),
            "Expected isNegative(0) to return false."
        );
    }

    public function test_average()
    {
        $this->assertInternalType(
            'callable',
            'average',
            "Expected average() function to be present."
        );

        $this->assertInternalType(
            'numeric',
            average([1, 2, 3]),
            "Expected average() to return a numeric result"
        );

        $this->assertEquals(
            1.5, average([1, 2]),
            "Expected average([1, 2]) to equal 1.5"
        );

        $this->assertEquals(
            2, average([1, 2, 3]),
            "Expected average([1, 2, 3]) to equal 2"
        );
    }

    public function test_count_odds()
    {

        $this->assertInternalType(
            'callable',
            'countOdds',
            'Expected countOdds() function to be present.'
        );

        $this->assertInternalType(
            'numeric',
            countOdds([1, 2, 3]),
            "Expected countOdds([1, 2, 3]) to return a numeric result."
        );

        $this->assertEquals(
            2, countOdds([1, 2, 3]),
            "Expected countOdds[1, 2, 3] to equal 2."
        );

        $this->assertEquals(
            5, countOdds([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            "Expected countOdds([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]) to equal 5."
        );

        $this->assertEquals(
            0, countOdds([0, 2, 4, 6]),
            "Expected countOdds([0, 2, 4, 6]) to equal 0"
        );
    }

    public function test_convert_name_to_associative_array()
    {
        $this->assertInternalType(
            'callable',
            'convertNameToAssociativeArray',
            "Expected convertNameToAssociativeArray() function to be present."
        );

        $this->assertInternalType(
            'array',
            convertNameToAssociativeArray("John Dillinger"),
            "Expected convertNameToAssociativeArray('John Dillinger') to return an array"
        );

        $this->assertArrayHasKey('firstName',
            convertNameToAssociativeArray('John Dillinger'),
            "Expected the array returned by convertNameToAssociativeArray('John Dillinger') to have 'firstName' as a defined index."
        );

        $this->assertArrayHasKey('lastName',
            convertNameToAssociativeArray('John Dillinger'),
            "Expected the array returned by convertNameToAssociativeArray('John Dillinger') to have 'lastName' as a defined index."
        );

        $this->assertEquals(
            ['firstName' => 'Al', 'lastName' => 'Capone'],
            convertNameToAssociativeArray('Al Capone'),
            "Expected convertNameToAssociativeArray('Al Capone') to equal ['firstName' => 'Al', 'lastName' => 'Capone']"
        );

        $this->assertEquals(
            ['firstName' => 'John', 'lastName' => 'Dillinger'],
            convertNameToAssociativeArray('John Dillinger'),
            "Expected convertNameToAssociativeArray('John Dillinger') to equal ['firstName' => 'John', 'lastName' => 'Dillinger']"
        );
    }

    public function test_five_to()
    {
        $this->assertInternalType(
            'callable',
            'fiveTo',
            "Expected fiveTo() function to exist."
        );

        $this->assertInternalType(
            'array',
            fiveTo(10),
            "Expected fiveTo() function to return an array."
        );

        $this->assertEquals(
            [5], fiveTo(5),
            "Expected fiveTo(5) to equal [5]"
        );

        $this->assertEquals(
            [5, 6], fiveTo(6),
            "Expected fiveTo(6) to equal the array [5, 6]"
        );

        $this->assertEquals(
            [5, 4, 3, 2, 1, 0, -1, -2], fiveTo(-2),
            "Expected fiveTo(-2) to equal [5, 4, 3, 2, 1, 0, -1, -2]"
        );

        $this->assertEquals(
            [5, 6, 7, 8, 9, 10], fiveTo(10),
            "Expected fiveTo(10) to equal the array [5, 6, 7, 8, 9, 10]"
        );
    }

    public function test_upper_case_last_names()
    {
        $gangsterInput = [
            [
                'firstName' => 'Al',
                'lastName' => 'capone'
            ],
            [
                'firstName' => 'Bugsy',
                'lastName' => 'seigel'
            ],
            [
                'firstName' => 'John',
                'lastName' => 'dillinger'
            ]
        ];

        $gangsterOutput = [
            [
                'firstName' => 'Al',
                'lastName' => 'Capone'
            ],
            [
                'firstName' => 'Bugsy',
                'lastName' => 'Seigel'
            ],
            [
                'firstName' => 'John',
                'lastName' => 'Dillinger'
            ]
        ];

        $harryPotterInput = [
            [
                'firstName' => 'Harry',
                'lastName' => 'potter'
            ],
            [
                'firstName' => 'Ron',
                'lastName' => 'weasley'
            ],
            [
                'firstName' => 'Hermione',
                'lastName' => 'granger'
            ]
        ];

        $harryPotterOutput = [
            [
                'firstName' => 'Harry',
                'lastName' => 'Potter'
            ],
            [
                'firstName' => 'Ron',
                'lastName' => 'Weasley'
            ],
            [
                'firstName' => 'Hermione',
                'lastName' => 'Granger'
            ]
        ];

        $this->assertInternalType(
            'callable',
            'upperCaseLastNames',
            "Expected upperCaseLastNames() function to exist"
        );

        $this->assertInternalType(
            'array',
            upperCaseLastNames($gangsterInput),
            "Expected upperCaseLastNames([
                [
                    'firstName' => 'Al',
                    'lastName' => 'capone'
                ],
                [
                    'firstName' => 'Bugsy',
                    'lastName' => 'seigel'
                ],
                [
                    'firstName' => 'John',
                    'lastName' => 'dillinger'
                ]
            ]) to return an array"
        );

        $this->assertInternalType(
            'array',
            upperCaseLastNames($gangsterInput)[0],
            "Expected the first element of the array returned by
            upperCaseLastNames([
                [
                    'firstName' => 'Al',
                    'lastName' => 'capone'
                ],
                [
                    'firstName' => 'Bugsy',
                    'lastName' => 'seigel'
                ],
                [
                    'firstName' => 'John',
                    'lastName' => 'dillinger'
                ]
            ]) to be an array."
        );

        $this->assertArrayHasKey(
            'firstName',
            upperCaseLastNames($gangsterInput)[0],
            "Expected the first element of the array returned by upperCaseLastNames([
                [
                    'firstName' => 'Al',
                    'lastName' => 'capone'
                ],
                [
                    'firstName' => 'Bugsy',
                    'lastName' => 'seigel'
                ],
                [
                    'firstName' => 'John',
                    'lastName' => 'dillinger'
                ]
            ]) to be an associative array and to have a key of 'firstName'"
        );

        $this->assertArrayHasKey(
            'lastName',
            upperCaseLastNames($gangsterInput)[0],
            "Expected the first element of the array returned by upperCaseLastNames([
                [
                    'firstName' => 'Al',
                    'lastName' => 'capone'
                ],
                [
                    'firstName' => 'Bugsy',
                    'lastName' => 'seigel'
                ],
                [
                    'firstName' => 'John',
                    'lastName' => 'dillinger'
                ]
            ]) to be an associative array and to have a key of 'lastName'"
        );

        $this->assertEquals(
            $harryPotterOutput,
            upperCaseLastNames($harryPotterInput),
            "Expected [
                [
                    'firstName' => 'Harry',
                    'lastName' => 'Potter'
                ],
                [
                    'firstName' => 'Ron',
                    'lastName' => 'Weasley'
                ],
                [
                    'firstName' => 'Hermione',
                    'lastName' => 'Granger'
                ]
            ] to equal upperCaseLastNames([
                [
                    'firstName' => 'Harry',
                    'lastName' => 'potter'
                ],
                [
                    'firstName' => 'Ron',
                    'lastName' => 'weasley'
                ],
                [
                    'firstName' => 'Hermione',
                    'lastName' => 'granger'
                ]
            ])"
        );

        $this->assertEquals(
            $gangsterOutput,

            // call
            upperCaseLastNames($gangsterInput),

            // message
            "Expected upperCaseLastNames([
                [
                    'firstName' => 'Al',
                    'lastName' => 'capone'
                ],
                [
                    'firstName' => 'Bugsy',
                    'lastName' => 'seigel'
                ],
                [
                    'firstName' => 'John',
                    'lastName' => 'dillinger'
                ]
            ]) to equal [
                [
                    'firstName' => 'Al',
                    'lastName' => 'Capone'
                ],
                [
                    'firstName' => 'Bugsy',
                    'lastName' => 'Seigel'
                ],
                [
                    'firstName' => 'John',
                    'lastName' => 'Dillinger'
                ]
            ]"
        );
    }
}
