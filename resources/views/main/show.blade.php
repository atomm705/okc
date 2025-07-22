<x-app-layout>

    {{-- Хлебные крошки --}}
    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">@lang('global.pages.blog')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.blog') }}">@lang('global.pages.blog')</a></li>
                <li  class="white">{{ $translation->name }}</li>
            </ul>
        </div>
    </section>

    <section class="section-98">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-10 col-xl-8">

                    <div class="col-lg-10">
                        <h5 class="mb-3 text-primary ">{{ $translation->name }}</h5>

                        <div class="blog-show-item mb-3">
                            <div class="d-flex align-items-center">
                                <img  src="{{ $translation->authorImage?->url ?? '/images/no-photo-2-sq.webp' }}" class="rounded-circle me-2" width="50" height="50" alt="{{ $translation->author_name }}">
                                <span class="text-muted">{{ $translation->author_name }}</span>
                            </div>

                            <div class="categories-block">
                                <div class="divider divider-vertical2 d-inline-block"></div>
                                @foreach ($article->categories as $category)
                                    <a href="{{ route('blog.category', $category->translation->slug) }}" class="text-primary">{{ $category->translation->name }}</a>
                                @endforeach
                            </div>
                        </div>

                        <div class="article-content mb-5 content-post about-post">
                            {!! $translation->text !!}
                        </div>
                        @if ($translation->tags->count())
                            <div class="article-tags article-tags-position">
                                <strong>Теги:</strong>
                                @foreach ($article->translation->tags as $tag)
                                    <a class="btn-tag btn btn-default" href="{{ route('blog.tag', $tag->slug) }}">
                                        {{ $tag->name ?? $tag->slug }}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="offset-top-66">
                        <h6>@lang('frontend/blog.article.posted_by.title')</h6>
                        <hr class="text-subline">
                    </div>
                    <div class="offset-top-30">
                        <div class="unit unit-xs flex-sm-row">
                            <div class="unit-left"><img class="rounded-circle img-responsive center-block" src="/images/no-photo-2-sq.webp"  alt="" style="width: 170px; height: 170px;"></div>
                            <div class="unit-body text-sm-start">
                                <div>
                                    <h5><a href="team-member.html">@lang('frontend/blog.article.posted_by.default.title')</a></h5>
                                </div>
                                <div class="offset-top-4 offset-sm-top-8">
                                    <div class="text-gray font-italic">@lang('frontend/blog.article.posted_by.default.position')</div>
                                </div>
                                <div class="offset-top-20 text-start">
                                    <p>@lang('frontend/blog.article.posted_by.default.description')</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="offset-top-66">
                        <h6>@lang('frontend/blog.latest.title')</h6>
                        <hr class="text-subline">
                    </div>
                    <div class="row offset-top-30">
                        @foreach ($recentArticles as $recent)
                            @php
                                $t = $recent->translation;
                                $date = \Carbon\Carbon::parse($recent->created_at);
                            @endphp
                            <div class="col-md-6">
                                <article class="post post-modern post-modern-classic">
                                    <div class="post-media">
                                        <a class="link-image" href="{{ route('main.show', $t->slug) }}">
                                            <img class="img-responsive img-cover" width="370" height="240"
                                                 src="{{ $t->image?->src ?? asset('images/no-photo-2-sq.webp') }}"
                                                 alt="{{ $t->name }}">
                                        </a>
                                    </div>
                                    <div class="post-content text-start">
                                        <div class="post-title offset-top-8">
                                            <h5 class="font-weight-bold">
                                                <a href="{{ route('main.show', $t->slug) }}">{{ $t->name }}</a>
                                            </h5>
                                        </div>
                                        <ul class="list-inline list-inline-dashed">
                                            <li>{{ $date->translatedFormat('F d, Y') }}</li>
                                            @if ($recent->categories->isNotEmpty())
                                                <li>
                                                    <a class="text-primary" href="{{ route('blog.category', $recent->categories[0]->translation->slug) }}">
                                                        {{ $recent->categories[0]->translation->name }}
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                        <div class="post-body">
                                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($t->text), 100) }}</p>
                                        </div>
                                        @if ($t->tags->count())
                                            <div class="tags group group-sm" style="margin-bottom: 10px;">
                                                @foreach ($t->tags as $tag)
                                                    <a class="btn-tag btn btn-default" href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name ?? $tag->slug }}</a>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-md-10 col-lg-8 col-xl-4 offset-top-66 offset-md-top-90 offset-lg-top-0">
                    <div class="blog-grid-sidebar inset-xxl-left-30">
                        <aside class="text-start">
                            <div>
                                <h6>@lang('frontend/blog.search.title')</h6>
                                <hr class="text-subline">
                                <div class="offset-top-14 offset-md-top-20 rd-search-blog">
                                    <form id="searchForm" class="form-search rd-search" onsubmit="return goToSearch(event)">
                                        <div class="form-wrap">
                                            <label class="form-label form-search-label" for="blog-classic-form-search-widget">Search</label>
                                            <input class="form-search-input form-input" id="blog-classic-form-search-widget" type="text" name="s" autocomplete="off">
                                        </div>
                                        <button class="form-search-submit" type="submit">
                                            <span class="fa fa-search text-primary"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="offset-top-30 offset-md-top-60">
                                <h6>@lang('frontend/blog.archive.title')</h6>
                                <hr class="text-subline">
                            </div>
                            <div class="offset-top-14 offset-md-top-20">
                                <div class="row justify-content-sm-center justify-content-xl-start">
                                    @foreach ($archives as $archive)
                                        <div class="col-sm-6 col-xl-5">
                                            <ul class="list list-marked inset-left-0 list-marked-icon text-dark list-marked-gray">
                                                <li>
                                                    <a href="{{ route('main.blog.archive', ['date' => $archive->year_month]) }}">
                                                        {{ $archive->month_name }} ({{ $archive->posts_count }})
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="offset-top-30 offset-md-top-60">
                                <h6>@lang('frontend/blog.latest.title')</h6>
                                <hr class="text-subline">
                            </div>
                            <div class="offset-top-14 offset-md-top-20">
                                <!-- List Marked-->
                                <ul class="list list-marked list-marked-icon text-dark inset-left-0 list-marked-gray">
                                    @foreach ($recentArticles as $recent)
                                        @php
                                            $translation = $recent->translation;
                                            $date = \Carbon\Carbon::parse($recent->created_at);
                                        @endphp
                                        <li>
                                            <a class="font-weight-bold" href="{{ route('main.show', $translation->slug) }}">
                                                {{ $translation->name }}
                                            </a><br>
                                            <time class="text-gray-dark" datetime="{{ $date->toDateString() }}">
                                                <!-- якщо потрібен ще часа то до  публикациї поста то додати \\a\\t H:i -->
                                                {{ $date->translatedFormat('F d, Y ') }}
                                            </time>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
