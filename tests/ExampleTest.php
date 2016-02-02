<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
            ->see('Laravel ');
    }

//    public function testNewUserRegistration()
//    {
//
//        $this->visit('member/create')
//            ->type('Tuan Anh', 'name')
//            ->type('tuananh191194@gmail.com', 'email')
//            ->type('0945290006', 'phone')
//            ->press('Add Member')
//            ->seePageIs('/member');
//    }
}
