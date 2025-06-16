@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Лікарі / Редагування</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">


                         <form action="{{ route('admin.doctor.update', ['id' => $doctor->doctor_id]) }}" method="POST" enctype="multipart/form-data">
                             @csrf


                             <div class="nav-align-top nav-tabs-shadow mb-5">
                                 <ul class="nav nav-tabs" role="tablist">
                                     <li class="nav-item" role="presentation">
                                         <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-info" aria-controls="navs-top-info" aria-selected="true">Загальна інформація</button>
                                     </li>
                                     @foreach(config('app.fallback_locale') as $lang)
                                         <li class="nav-item" role="presentation">
                                             <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-{{ $lang }}" aria-controls="navs-top-{{ $lang }}" aria-selected="false">{{ strtoupper($lang) }}</button>
                                         </li>
                                     @endforeach
                                 </ul>

                                 <div class="tab-content">

                                     <div class="tab-pane fade show active" id="navs-top-info" role="tabpanel">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <h3>Зображення</h3>
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="photo_full" class="form-label">Зображення 384x410</label>
                                                 @if($doctor->imageFull)
                                                     <img src="{{ asset('storage/' . $doctor->imageFull->path) }}" alt="photo_full" style="max-width: 100px;">
                                                 @endif
                                                 <input type="file" class="form-control" name="photo_full">
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="photo_square" class="form-label">Зображення 520x520</label>
                                                 @if($doctor->imageSquare)
                                                     <img src="{{ asset('storage/' . $doctor->imageSquare->path) }}" alt="photo_square" style="max-width: 100px;">
                                                 @endif
                                                 <input type="file" class="form-control" name="photo_square">
                                             </div>
                                             <div class="col-md-12">
                                                 <label for="sertificates" class="form-label">Сертифікати</label>
                                                 @if($doctor->getCertificates()->count())
                                                     <div class="mb-2 d-flex flex-wrap gap-2">
                                                         @foreach($doctor->getCertificates() as $certificate)
                                                             <img src="{{ asset('storage/' . $certificate->path) }}" alt="certificate" style="max-height: 80px;">
                                                         @endforeach
                                                     </div>
                                                 @endif
                                                 <input type="file" class="form-control" name="sertificates[]" multiple>
                                             </div>
                                         </div>
                                     </div>


                                     @foreach(config('app.fallback_locale') as $lang)
                                         @php $trans = $doctor->translations->firstWhere('locale', $lang); @endphp
                                         <div class="tab-pane fade" id="navs-top-{{ $lang }}" role="tabpanel">
                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <label class="form-label">Прізвище {{ $lang }}</label>
                                                     <input type="text" class="form-control"  name="second_name[{{ $lang }}] " value="{{ $trans?->second_name }}" @if($lang == 'uk') required @endif>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Ім'я {{ $lang }}</label>
                                                     <input type="text" class="form-control" name="first_name[{{ $lang }}]" value="{{ $trans?->first_name }}" @if($lang == 'uk') required @endif>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">По-батькові {{ $lang }}</label>
                                                     <input type="text" class="form-control" name="middle_name[{{ $lang }}]" value="{{ $trans?->middle_name }}" @if($lang == 'uk') required @endif>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <label class="form-label">Повне ПІБ {{ $lang }}</label>
                                                     <input type="text" class="form-control" name="full_name[{{ $lang }}]" value="{{ $trans?->full_name }}" readonly @if($lang == 'uk') required @endif>
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label class="form-label">Скорочене ПІБ {{ $lang }}</label>
                                                     <input type="text" class="form-control" name="short_name[{{ $lang }}]" value="{{ $trans?->short_name }}" @if($lang == 'uk') required @endif>
                                                 </div>

                                                 <hr style="margin-top: 20px;">
                                                 <div class="col-md-12">
                                                     <h3>Контакти</h3>
                                                     <label class="form-label">Email {{ $lang }}</label>
                                                     <input type="text" class="form-control" name="email[{{ $lang }}]" value="{{ $trans?->email }}">
                                                 </div>
                                                 <hr style="margin-top: 20px;">
                                                 <div class="col-md-12">
                                                     <h3>Посада</h3>
                                                     <label class="form-label">Головна посада {{ $lang }}</label>
                                                     <input type="text" class="form-control" name="position_main[{{ $lang }}]" value="{{ is_array($trans?->position_main) ? implode('', $trans->position_main) : $trans?->position_main }}">
                                                     <label class="form-label mt-2">Всі посади {{ $lang }}</label>
                                                     <input type="text" class="form-control" name="position_all[{{ $lang }}]" value="{{ is_array($trans?->position_all) ? implode('', $trans->position_all) : $trans?->position_all }}">
                                                 </div>
                                                 <hr style="margin-top: 20px;">
                                                 <div class="col-md-12">
                                                     <h3>Дані про лікаря</h3>
                                                     @foreach(['educations', 'courses', 'awards', 'associations', 'treatment_of_disease', 'procedures', 'specialisation'] as $field)
                                                         <label class="form-label mt-2">{{ ucfirst(str_replace('_', ' ', $field)) }} {{ $lang }} (кожний пункт з нового рядка)</label>

                                                         <textarea class="form-control" name="{{ $field }}[{{ $lang }}]" rows="5">{{ is_array($trans?->{$field}) ? implode("\n", $trans->{$field}) : '' }}</textarea>
                                                     @endforeach
                                                 </div>
                                                 <hr style="margin-top: 20px;">
                                                 <div class="row">
                                                     <div class="col-md-12">
                                                         <label for="about_{{ $lang }}" class="form-label">Про лікаря ({{ $lang }})<span style="font-weight: normal; font-size: 11px; text-transform: none">(кожний пункт з нового рядка)</span></label>
                                                         <textarea class="form-control" id="about[{{ $lang }}]" aria-describedby="defaultFormControlHelp" name="about[{{ $lang }}]" rows="15">{{ old("about_$lang", $trans?->about) }}</textarea>
                                                     </div>
                                                 </div>
                                                 <hr style="margin-top: 20px;">
                                                 @php
                                                     $seo = $trans?->page_seo ?? [];
                                                 @endphp

                                                 <div class="col-md-12">
                                                     <h3>SEO</h3>
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="seo_title_{{ $lang }}" class="form-label">SEO Title</label>
                                                     <input type="text" class="form-control" name="page_seo[{{ $lang }}][title]" value="{{ $seo['title'] ?? '' }}">
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="seo_description_{{ $lang }}" class="form-label">SEO Description</label>
                                                     <input type="text" class="form-control" name="page_seo[{{ $lang }}][description]" value="{{ $seo['description'] ?? '' }}">
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="seo_keywords_{{ $lang }}" class="form-label">SEO Keywords</label>
                                                     <input type="text" class="form-control" name="page_seo[{{ $lang }}][keywords]" value="{{ $seo['keywords'] ?? '' }}">
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="og_title_{{ $lang }}" class="form-label">OG Title</label>
                                                     <input type="text" class="form-control" name="page_seo[{{ $lang }}][openGraph][title]" value="{{ $seo['openGraph']['title'] ?? '' }}">
                                                 </div>

                                                 <div class="col-md-12">
                                                     <label for="og_description_{{ $lang }}" class="form-label">OG Description</label>
                                                     <input type="text" class="form-control" name="page_seo[{{ $lang }}][openGraph][description]" value="{{ $seo['openGraph']['description'] ?? '' }}">
                                                 </div>

                                             </div>
                                         </div>
                                     @endforeach

                                 </div>
                             </div>

                             <div class="text-end">
                                 <button type="submit" class="btn btn-primary">Зберегти</button>
                                 <a href="{{ route('admin.doctors') }}" class="btn btn-secondary">Скасувати</a>
                             </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        @foreach(config('app.fallback_locale') as $lang)
        CKEDITOR.replace('about[{{ $lang }}]');
        @endforeach
    </script>
@endsection
