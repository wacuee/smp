<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berita Sekolah</title>
</head>
<body>
    <h1>Berita Sekolah</h1>

    @forelse ($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <small>{{ $post->category->name }} | {{ $post->published_at->format('d M Y') }}</small>
            <p>{{ $post->excerpt }}</p>
        </article>
    @empty
        <p>Belum ada berita.</p>
    @endforelse
</body>
</html>