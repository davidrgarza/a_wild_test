<?
//This is a template for a PHP scraper on Morph (https://morph.io)
//including some code snippets below that you should find helpful

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

// Read in a page
$homeURL = "http://www.rabistro.com/menu/ra-bistro-menu/";

// Find something on the page using css selectors
$dom = new simple_html_dom();
$html = getHTML($homeURL);
$dom->load($html);

foreach($dom->find('div.menu_category') AS $menu){
  $title = $menu->find('h2')->innertext;
  $menuItems = [];
  foreach($menu->children() AS $item){
    $menuItems[] = 
  }
}
function getHTML($url) {
    return scraperwiki::scrape($url);
}

// Write out to the sqlite database using scraperwiki library
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));

// An arbitrary query against the database
scraperwiki::select("* from data where 'name'='peter'")

You don't have to do things with the ScraperWiki library. You can use whatever is installed
on Morph for PHP (See https://github.com/openaustralia/morph-docker-php) and all that matters
is that your final data is written to an Sqlite database called data.sqlite in the current working directory which
has at least a table called data.
?>
