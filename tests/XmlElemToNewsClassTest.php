<?php

use PawelSzy\XML\Xml_to_news;

class XmlElemToNewsTest extends \PHPUnit_Framework_TestCase
{
    public function test_is_news_created()
    {
        $xml = new SimpleXMLElement($this->get_xml());
        $news = Xml_to_news::convert_xml($xml);

        $this->assertInstanceOf('News', $news[0]);
    }


    function get_xml()
    {
        return '<?xml version="1.0" encoding="UTF-8"?>
<?xml-stylesheet type="text/xsl" media="screen" href="/~d/styles/rss2full.xsl"?><?xml-stylesheet type="text/css" media="screen" href="http://feeds.nationalgeographic.com/~d/styles/itemcontent.css"?><rss xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:feedburner="http://rssnamespace.org/feedburner/ext/1.0" version="2.0">
  <channel>
    <title>National Geographic News</title>
    <link>http://news.nationalgeographic.com</link>
    <description>Reporting our world daily: original nature and science news from National Geographic.</description>
    <language>en-us</language>
    <lastBuildDate>Mon, 18 Sep 2017 21:33:59 GMT</lastBuildDate>
    <image>
      <title>National Geographic News</title>
      <url>http://images.nationalgeographic.com/wpf/sites/common/i/presentation/ng_logo_250x40.png</url>
      <link>http://news.nationalgeographic.com</link>
    </image>
    <atom10:link xmlns:atom10="http://www.w3.org/2005/Atom" rel="self" type="application/rss+xml" href="http://feeds.nationalgeographic.com/ng/News/News_Main" /><feedburner:info uri="ng/news/news_main" /><atom10:link xmlns:atom10="http://www.w3.org/2005/Atom" rel="hub" href="http://pubsubhubbub.appspot.com/" /><item>
      <title>Ancient Maya King Found in \'Centipede Dynasty\' Tomb</title>
      <link>http://feeds.nationalgeographic.com/~r/ng/News/News_Main/~3/UcW2Wf6VPPM/</link>
      <description>&lt;img src="http://feeds.feedburner.com/~r/ng/News/News_Main/~4/UcW2Wf6VPPM" height="1" width="1" alt=""/&gt;</description>
      <pubDate>Mon, 18 Sep 2017 21:33:59 GMT</pubDate>
      <guid isPermaLink="false">3a40be9f-0926-4a57-b857-deec80305ebb</guid>
      <dc:creator>Sarah Gibbens</dc:creator>
    <feedburner:origLink>http://news.nationalgeographic.com/2017/09/ancient-maya-king-tomb-spd/</feedburner:origLink></item>
        <item>
      <title>Why Some Young Europeans Are Joining ISIS</title>
      <link>http://feeds.nationalgeographic.com/~r/ng/News/News_Main/~3/5yeHKWH7m2U/</link>
      <description>&lt;img src="http://feeds.feedburner.com/~r/ng/News/News_Main/~4/5yeHKWH7m2U" height="1" width="1" alt=""/&gt;</description>
      <pubDate>Mon, 18 Sep 2017 20:51:19 GMT</pubDate>
      <guid isPermaLink="false">750d912a-a57f-42ae-a838-c858e68c437b</guid>
      <dc:creator>Austa Somvichian-Clausen</dc:creator>
    <feedburner:origLink>http://news.nationalgeographic.com/2017/09/young-europeans-islamic-state/</feedburner:origLink></item>
      </channel>
</rss>';
    }
}
