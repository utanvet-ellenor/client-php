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
            'ro' => 'A fost utilizat un hash de test.',
            'bg' => 'Използван е тестов хеш.',
            'sk' => 'Bol použitý testovací hash.',
            'cs' => 'Byl použit testovací hash.',
            'hr' => 'Upotrijebljen je testni hash.',
            'sr' => 'Upotrebljen je testni heš.',
            'pl' => 'Użyto testowej wartości skrótu.',
        ],
        self::OUT_OF_QUOTA => [
            'en' => 'Run out of request quota for current billing period, upgrade your subscription to resolve!',
            'hu' => 'Csomag kimerült.',
            'ro' => 'Cota de solicitări pentru perioada de facturare curentă a fost epuizată. Treceți la un abonament superior pentru a rezolva problema.',
            'bg' => 'Квотата за заявки за текущия период на фактуриране е изчерпана. Преминете към по-висок абонаментен план, за да разрешите проблема.',
            'sk' => 'Limit požiadaviek pre aktuálne fakturačné obdobie bol vyčerpaný. Prejdite na vyšší program, aby ste problém vyriešili.',
            'cs' => 'Limit požadavků pro aktuální fakturační období byl vyčerpán. Problém vyřešíte přechodem na vyšší tarif.',
            'hr' => 'Kvota zahtjeva za trenutačno obračunsko razdoblje je iscrpljena. Nadogradite pretplatu kako biste riješili problem.',
            'sr' => 'Kvota zahteva za tekući obračunski period je iscrpljena. Nadogradite pretplatu da biste rešili problem.',
            'pl' => 'Limit zapytań w bieżącym okresie rozliczeniowym został wyczerpany. Zmień plan na wyższy, aby rozwiązać problem.',
        ],
        self::EXCEPTION_FOUND => [
            'en' => 'Active exception found for this hash in your account.',
            'hu' => 'A fiókodban szereplő Kivétel.',
            'ro' => 'A fost găsită în contul dvs. o excepție activă pentru acest hash.',
            'bg' => 'В профила ви е намерено активно изключение за този хеш.',
            'sk' => 'Vo vašom účte bola nájdená aktívna výnimka pre tento hash.',
            'cs' => 'Ve vašem účtu byla nalezena aktivní výjimka pro tento hash.',
            'hr' => 'Na vašem računu pronađena je aktivna iznimka za ovaj hash.',
            'sr' => 'Na vašem nalogu pronađen je aktivan izuzetak za ovaj heš.',
            'pl' => 'Na Twoim koncie znaleziono aktywny wyjątek dla tej wartości skrótu.',
        ],
        self::TEMP_EMAIL => [
            'en' => 'Temporary e-mail was used.',
            'hu' => 'Eldobható e-mail cím.',
            'ro' => 'A fost utilizată o adresă de e-mail temporară.',
            'bg' => 'Използван е временен имейл адрес.',
            'sk' => 'Bola použitá dočasná e-mailová adresa.',
            'cs' => 'Byla použita dočasná e-mailová adresa.',
            'hr' => 'Upotrijebljena je privremena adresa e-pošte.',
            'sr' => 'Upotrebljena je privremena adresa e-pošte.',
            'pl' => 'Użyto tymczasowego adresu e-mail.',
        ],
        self::MAILBOX_NON_EXISTENT => [
            'en' => 'Mailbox does not exist.',
            'hu' => 'E-mail fiók nem létezik.',
            'ro' => 'Căsuța de e-mail nu există.',
            'bg' => 'Имейл кутията не съществува.',
            'sk' => 'E-mailová schránka neexistuje.',
            'cs' => 'E-mailová schránka neexistuje.',
            'hr' => 'Pretinac e-pošte ne postoji.',
            'sr' => 'Poštansko sanduče ne postoji.',
            'pl' => 'Skrzynka pocztowa nie istnieje.',
        ],
        self::NOT_FOUND => [
            'en' => 'No Signals were found.',
            'hu' => 'Nem találtunk adatot.',
            'ro' => 'Nu au fost găsite semnale.',
            'bg' => 'Не са намерени сигнали.',
            'sk' => 'Nenašli sa žiadne signály.',
            'cs' => 'Nebyly nalezeny žádné signály.',
            'hr' => 'Nisu pronađeni signali.',
            'sr' => 'Nisu pronađeni signali.',
            'pl' => 'Nie znaleziono żadnych sygnałów.',
        ],
        self::THRESHOLD_NOT_MET => [
            'en' => 'Total rate did not meet the minimum threshold set.',
            'hu' => 'A vásárló reputációja nem érte el a beállított küszöbértéket.',
            'ro' => 'Scorul total nu a atins pragul minim setat.',
            'bg' => 'Общата оценка не достигна зададения минимален праг.',
            'sk' => 'Celkové hodnotenie nedosiahlo nastavenú minimálnu hranicu.',
            'cs' => 'Celkové hodnocení nedosáhlo nastavené minimální hranice.',
            'hr' => 'Ukupna ocjena nije dosegnula postavljeni minimalni prag.',
            'sr' => 'Ukupna ocena nije dostigla postavljeni minimalni prag.',
            'pl' => 'Łączna ocena nie osiągnęła ustawionego minimalnego progu.',
        ],
        self::OPTED_OUT => [
            'en' => 'User opted out of the processing of their personal data.',
            'hu' => 'Az érintett tiltakozott személyes adatainak kezelése ellen.',
            'ro' => 'Persoana vizată s-a opus prelucrării datelor cu caracter personal care o privesc.',
            'bg' => 'Субектът на данните възрази срещу обработването на лични данни, отнасящи се до него.',
            'sk' => 'Dotknutá osoba vzniesla námietku proti spracúvaniu osobných údajov, ktoré sa jej týkajú.',
            'cs' => 'Subjekt údajů vznesl námitku proti zpracování osobních údajů, které se ho týkají.',
            'hr' => 'Ispitanik je uložio prigovor na obradu osobnih podataka koji se odnose na njega.',
            'sr' => 'Lice na koje se podaci odnose podnelo je prigovor na obradu svojih podataka o ličnosti.',
            'pl' => 'Osoba, której dane dotyczą, wniosła sprzeciw wobec przetwarzania swoich danych osobowych.',
        ],
        self::PASSED => [
            'en' => 'Signals found, checks passed.',
            'hu' => 'Ellenőrzés sikeres, rendben.',
            'ro' => 'Au fost găsite semnale, iar verificările au fost finalizate cu succes.',
            'bg' => 'Намерени са сигнали, проверките приключиха успешно.',
            'sk' => 'Signály boli nájdené, kontroly prebehli úspešne.',
            'cs' => 'Signály byly nalezeny, kontroly proběhly úspěšně.',
            'hr' => 'Signali su pronađeni, provjere su uspješno završene.',
            'sr' => 'Signali su pronađeni, provere su uspešno završene.',
            'pl' => 'Znaleziono sygnały, kontrole zakończyły się pomyślnie.',
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
