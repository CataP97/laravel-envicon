<?php

namespace CataP97\Envicon\Tests;

use CataP97\Envicon\Facades\Envicon;

class EnviconTest extends TestCase
{
    public function environments()
    {
        return [
            ['local'],
            ['staging'],
            ['production']
        ];
    }

    /**
     * @test
     * @dataProvider environments
     */
    public function it_returns_the_favicon_for_the_runtime_environment($env)
    {
        app()['env'] = $env;

        $this->assertEquals(asset("favicons/${env}.svg"), Envicon::url());
    }

    /**
     * @test
     * @dataProvider environments
     */
    public function it_returns_the_favicon_for_the_specified_environment($env)
    {
        $this->assertEquals(asset("favicons/${env}.svg"), Envicon::for($env));
    }

    /**
     * @test
     */
    public function it_returns_the_default_favicon_if_the_given_environment_has_no_favicon()
    {
        config()->set('envicon.default_favicon', 'favicons/production.svg');

        $this->assertEquals(asset('favicons/production.svg'), Envicon::for('nope'));
    }
}
