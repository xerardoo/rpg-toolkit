<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/4/2019
 * Time: 2:28 PM
 */


class DashboardTest extends TestCase
{
    public function testStatsHeroes()
    {
        $this->GET($this->API . '/dashboard/heroes');
        $this->seeJson([
            'count' => 1,
            'popular-race' => [
                'count' => 1,
                'name' => 'Elf'
            ],
            'popular-class' => [
                'count' => 1,
                'name' => 'Ranger'
            ],
            'popular-weapon' => [
                'count' => 1,
                'name' => 'Dagger'
            ],
        ]);
        $this->assertResponseStatus(200);
    }

    public function testGetStatsMonsters()
    {
        $this->GET($this->API . '/dashboard/monsters');
        $this->seeJson([
            'count' => 1,
            'popular-race' => [
                'count' => 1,
                'name' => 'Beholder'
            ],
            'popular-ability' => [
                'count' => 1,
                'name' => 'Shadow Ball'
            ],

        ]);
        $this->assertResponseStatus(200);
    }
}
