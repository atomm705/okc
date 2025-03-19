<x-app-layout>
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{ asset('images/background-breadcrumbs-01-1920x345.jpg') }});"  data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
        <div class="container">
            <h2 class="breadcrumbs-custom-title">
                Online medical information</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">
                    Online medical information</li>
            </ul>
        </div>
    </section>

    <section class="section-lg bg-default section">
    <div class="container">
        <h3 class="text-center">@lang('messages.Online medical information in Docart')</h3>
        <div class="offset-top-41">
            <p class="custom-paragraph">@lang('messages.The Medical Center "Dokart" is constantly improving the level of comfort of its clients. Now we offer the opportunity to consult with any specialist online.')</p>

        </div>
    </div>
    </section>


</x-app-layout>
