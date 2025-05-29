<x-app-layout>

    {{-- Хлебные крошки --}}
    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.blog')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.blog') }}">@lang('global.pages.blog')</a></li>
                <li>{{ $translation->name }}</li>
            </ul>
        </div>
    </section>

    <section class="section section-md bg-default">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="mb-3">{{ $translation->name }}</h3>
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ $translation->authorImage?->url ?? '/images/no-photo-2-sq.webp' }}" class="rounded-circle me-2" width="50" height="50" alt="{{ $translation->author_name }}">
                        <span class="text-muted">{{ $translation->author_name }}</span>
                    </div>

                    <div class="article-content mb-5">
                        {!! $translation->text !!}
                    </div>
                    @if ($translation->tags->count())
                        <div class="article-tags">
                            <strong>Теги:</strong>
                            @foreach ($article->translation->tags as $tag)
                                <a class="btn-tag btn btn-default" href="{{ route('blog.tag', $tag->slug) }}">
                                    {{ $tag->name ?? $tag->slug }}
                                </a>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
