<?php
/**
 * This file is part of SebastianFeldmann\Cli.
 *
 * (c) Sebastian Feldmann <sf@sebastian-feldmann.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianFeldmann\Git\Command;

use SebastianFeldmann\Git\Command\Log\ChangedFiles;

/**
 * Class BaseTest
 *
 * @package SebastianFeldmann\Git
 */
class BaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests Base::__toString
     */
    public function testToString()
    {
        $cmd = new ChangedFiles('/foo');
        $this->assertEquals(
            'git -C \'/foo\' log --format=\'\' --name-only --no-merges',
            (string) $cmd
        );
    }
}
