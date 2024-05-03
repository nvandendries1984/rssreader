<?php namespace NielsVanDenDries\Rssreader\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Rssreader\Models\RssSources;

class RSSviewer extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'RSS Viewer',
            'description' => 'Displays an RSS feed'
        ];
    }

    public function defineProperties()
    {
        return [
            'source_id' => [
                'title'       => 'RSS Source ID',
                'description' => 'The ID of the RSS source to display',
                'default'     => 0,
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $source_id = $this->property('source_id');
        $rss_source = RssSources::find($source_id);
    
        if (!$rss_source) {
            return;
        }
    
        if ($rss_source->is_enabled == 0) {
            return;
        }
    
        $max_items = $rss_source->max_items;
        $feed = simplexml_load_file($rss_source->source_url);
        $items = [];
    
        foreach ($feed->channel->item as $item) {
            $items[] = [
                'title' => (string) $item->title,
                'link' => (string) $item->link,
                'description' => (string) $item->description
            ];
    
            if (count($items) >= $max_items) {
                break;
            }
        }
    
        $this->page['rss_source'] = [
            'title' => (string) $feed->channel->title,
            'items' => $items
        ];
    }
}