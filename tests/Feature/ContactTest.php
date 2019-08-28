<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    /**
     *
     * @test
     */
    public function a_visitor_can_send_a_message_through_contact_form()
    {
        $this->json('POST', 'contact', [
            'name' => 'Name',
            'email'  => 'mail@mail.com',
            'phone' => '331111111111',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in justo at ligula tempus mollis. 
                            Vestibulum in vehicula massa, ut dignissim velit. Fusce et risus congue, lacinia velit ut, tempus elit. ',
        ])->assertStatus(200);
    }
}
