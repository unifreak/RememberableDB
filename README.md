`RememberableDB` extends from <https://github.com/dwightwatson/rememberable>, added caching ability to `DB` (using facade `RDB`).

# Install

1. install composer package: run `composer require unifreak/rememberable-db'`
2. register service provider: open `config/app.php`, add the following line into `providers` config entry:

    `UniFreak\RememberableDB\RDBServiceProvider::class,`

3. register facade: open `config/app.php`, add the following line into `aliases` config entry:

    `'RDB' => UniFreak\RememberableDB\RDBFacade::class,`

4. done

# usage

see <https://github.com/dwightwatson/rememberable>
