<?php
/**
 * Tests for DecentroGuide
 */

use PHPUnit\Framework\TestCase;
use Decentroguide\Decentroguide;

class DecentroguideTest extends TestCase {
    private Decentroguide $instance;

    protected function setUp(): void {
        $this->instance = new Decentroguide(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decentroguide::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
