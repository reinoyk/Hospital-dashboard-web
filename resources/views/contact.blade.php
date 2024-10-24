@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="contact_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="contact_taital">Get In Touch</h1>
                <form action="#">
                    <!-- Contact form -->
                </form>
            </div>
            <div class="col-md-6">
                <div class="map-responsive">
                    <iframe src="your-google-map-link" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
