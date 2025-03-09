<section id="clients" class="clients section-bg">
    <div class="container">

        <div class="row" data-aos="zoom-in">
            @foreach(\App\Models\Sponsor::all()->sortBy("name") as $sponsor)
                <div class='col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center'>
                    @if(!empty($sponsor->url))
                        <a href="{{ $sponsor->url }}" target="_blank">
                    @endif
                            <img src='/storage/sponsors/{{ $sponsor->id }}.png' class='img-fluid'
                                 alt='{{ $sponsor->name }}'>
                    @if(!empty($sponsor->url))
                        </a>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
</section>
