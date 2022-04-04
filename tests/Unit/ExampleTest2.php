<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest2 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function ujicoba2()
    {
       $this->get("/edulevel/add")->assertStatus(200);
    }
    }


