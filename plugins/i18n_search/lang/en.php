<?php
$i18n = array(
    'GO' => "Search"
  , 'HEADER' => "Search Results"
  , 'NOT_FOUND' => "No results found"
  , 'DATE_LOCALE' => "en_US.utf8,en_US,en"
  , 'DATE_FORMAT' => "%A, %B %e, %Y - %l:%M %p"
  , 'FIRST_TEXT' => "<<"
  , 'FIRST_TITLE' => "First page"
  , 'PREV_TEXT' => "<"
  , 'PREV_TITLE' => "Previous page"
  , 'NEXT_TEXT' => ">"
  , 'NEXT_TITLE' => "Next page"
  , 'LAST_TEXT' => ">>"
  , 'LAST_TITLE' => "Last page"
  , 'CONFIGURE' => "Configure I18N Search"
  , 'CONFIGURATION' => "I18N Search"
  , 'VIEW_USAGE' => "Usage"
  , 'VIEW_SETTINGS' => "Settings"
  , 'INDEX_SETTINGS' => "Indexing Settings"
  , 'INDEX_DESCRIPTION' => "These settings describe how important it is where a word is found, e.g. a content weight of 1 and a title weight of 5 means that finding a word once in the title is more important than finding it 4 times in the content."
  , 'CONTENT_WEIGHT' => "Relative content weight"
  , 'TITLE_WEIGHT' => "Relative title weight"
  , 'TAG_WEIGHT' => "Relative tag weight"
  , 'SEARCHFORM_SETTINGS' => "Search Form Settings"
  , 'SEARCHFORM_DESCRIPTION' => "Do you want to display a tag cloud in your search form? If you did not enter key words on your pages, switch it off."
  , 'SHOW_TAGS' => "Show tag cloud"
  , 'MIN_TAG_SIZE' => "Minimum tag size in percent of font size"
  , 'MAX_TAG_SIZE' => "Maximum tag size in percent of font size"
  , 'SEARCHRESULT_SETTINGS' => "Search Result Settings"
  , 'SEARCHRESULT_DESCRIPTION' => "These settings describe how you want to display the search results."
  , 'MAX' => "Maximum number of results to show on one page"
  , 'NUM_WORDS' => "Number of words in excerpts (0 = none, -1 = whole content)"
  , 'SHOW_LANGUAGE' => "Show language of result entry (useful only on multilanguage sites)"
  , 'SHOW_DATE' => "Show publish date of result entry"
  , 'SHOW_PAGING' => "Show a page navigation, if there are more results"
  , 'SAVE_CONFIGURATION' => "Save Search Configuration"
  , 'RESET_CONFIGURATION' => "Reset Search Configuration"
  , 'SAVE_FAILURE' => "Your changes to the search configuration could not be saved."
  , 'SAVE_SUCCESS' => "Your changes to the search configuration have been successfully saved."
  , 'RESET_FAILURE' => "The search configuration could not be reset."
  , 'RESET_SUCCESS' => "The search configuration has been successfully reset to the standard values."
  , 'UNDO_FAILURE' => "The search configuration could not be restored."
  , 'UNDO_SUCCESS' => "The search configuration has been successfully restored."
  , 'USAGE_IN_PAGE' => "To use the I18N Search plugin, create a page - let's say with URL search and title \"Search\" - and put the following lines on it:"
  , 'USAGE_IN_TEMPLATE' => "To put a search form on the sidebar or in the template (e.g. the header of the page), use the following code ('search' is the page to display the results):"
  , 'CUSTOMIZE_1' => "To customize the search use the"
  , 'CUSTOMIZE_2' => "page and/or add parameters to the search calls like"
  , 'CUSTOMIZE_3' => "where you can use the following parameters:"
  , 'PARAMETER_NAME' => "Name"
  , 'PARAMETER_DESCRIPTION' => "Description"
  , 'SLUG_DESCR' => "Slug/URL of the page that displays the results, e.g. search"
  , 'GO_DESCR' => "Search button text"
  , 'TAGS_DESCR' => "Tags (key words) to search for - instead of the submitted tags"
  , 'WORDS_DESCR' => "Words to search for - instead of the submitted words"
  , 'ORDER_DESCR' => "Order of results: <i>url</i> = by slug/URL ascending, <i>reverseurl</i> = by slug/URL descending, <i>date</i> = by publishing date descending, <i>created</i> = by creation date descending (if available), default is by score descending"
  , 'HEADER_DESCR' => "Header for search results"
  , 'NOT_FOUND_DESCR' => "Message that no results were found"
  , 'DATE_LOCALE_DESCR' => "Locale to display the dates or multiple locales separated by comma, e.g. \"de_DE.utf8,de_DE,de\""
  , 'DATE_FORMAT_DESCR' => "Date format, as specified for the PHP function strftime, e.g. \"%A, %d.%m.%Y - %H:%M\""
  , 'PAGING_DESCR' => "Paging, e.g."
  , 'LANGUAGE_FILE_COMMENT' => "The all uppercase parameters are normally read from the language files of the plugin. Thus it is recommended to create or modify a language file (in /plugins/i18n_search/lang/) instead of using these parameters."
  , 'LANG_DESCR' => "If given, only results in this language will be returned, otherwise results in all languages of the user and the default language will be returned. E.g. \"de\""
  , 'ADDTAGS_DESCR' => "Additional tags to be added to the search request"
  , 'ADDWORDS_DESCR' => "Additional words to be added to the search request"
  , 'COMPONENT_DESCR' => "A component which is called for each search result"
  , 'TRANSLITERATION' => "Transliteration"
  , 'TRANSLITERATION_DESCRIPTION' => "Here you can enter translations for characters to be used during searching. Each line contains one translation as <em>source character(s) \"=\" target character(s)</em>, e.g. <em>ö=o</em>."
  , 'TRANSLITERATION_SETTINGS' => "Transliteration Settings"
  , 'AJAX_DESCR' => "A value of 0 will switch off the AJAX functionality of the search form and tag cloud."
  , 'PLACEHOLDER_DESCR' => "Place holder for search input field"
  , 'LIVE_DESCR' => "A value of 1 will switch on live search, displaying search results while selecting tags or typing words. You must set it for both the search form and the search result"
  , 'IDPREFIX_DESCR' => "If you set this parameter, each search result will get an id with this prefix and a increasing number"
  , 'TAGCLASSPREFIX_DESCR' => "If you set this parameter, all tags will be added as CSS classes - prefixed with this value - to the search results. You can use this to style the results based on tags."
  , 'TAG_MODE' => "Which tags should be used?"
  , 'TAGS_LANG_OR_DEFLANG' => "Use tags of default language, if no language specific tags"
  , 'TAGS_ALWAYS_DEFLANG' => "Always use tags of default language"
  , 'TAGS_ALWAYS_LANG' => "Always use language specific tags"
  , 'MARK' => "Mark search terms on pages"
);