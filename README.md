This is a MediaWiki extension that simply adds an `atitd` extension type to clearly show ATITD-specific extensions on the `Special:Version` page.

Installation
============

  * Download and place the files in a directory called `ATITDExtensions` in your `extensions/` folder.
  * Add the following code at the bottom of your LocalSettings.php:

```php
wfLoadExtension( 'ATITDExtensions' );
```

  * **Done** — Navigate to `Special:Version` on your wiki to verify that the extension is successfully installed.