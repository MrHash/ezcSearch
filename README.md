##Composer Installation
Add the following snippet to your `composer.json` configuration.

```text
{
  "repositories": [
    "type": "vcs",
    "url": "http://github.com/MrHash/ezcSearch"
  ],
  "require": {
    "mrhash/ezc-search": "dev-master"
  }
}
```

## Solr Installation
Install and configure Solr as required for your system. This package has been tested to work adequately with Solr 4 although it may not be a 100% functional library since the original library development ended in 2009.

It is recommended that you set the `autoSoftCommit` and `autoCommit` options appropriately in your core `solrconfig.xml` so that Solr can manage document visibility and flushing to disk.
