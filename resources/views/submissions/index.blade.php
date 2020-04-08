@extends('layouts.app')


@section('content')

<div class="container">
    @foreach( $submissions as $submission )

    @include('submissions.templates.submissionTemplate')
    @endforeach
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        AOS.init({
            disable: "mobile"
        });
        $("[data-bs-hover-animate]")
            .mouseenter(function() {
                var elem = $(this);
                elem.addClass("animated " + elem.attr("data-bs-hover-animate"));
            })
            .mouseleave(function() {
                var elem = $(this);
                elem.removeClass("animated " + elem.attr("data-bs-hover-animate"));
            });
    });
</script>

@endsection
