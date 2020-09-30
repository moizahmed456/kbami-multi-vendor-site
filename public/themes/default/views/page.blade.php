@extends('layouts.main')

@section('content')
    <!-- PAGE COVER IMAGE -->
    @include('banners.page_cover')

    <!-- CONTENT SECTION -->
	<div class="clearfix space20"></div>
	<section>
		<div class="container">
			<div class="row">
				{!! $page->content !!}
		    </div><!-- /.row -->
	  	</div><!-- /.container -->
	</section>

	<!-- For contact page only -->
	@if(\App\Page::PAGE_CONTACT_US == $page->slug)
		@include('layouts.contact_us')
	@endif
	<!-- For join-us page only -->
	@if(\App\Page::PAGE_JOIN_US == $page->slug)
		@include('layouts.join_us_kbami')
	@endif

    <!-- BROWSING ITEMS -->
    @include('sliders.browsing_items')
@endsection