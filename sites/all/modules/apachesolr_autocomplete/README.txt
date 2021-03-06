
Apache Solr Autocomplete module for Drupal.

-- SUMMARY --

Add-on module to Apache Solr Search Integration that adds simple autocomplete
functionality. It enforces node access, meaning that all suggestions are only
from nodes that the user actually has access to.

For a full description of the module, visit the project page:
  http://drupal.org/project/apachesolr_autocomplete

To submit bug reports and feature suggestions, or to track changes:
  http://drupal.org/project/issues/apachesolr_autocomplete


-- REQUIREMENTS --

Apache Solr Search Integration module.
See http://drupal.org/project/apachesolr


-- INSTALLATION --

* Install as usual.
  Read http://drupal.org/documentation/install/modules-themes/modules-7
  to learn how to install contributed Drupal modules.


-- CONFIGURATION  --

In your Drupal website, browse to the settings page of the Apache Solr module
at /admin/config/search/apachesolr/settings:

  Configuration >> Search and metadata >> Apache Solr search
  Tab: Settings 

In the section "Advanced configuration" choose which autocomplete widget to use.

You can choose between a custom JavaScript widget (included with the
module) or fall back to the core Drupal autocomplete widget. The default is to
use the custom widget.

-- TROUBLESHOOTING --

If you are having trouble with the autocomplete suggestions not working 
correctly, try changing the configuration to use the core Drupal autocomplete
widget.

If you encounter other problems, please post to the project issue queue:
  http://drupal.org/project/issues/apachesolr_autocomplete

--
