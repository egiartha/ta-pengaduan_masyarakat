<div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="carousel-background"><img id="cr-bg" src="{{asset('assets/img/11 (1).jpg')}}" alt=""></div>
                <div class="carousel-container">
                    <div class="carousel-content">
                        <h2>Selamat datang </h2>
                        <h1>Di Layanan Penerangan Jalan Umum </h1>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>

@push('scripts')

<script>
    carousel()

    $(window).on("resize", function() {
        carousel()
    });

    function carousel() {
        const height = window.innerHeight
        if (window.innerWidth <= 1024) {
            $("#cr-bg").css({
                'height': height,
                'object-fit': 'cover'
            })
        } else {
            $("#cr-bg").css({
                'height': height,
                'width': '100%',
                'object-fit': 'fill'
            })
        }
    }
</script>

@endpush
