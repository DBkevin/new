<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
    <url>
        <loc>{{config('app.url')}}/{{ $post->slug }}</loc>
        <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    @foreach ($post->news as $new)
    <url>
        <loc>{{config('app.url')}}/{{ $post->slug }}/{{$new->id}}</loc>
        <lastmod>{{ $new->updated_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>
    @endforeach
    @endforeach
</urlset>