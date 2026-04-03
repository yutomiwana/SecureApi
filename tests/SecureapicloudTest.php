<?php
/**
 * Tests for SecureApiCloud
 */

use PHPUnit\Framework\TestCase;
use Secureapicloud\Secureapicloud;

class SecureapicloudTest extends TestCase {
    private Secureapicloud $instance;

    protected function setUp(): void {
        $this->instance = new Secureapicloud(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Secureapicloud::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
