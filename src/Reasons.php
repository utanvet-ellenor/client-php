<?php

namespace UtanvetEllenor;

class Reasons
{
    public const TEST_HASH = 'TEST_HASH';
    public const OUT_OF_QUOTA = 'OUT_OF_QUOTA';
    public const EXCEPTION_FOUND = 'EXCEPTION_FOUND';
    public const TEMP_EMAIL = 'TEMP_EMAIL';
    public const MAILBOX_NON_EXISTENT = 'MAILBOX_NON_EXISTENT';
    public const NOT_FOUND = 'NOT_FOUND';
    public const THRESHOLD_NOT_MET = 'THRESHOLD_NOT_MET';
    public const OPTED_OUT = 'OPTED_OUT';
    public const PASSED = 'PASSED';

    public const TRANSLATIONS = [
        self::TEST_HASH => [
            'en' => 'Test hash was used.',
            'hu' => 'Teszt e-mail cím.',
        ],
        self::OUT_OF_QUOTA => [
            'en' => 'Run out of request quota for current billing period, upgrade your subscription to resolve!',
            'hu' => 'Csomag kimerült.',
        ],
        self::EXCEPTION_FOUND => [
            'en' => 'Active exception found for this hash in your account.',
            'hu' => 'A fiókodban szereplő Kivétel.',
        ],
        self::TEMP_EMAIL => [
            'en' => 'Temporary e-mail was used.',
            'hu' => 'Eldobható e-mail cím.',
        ],
        self::MAILBOX_NON_EXISTENT => [
            'en' => 'Mailbox does not exist.',
            'hu' => 'E-mail fiók nem létezik.',
        ],
        self::NOT_FOUND => [
            'en' => 'No Signals were found.',
            'hu' => 'Nem találtunk adatot.',
        ],
        self::THRESHOLD_NOT_MET => [
            'en' => 'Total rate did not meet the minimum threshold set.',
            'hu' => 'A vásárló reputációja nem érte el a beállított küszöbértéket.',
        ],
        self::OPTED_OUT => [
            'en' => 'User opted out of the processing of their personal data.',
            'hu' => 'Az érintett tiltakozott személyes adatainak kezelése ellen.',
        ],
        self::PASSED => [
            'en' => 'Signals found, checks passed.',
            'hu' => 'Ellenőrzés sikeres, rendben.',
        ],
    ];

    public static function getLabel(string $reason, string $locale = 'en') : string
    {
        $language = strtolower(substr($locale, 0, 2));

        return self::TRANSLATIONS[$reason][$language]
            ?? self::TRANSLATIONS[$reason]['en']
            ?? $reason;
    }
}
