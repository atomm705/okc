<x-app-layout>

    <section class="breadcrumbs-custom bg-image context-dark slider-page" style="background-image: url({{ asset('images/bg-6.webp') }});" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title" style="margin-top: 10px;">@lang('global.pages.doctors')</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{ route('main.index') }}">@lang('global.pages.index')</a></li>
                <li class="active"><a href="{{ route('main.team') }}">@lang('global.pages.doctors')</a></li>
            </ul>
        </div>
    </section>

    <div id="app" class="app">




        <section><!----> <!---->
            <div class="content"><!----> <!---->
                <div class="slot">
                    <div class="doctors-departments-section">
                        <div class="departments-list-compact">


                            <a href="#doctors-department-oftalmologiya" class="department">
                                <img src="/images/uploads/a81aacf1c072df3a3d25cc9e43366648.webp" alt="{{ $departments[3]->name }}">
                                <div class="title">{{ $departments[1]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-dermatologiya" class="department"><img
                                    src="/images/uploads/0772a0a3e31e885a1a62d1770640c5c5.webp" alt="{{ $departments[2]->name }}">
                                <div class="title">{{ $departments[2]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-ginekologiya" class="department"><img
                                    src="/images/uploads/cf3e4ed839f94a5835121d8f3755eeb3.webp" alt="{{ $departments[3]->name }}">
                                <div class="title">{{ $departments[3]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-urologiya" class="department"><img
                                    src="/images/uploads/eccc8b64a803d558105455e3dd31aaee.webp" alt="{{ $departments[4]->name }}">
                                <div class="title">{{ $departments[4]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-uzd" class="department"><img
                                    src="/images/uploads/ea1ddab313c5fc205d4f43e5661ee9e5.webp" alt="{{ $departments[5]->name }}">
                                <div class="title">{{ $departments[5]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-ambulatorna-khirurgiya" class="department"><img
                                    src="/images/uploads/a9f4066175c5e873988d3274ab429b72.webp" alt="{{ $departments[6]->name }}">
                                <div class="title">{{ $departments[6]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-gastroenterologiya" class="department"><img
                                    src="/images/uploads/f9004ee4641695108670b645e4d1ebf5.webp" alt="{{ $departments[7]->name }}">
                                <div class="title">{{ $departments[7]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-endoskopiya" class="department"><img
                                    src="/images/uploads/5272720732cc64ddff3b65bc2e5305bb.webp" alt="{{ $departments[8]->name }}">
                                <div class="title">{{ $departments[8]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-terapevt-ta-kardiologogiya" class="department"><img
                                    src="/images/uploads/138de924eb361730b39b0b3f3ec97f6b.webp" alt="{{ $departments[11]->name }}">
                                <div class="title">{{ $departments[11]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-estetichna-medicina" class="department"><img
                                    src="/images/uploads/01ded912bd94461f3d755fd8247d12d1.webp" alt="{{ $departments[12]->name }}">
                                <div class="title">{{ $departments[12]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-psikhiatriya" class="department"><img
                                    src="/images/uploads/a55a317b3f89c68fd7d8f3a16707ccaf.webp" alt="{{ $departments[14]->name }}">
                                <div class="title">{{ $departments[14]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-nevrologiya" class="department"><img
                                    src="/images/uploads/b86b321c592fc98d89cb8359173a7abb.webp" alt="{{ $departments[15]->name }}">
                                <div class="title">{{ $departments[15]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-alergologiya" class="department"><img
                                    src="/images/uploads/381e6bc0297b69535e7374bc3e1e4530.webp" alt="{{ $departments[16]->name }}">
                                <div class="title">{{ $departments[16]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                            <a href="#doctors-department-plastichna-khirurgiya" class="department"><img
                                    src="/images/uploads/b35765986013db02af5dab3f95da87c8.webp" alt="{{ $departments[17]->name }}">
                                <div class="title">{{ $departments[17]->name }}</div>
                                <div class="details">Подробнее</div>
                            </a>
                        </div>
                        <div class="content">
                            <div class="doctors-departments-section-department" id="doctors-department-oftalmologiya">
                                <div class="content"><h3>{{ $departments[1]->name }}</h3>
                                    <div class="doctors">


                                        @if(isset($doctors[1]))
                                            <a href="{{ route('main.doctor.profile', [ 'slug' => $doctors[1]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img src="/images/uploads/14b0c14a8626d74b72f14c61d5aadb67.webp">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[1]->full_name }}</div>
                                                    <div class="description">{{ $doctors[1]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[2]))
                                            <a href="{{ route('main.doctor.profile', [ 'slug' => $doctors[2]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/b684b2d711e837dd6076c2da8783abfb.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[2]->full_name }}</div>
                                                    <div class="description">{{ $doctors[2]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[45]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[45]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/ca56aa7a6510e9652a796cb4145b86c0.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[45]->full_name }}</div>
                                                    <div class="description">{{ $doctors[45]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[54]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[54]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/9f20c1e5bd989ffbf9a9782023107cf7.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[54]->full_name }}</div>
                                                    <div class="description">{{ $doctors[54]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[60]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[60]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/aed189cfd43cd48c846185d8cf932328.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[60]->full_name }}</div>
                                                    <div class="description">{{ $doctors[60]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif


                                        @if(isset($doctors[68]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[68]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/10ad4651cfa8f1c8893bd6e7bcd949fe.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[68]->full_name }}</div>
                                                    <div class="description">{{ $doctors[68]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[77]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[77]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/a6b343ed60e192916231b308e128c07a.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[77]->full_name }}</div>
                                                    <div class="description">{{ $doctors[77]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[79]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[79]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/8d288fbd9164917bf609f70f75f33632.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[79]->full_name }}</div>
                                                    <div class="description">{{ $doctors[79]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif


                                        @if(isset($doctors[80]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[80]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/9ef2d11b6fcf0151269b38c399c7aca0.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[80]->full_name }}</div>
                                                    <div class="description">{{ $doctors[80]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif


                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-dermatologiya">
                                <div class="content"><h3>{{ $departments[2]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[7]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[7]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/8999144f2e41edc2755289da0cd486df.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[7]->full_name }}</div>
                                                    <div class="description">{{ $doctors[7]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[8]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[8]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/5216282b222b7c378e5da4f4478add64.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[8]->full_name }}</div>
                                                    <div class="description">{{ $doctors[8]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[40]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[40]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/bdb74a0cb92d234ba235df8959853718.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[40]->full_name }}</div>
                                                    <div class="description">{{ $doctors[40]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[55]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[55]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/7b53422b426a87098d555351d40f3ed4.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[55]->full_name }}</div>
                                                    <div class="description">{{ $doctors[55]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif


                                        @if(isset($doctors[78]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[78]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/db3016fd32b3cf2719b3a887be3464f5.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[78]->full_name }}</div>
                                                    <div class="description">{{ $doctors[78]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-ginekologiya">
                                <div class="content"><h3>{{ $departments[3]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[10]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[10]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/6fab6bc3652ac68c1938a2758d43f3be.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[10]->full_name }}</div>
                                                    <div class="description">{{ $doctors[10]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[24]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[24]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/0a122c4a61657d4a5167c31855cf5e53.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[24]->full_name }}</div>
                                                    <div class="description">{{ $doctors[24]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[35]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[35]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/319106fb3e0721c0f26f6a0f12318d3d.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[35]->full_name }}</div>
                                                    <div class="description">{{ $doctors[35]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-urologiya">
                                <div class="content"><h3>{{ $departments[4]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[36]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[36]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/8bd1e9aeb986ec1b1eb621bef162bd73.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[36]->full_name }}</div>
                                                    <div class="description">{{ $doctors[36]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[56]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[56]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/36d6f4da068bc34664ccc329eef175e9.png">
                                                <div class="content" style="height: 160px;">
                                                    <div class="name">{{ $doctors[56]->full_name }}</div>
                                                    <div class="description">{{ $doctors[56]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-uzd">
                                <div class="content"><h3>{{ $departments[5]->name }}</h3>
                                    <div class="doctors">


                                        @if(isset($doctors[14]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[14]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/05b0fd8adda3024e398481f9a09985fd.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[14]->full_name }}</div>
                                                    <div class="description">{{ $doctors[14]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif


                                        @if(isset($doctors[24]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[24]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/0a122c4a61657d4a5167c31855cf5e53.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[24]->full_name }}</div>
                                                    <div class="description">{{ $doctors[24]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                        @if(isset($doctors[63]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[63]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/4fac231378bc4ba9371a930a1aac93c7.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[63]->full_name }}</div>
                                                    <div class="description">{{ $doctors[63]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department"
                                 id="doctors-department-ambulatorna-khirurgiya">
                                <div class="content"><h3>{{ $departments[6]->name }}</h3>
                                    <div class="doctors">

                                        @if(isset($doctors[37]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[37]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/a0a69b62a4694ea19e02dd868254790c.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[37]->full_name }}</div>
                                                    <div class="description">{{ $doctors[37]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[62]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[62]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/84cdc3fcd1a86a677a1f51cb6fce009e.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[62]->full_name }}</div>
                                                    <div class="description">{{ $doctors[62]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif


                                        @if(isset($doctors[67]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[67]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/c34310ab88e0e138c217d149e72de1e0.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[67]->full_name }}</div>
                                                    <div class="description">{{ $doctors[67]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-gastroenterologiya">
                                <div class="content"><h3>{{ $departments[7]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[42]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[42]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/f65c4889234397dba9dc65c053407494.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[42]->full_name }}</div>
                                                    <div class="description">{{ $doctors[42]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-endoskopiya">
                                <div class="content"><h3>{{ $departments[8]->name }}</h3>
                                    <div class="doctors"></div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department"
                                 id="doctors-department-terapevt-ta-kardiologogiya">
                                <div class="content"><h3>{{ $departments[11]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[26]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[26]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/ca2138908885038b86da31322b39ad3c.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[26]->full_name }}</div>
                                                    <div class="description">{{ $doctors[26]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-estetichna-medicina">
                                <div class="content"><h3>{{ $departments[12]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[7]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[7]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/8999144f2e41edc2755289da0cd486df.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[7]->full_name }}</div>
                                                    <div class="description">{{ $doctors[7]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[8]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[8]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/5216282b222b7c378e5da4f4478add64.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[8]->full_name }}</div>
                                                    <div class="description">{{ $doctors[8]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif


                                        @if(isset($doctors[31]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[31]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/e59b9025f8cc184910c04c0f0f07720b.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[31]->full_name }}</div>
                                                    <div class="description">{{ $doctors[31]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[39]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[39]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/bdb74a0cb92d234ba235df8959853718.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[39]->full_name }}</div>
                                                    <div class="description">{{ $doctors[39]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[55]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[55]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/7b53422b426a87098d555351d40f3ed4.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[55]->full_name }}</div>
                                                    <div class="description">{{ $doctors[55]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[78]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[78]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/db3016fd32b3cf2719b3a887be3464f5.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[78]->full_name }}</div>
                                                    <div class="description">{{ $doctors[78]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-psikhiatriya">
                                <div class="content"><h3>{{ $departments[14]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[48]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[48]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/4b7015410351f7d8f7c2dad7afb286b4.jpg">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[48]->full_name }}</div>
                                                    <div class="description">{{ $doctors[48]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-nevrologiya">
                                <div class="content"><h3>{{ $departments[15]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[58]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[58]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/74156baa44e30e020fb3c493d4ef351e.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[58]->full_name }}</div>
                                                    <div class="description">{{ $doctors[58]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department" id="doctors-department-alergologiya">
                                <div class="content"><h3>{{ $departments[16]->name }}</h3>
                                    <div class="doctors">
                                        @if(isset($doctors[59]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[59]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/37ae20163e45586eb711ab9028fe4f30.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[59]->full_name }}</div>
                                                    <div class="description">{{ $doctors[59]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="doctors-departments-section-department"
                                 id="doctors-department-plastichna-khirurgiya">
                                <div class="content"><h3>{{ $departments[17]->name }}</h3>
                                    <div class="doctors">

                                        @if(isset($doctors[31]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[31]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/e59b9025f8cc184910c04c0f0f07720b.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[31]->full_name }}</div>
                                                    <div class="description">{{ $doctors[31]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif

                                        @if(isset($doctors[62]))
                                            <a href="{{ route('main.doctor.profile', ['slug' => $doctors[62]->full_slug]) }}" class="doctor-tile-compact-component">
                                                <img
                                                    src="/images/uploads/84cdc3fcd1a86a677a1f51cb6fce009e.png">
                                                <div class="content" style="height: 193px;">
                                                    <div class="name">{{ $doctors[62]->full_name }}</div>
                                                    <div class="description">{{ $doctors[62 ]->position_main }}</div>
                                                    <div class="more">Подробнее</div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</x-app-layout>
