<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLinkShortener()
    {
        $this->post('/getLink', [
            'link' => 'https://www.youtube.com/watch?v=SKOPNMw1X98'
        ]);
        #$this->assertResponseStatus(200);
        dd($this);

    }
}
