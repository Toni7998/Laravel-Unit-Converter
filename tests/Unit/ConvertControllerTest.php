<?php

namespace Tests\Unit;

use Tests\TestCase;

class ConvertControllerTest extends TestCase
{
    public function testLengthConversion()
    {
        // Pruebas para ConvertLengthController
        $response = $this->get('/api/convert/length/10/meters_to_feet');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 32.8084
            ]);

        $response = $this->get('/api/convert/length/10/feet_to_meters');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 3.048
            ]);

        $response = $this->get('/api/convert/length/10/invalid_unit');
        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Invalid unit provided'
            ]);
    }

    public function testWeightConversion()
    {
        // Pruebas para ConvertWeightController
        $response = $this->get('/api/convert/weight/10/kilograms_to_pounds');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 22.0462
            ]);

        $response = $this->get('/api/convert/weight/10/pounds_to_kilograms');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 4.53592
            ]);

        $response = $this->get('/api/convert/weight/10/invalid_unit');
        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Invalid unit provided'
            ]);
    }

    public function testTemperatureConversion()
    {
        // Pruebas para ConvertTemperatureController
        $response = $this->get('/api/convert/temperature/10/celsius_to_fahrenheit');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 50
            ]);

        $response = $this->get('/api/convert/temperature/50/fahrenheit_to_celsius');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 10
            ]);

        $response = $this->get('/api/convert/temperature/10/invalid_unit');
        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Invalid unit provided'
            ]);
    }

    public function testVolumeConversion()
    {
        // Pruebas para ConvertVolumeController
        $response = $this->get('/api/convert/volume/10/liters_to_gallons');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 2.64172
            ]);

        $response = $this->get('/api/convert/volume/10/gallons_to_liters');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 37.8541
            ]);

        $response = $this->get('/api/convert/volume/10/invalid_unit');
        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Invalid unit provided'
            ]);
    }

    public function testSpeedConversion()
    {
        // Pruebas para ConvertSpeedController
        $response = $this->get('/api/convert/speed/100/kilometers_per_hour_to_miles_per_hour');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 62.1371
            ]);

        $response = $this->get('/api/convert/speed/62.1371/miles_per_hour_to_kilometers_per_hour');
        $response->assertStatus(200)
            ->assertJson([
                'result' => 100
            ]);

        $response = $this->get('/api/convert/speed/10/invalid_unit');
        $response->assertStatus(400)
            ->assertJson([
                'error' => 'Invalid unit provided'
            ]);
    }
}
