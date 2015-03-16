<?
require 'scraperwiki.php';

// Write out to the sqlite database using scraperwiki library
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));

?>
