<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">
               <!--  $categoryTranslation->name ?? __('global.pages.blog') розкоментувати та обвернути в фігурні душки якщо треба щоб був здоровий заголовок категорії-->
                   @lang('global.pages.blog')
            </h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li><a href="{{ route('main.blog') }}">@lang('global.pages.blog')</a></li>
                @isset($categoryTranslation)
                    <li><a href="{{ route('blog.category', $categoryTranslation->slug) }}">{{ $categoryTranslation->name }}</a></li>
                @endisset

                @isset($tag)
                    <li><a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a></li>
                @endisset

                @isset($archiveName)
                    <li><a href="{{ route('main.blog.archive', ['date' => $date]) }}">{{ $archiveName }}</a></li>
                @endisset
            </ul>
        </div>
    </section>


    <section class="section-98 section-sm-110">

        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-10 col-xl-8">

                        @foreach ($articles as $article)
                        @php
                            $translation = $article->translation;
                            $image = $translation->image?->url ?? '/images/default.webp';
                            $authorImage = $translation->authorImage?->url ?? '/images/no-photo-2-sq.webp';
                        @endphp

                        <article class="post post-modern post-modern-timeline post-modern-timeline-left">
                            <div class="post-media">
                                <a href="{{ route('main.show', $translation->slug) }}">
                                    <img src="{{ url($translation->image->src ?? '/assets/images/default.jpg') }}"
                                         width="570" height="400"
                                         alt="{{ $translation->name }}">
                                </a>
                            </div>

                            <section class="post-content text-start">
                                <div class="post-title offset-top-8">
                                    <h5><a href="{{ route('main.show', $translation->slug) }}">{{ $translation->name }}</a></h5>
                                </div>

                                <div class="offset-top-4">
                                    <div class="divider divider-vertical d-inline-block"></div>
                                    @foreach ($article->categories as $category)
                                        <a href="{{ route('blog.category', $category->translation->slug) }}" class="text-primary">{{ $category->translation->name }}</a>
                                    @endforeach
                                </div>

                                <div class="post-body offset-top-14">
                                    <p>{{ Str::limit(strip_tags($translation->text), 150) }}</p>
                                </div>

                                <div class="post-author">
                                    <div class="post-author-img">
                                        <img class="rounded-circle" width="90" height="90" src="{{ $authorImage }}" alt="{{ $translation->author_name }}">
                                    </div>
                                    <div class="post-author-name">{{ $translation->author_name }}</div>
                                </div>
                                <div class="post-modern-classic-meta tags group group-sm offset-top-20">
                                    @foreach ($article->tags as $tag)
                                        @if ($tag && isset($tag->slug))
                                            <a class="btn-tag btn btn-default" href="{{ route('blog.tag', $tag->slug) }}">
                                                {{ $tag->name ?? $tag->slug }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>

                            </section>
                        </article>
                         @endforeach

                            @if ($articles->hasPages())
                                <div class="row offset-top-50 offset-lg-top-0">
                                    <div class="col-xl-10 offset-xl-2 text-xl-start">
                                        <div class="inset-xl-left-10">
                                            <nav>
                                                <ul class="pagination-classic">

                                                    @if ($articles->onFirstPage())
                                                        <li class="disabled"><span class="btn btn-darkest">&laquo;</span></li>
                                                    @else
                                                        <li>
                                                            <a class="btn btn-darkest" href="{{ route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['page' => $articles->currentPage() - 1])) }}" rel="prev">&laquo;</a>
                                                        </li>
                                                    @endif


                                                    @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                                                        @if ($page == $articles->currentPage())
                                                            <li class="active"><span class="btn btn-darkest">{{ $page }}</span></li>
                                                        @else
                                                            <li>
                                                                <a class="btn btn-darkest" href="{{ route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['page' => $page])) }}">{{ $page }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach


                                                    @if ($articles->hasMorePages())
                                                        <li>
                                                            <a class="btn btn-darkest" href="{{ route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['page' => $articles->currentPage() + 1])) }}" rel="next">&raquo;</a>
                                                        </li>
                                                    @else
                                                        <li class="disabled"><span class="btn btn-darkest">&raquo;</span></li>
                                                    @endif
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            @endif


                </div>
                <div class="col-md-10 col-lg-8 col-xl-4 offset-top-66 offset-md-top-90 offset-lg-top-0">
                    <div class="blog-grid-sidebar inset-xxl-left-30">
                        <aside class="text-start">
                            <div>
                                <h6>Search in Blog</h6>
                                <hr class="text-subline">
                                <div class="offset-top-14 offset-md-top-20 rd-search-blog">
                                    <form class="form-search rd-search" action="search-results.html" method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label form-search-label" for="blog-classic-form-search-widget">Search</label>
                                            <input class="form-search-input form-input #{inputClass}" id="blog-classic-form-search-widget" type="text" name="s" autocomplete="off">
                                        </div>
                                        <button class="form-search-submit" type="submit"><span class="fa fa-search text-primary"></span></button>
                                    </form>
                                </div>
                            </div>
                            <div class="offset-top-30 offset-md-top-60">
                                <h6>Archive</h6>
                                <hr class="text-subline">
                            </div>
                            <div class="offset-top-14 offset-md-top-20">
                                <div class="row justify-content-sm-center justify-content-xl-start">
                                    <div class="col-sm-6 col-xl-5">
                                        <ul class="list list-marked inset-left-0 list-marked-icon text-dark list-marked-gray">
                                            @foreach ($archives as $archive)
                                                <li>
                                                    <a href="{{ route('main.blog.archive', ['date' => $archive->year_month]) }}">
                                                        {{ $archive->month_name }} ({{ $archive->posts_count }})
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="offset-top-30 offset-md-top-60">
                                <h6>Recent Posts</h6>
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
