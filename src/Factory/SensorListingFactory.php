<?php

namespace App\Factory;

use App\Entity\SensorListing;
use App\Repository\SensorListingRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @method static SensorListing|Proxy createOne(array $attributes = [])
 * @method static SensorListing[]|Proxy[] createMany(int $number, $attributes = [])
 * @method static SensorListing|Proxy find($criteria)
 * @method static SensorListing|Proxy findOrCreate(array $attributes)
 * @method static SensorListing|Proxy first(string $sortedField = 'id')
 * @method static SensorListing|Proxy last(string $sortedField = 'id')
 * @method static SensorListing|Proxy random(array $attributes = [])
 * @method static SensorListing|Proxy randomOrCreate(array $attributes = [])
 * @method static SensorListing[]|Proxy[] all()
 * @method static SensorListing[]|Proxy[] findBy(array $attributes)
 * @method static SensorListing[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static SensorListing[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static SensorListingRepository|RepositoryProxy repository()
 * @method SensorListing|Proxy create($attributes = [])
 */
final class SensorListingFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://github.com/zenstruck/foundry#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // add your default values here (https://github.com/zenstruck/foundry#model-factories)
            'sensor' => 'temperatur01',
            'value' => number_format(rand(-2, 22) + lcg_value(), 2),
        ];
    }

    protected function initialize(): self
    {
        // see https://github.com/zenstruck/foundry#initialization
        return $this
            // ->afterInstantiate(function(SensorListing $sensorListing) {})
        ;
    }

    protected static function getClass(): string
    {
        return SensorListing::class;
    }
}
