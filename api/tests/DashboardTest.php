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
            'popular-race' => 'Human',
            'popular-class' => 'Paladin',
            'popular-weapon' => 'Sword',
        ]);
        $this->assertResponseStatus(200);
    }

    public function testGetStatsMonsters()
    {
        $this->GET($this->API . '/dashboard/monsters');
        $this->seeJson([
            'count' => 1,
            'popular-race' => 'Beholder',
            'popular-ability' => 'Shadow Ball',
        ]);
        $this->assertResponseStatus(200);
    }
}
