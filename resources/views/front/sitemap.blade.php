<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
    <!--	created with www.mysitemapgenerator.com	-->
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://topadvisor.biz/</loc>
        <lastmod>2023-02-17T11:15:48+01:00</lastmod>
        <priority>1.0</priority>
    </url>
    @foreach($services as $service)
    <url>
        <loc>{{ url($service->slug) }}</loc>
        <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($service->updated_at)) }}</lastmod>
        <priority>0.8</priority>
    </url>
    @endforeach
    @foreach($subservices as $subservice)
        <url>
            <loc>{{ url($subservice->slug) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($subservice->updated_at)) }}</lastmod>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($projects as $project)
        <url>
            <loc>{{ url($project->slug) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($project->updated_at)) }}</lastmod>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($articles as $article)
        <url>
            <loc>{{ url($article->slug) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($article->updated_at)) }}</lastmod>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach($members as $member)
        <url>
            <loc>{{ url($member->id) }}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($member->updated_at)) }}</lastmod>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
