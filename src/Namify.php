<?php

namespace Zanderwar\Namify;

/**
 * Class Namify.
 *
 * @author Reece Alexander <reece.alexander@gmail.com>
 */
class Namify
{
    /**
     * @var array
     */
    private static array $namesUsed = [];

    /**
     * Generate a random name.
     *
     * @param int|null $maxLength
     * @param bool $unique
     * @param bool $resetUnique
     * @return string
     * @throws \Exception
     */
    public static function generate(?int $maxLength = null, bool $unique = false, bool $resetUnique = false) : string
    {
        if ($resetUnique) {
            self::resetUnique();
        }

        $attempts = 0;

        for ($i = 0; $i < 10000; $i++) {
            $name = self::getRandomAdjective() . self::getRandomAnimal();

            if ($maxLength && strlen($name) > $maxLength) {
                continue;
            }

            if (! $unique) {
                return $name;
            }

            if (! in_array($name, self::$namesUsed)) {
                self::$namesUsed[] = $name;

                return $name;
            }

            $attempts++;
        }

        throw new \Exception('Unable to generate a unique name after ' . $attempts . ' attempts.');
    }

    /**
     * Check that the given value is unique.
     *
     * @param string $name
     * @return bool
     */
    private static function isUnique(string $name) : bool
    {
        if (in_array($name, self::$namesUsed)) {
            return false;
        }

        return true;
    }

    /**
     * Reset the list of unique names previously generated.
     *
     * @return void
     */
    public static function resetUnique() : void
    {
        self::$namesUsed = [];
    }

    /**
     * Get adjectives.
     *
     * @return array
     */
    public static function getAdjectives() : array
    {
        return json_decode(file_get_contents(__DIR__. '/../data/adjectives.json'), true);
    }

    /**
     * Get animals.
     *
     * @return array
     */
    public static function getAnimals() : array
    {
        return json_decode(file_get_contents(__DIR__. '/../data/animals.json'), true);
    }

    /**
     * Get a random adjective.
     *
     * @return string
     */
    private static function getRandomAdjective(): string
    {
        return self::getAdjectives()[array_rand(self::getAdjectives())];
    }

    /**
     * Get a random animal.
     *
     * @return string
     */
    private static function getRandomAnimal(): string
    {
        return self::getAnimals()[array_rand(self::getAnimals())];
    }

    /**
     * Calculate how many permutations are possible.
     *
     * @return int
     */
    public static function calculatePermutations() : int
    {
        return count(self::getAdjectives()) * count(self::getAnimals());
    }
}