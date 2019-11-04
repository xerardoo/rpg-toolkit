<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/1/2019
 * Time: 6:57 PM
 */


class HeroesTest extends TestCase
{
    /**
     * Hero creation test.
     *
     * @return void
     */
    public function testCreation()
    {
        $this->post($this->API . '/heroes',
            [
                'firstname' => 'Superman',
                'lastname' => 'Robbin',
                'racesid' => 1,
                'classesid' => 1,
                'weaponsid' => 1,
            ]);
        $this->assertResponseStatus(201);
    }

    /**
     * Hero update test.
     *
     * @return void
     */
    public function testUpdate()
    {
        $this->PUT($this->API . '/heroes/1',
            [
                'firstname' => 'Clark',
                'lastname' => 'Kent',
                'racesid' => 2,
                'classesid' => 2,
                'weaponsid' => 2,
            ]);
        $this->assertResponseStatus(200);
    }

    /**
     * Get a single heroe.
     *
     * @return void
     */
    public function testGetOne()
    {
        $this->GET($this->API . '/heroes/1');
        $this->seeJson([
            'firstname' => 'Clark',
            'lastname' => 'Kent',
            'racesid' => 2,
            'classesid' => 2,
            'weaponsid' => 2,
        ]);
        $this->assertResponseStatus(200);
    }

    /**
     * Get all heroes.
     *
     * @return void
     */
    public function testGetAll()
    {
        $this->GET($this->API . '/heroes');
        $this->seeJsonEquals([
            'total' => 1,
            'rows' =>
                [[
                    'id' => 1,
                    'firstname' => 'Clark',
                    'lastname' => 'Kent',
                    'level' => 1,
                    'racesid' => 2,
                    'classesid' => 2,
                    'weaponsid' => 2,
                ]]
        ]);
        $this->assertResponseStatus(200);
    }

    /**
     * Hero delete test.
     *
     * @return void
     */
    public function testDelete()
    {
        $this->DELETE($this->API . '/heroes/1');
        $this->assertResponseStatus(200);
    }

    public function testGetRaces()
    {
        $this->GET($this->API . '/races');
        $this->seeJson([[
            'id' => 1,
            'name' => 'Human',
        ]]);
        $this->assertResponseStatus(200);
    }

    public function testGetClasses()
    {
        $this->GET($this->API . '/classes');
        $this->seeJson([[
            'id' => 1,
            'name' => 'Paladin',
        ]]);
        $this->assertResponseStatus(200);
    }

    public function testGetWeapons()
    {
        $this->GET($this->API . '/weapons');
        $this->seeJson([[
            'id' => 1,
            'name' => 'Sword',
        ]]);
        $this->assertResponseStatus(200);
    }
}