@extends('layouts.layout')

@section('content')
			<!-- introBlock of the page -->
			<section class="introBlock position-relative d-flex" data-scroll-index="0">
				<div class="alignCenter w-100 d-flex align-items-center">
					<div class="container pt-25 pt-sm-30 pt-md-36 pt-xl-40 pb-10">
                        @for ($i = 0; $i < count($data); $i++)
						<div class="row" style="background-color: white;padding:20px;border-radius: 15px;margin:15px;box-shadow:1px 1px 2px rgb(107, 98, 98), 0 0 25px rgb(248, 244, 246), 0 0 5px rgb(155, 141, 141);"">


                                    <div class="col-12 col-lg-3">

                                            <img src="{{ asset('/images/'.$data[$i]['input_img'] ?? null) }}" alt="icon class="img-fluid" width="210" height="210" style="opacity: 1">

                                    </div>
                                    <div class="col-12 col-lg-9">

                                        <header class="header text-center text-md-left mb-6 mb-lg-9">
                                            <h2 class="mb-4 mb-xl-6">
                                                <strong class="h5 d-block">{{ $data[$i]['title'] ?? null }} </strong>
                                            </h2>
                                            <p>{{ $data[$i]['sub'] ?? null }}</span></p>
                                        </header>

                                        <a href={{ url('/read/'.$data[$i]['id']) }} >Read More....</a>
                                </div>


						</div>
                        @endfor


					</div>
				</div>
				<div class="bgHolder">
					<svg class="svgBg">
						<defs>
							<clipPath id="pt02" clipPathUnits="objectBoundingBox">
								<path d="M 0 0 L 1 0 L 1 0.057586 C 0.76770 0.091407 0.755729 0.45978 0.58281 0.66453 C 0.379166 0.942413 0.156770 0.544789 0 0.88665 L 0 0 Z"></path>
							</clipPath>
						</defs>
						<rect width="100%" height="100%" style="clip-path: url(#pt02);" fill="#fc4d4a" fill-opacity="0.05"></rect>
					</svg>
					<!-- iconGroupImg of the page -->
					<div class="iconGroupImg d-none d-sm-block">
						<span class="position-absolute icnImg" data-icon="icon1">
							<img src="{{ asset('css/images/icon1.png') }}" alt="icon class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon2">
							<img src="{{ asset('css/images/icon2.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon3">
							<img src="{{ asset('css/images/icon3.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon4">
							<img src="{{ asset('css/images/icon4.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon5">
							<img src="{{ asset('css/images/icon5.png') }}" alt="icon" class="img-fluid">
						</span>
						<span class="position-absolute icnImg" data-icon="icon6">
							<img src="{{ asset('css/images/icon6.png') }}" alt="icon" class="img-fluid">
						</span>
					</div>
				</div>
			</section>
			<!-- brandingBlock of the page -->

            @endsection
