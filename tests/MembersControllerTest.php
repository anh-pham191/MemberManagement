<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MembersControllerTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->call('GET', 'member');
        $this->visit('member')->see('List All Member');
        $this->assertViewHas('members');

    }

    public function testGetMember()
    {
        $this->call('GET', '/getmember');
    }

    public function testStoreWithValidData()
    {
        $response = $this->call('POST', '/member', [
            'name' => 'TUan ANh pHam',
            'email' => 'tuananh19114@gmail.com',
            'phone' => '09452900066'
        ]);
        $this->assertRedirectedToAction('MembersController@store');

    }

    public function testStoreWithInValidName()
    {
        $response = $this->call('POST', '/member', [
            'name' => '',
            'email' => 'tuananh19114@gmail.com',
            'phone' => '09452900066'
        ]);
        $this->assertFalse(false);

    }

    public function testStoreWithInValidEmail()
    {
        $response = $this->call('POST', '/member', [
            'name' => 'Tuan Anh pHam',
            'email' => 'tuanan',
            'phone' => '09452900066'
        ]);
        $this->assertFalse(false);

    }

    public function testStoreWithNoEmail()
    {
        $response = $this->call('POST', '/member', [
            'name' => 'Tuan Anh pHam',
            'email' => '',
            'phone' => '09452900066'
        ]);
        $this->assertFalse(false);

    }

    public function testUpdate()
    {
        $response = $this->call('PATCH', '/member/29', [
            'name' => 'ID 29 updated by test',
            'email' => 'tuananh19114@gmail.com',
            'phone' => '09452900066'
        ]);
        $updatedname= DB::table('members')->where('id', '29')->first();
        $this->assertEquals($updatedname->name, 'ID 29 updated by test');
    }

    public function testDestroy()
    {
        $response = $this->call('DELETE', '/member/134', []);
        $deleted= DB::table('members')->where('id', '134')->first();

        $this->assertRedirectedToAction('MembersController@destroy');
    }
}
