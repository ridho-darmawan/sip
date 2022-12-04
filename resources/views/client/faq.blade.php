@extends('layouts.template')

@section('content')
<div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="header-text caption">
            <h2>FAQ</h2>
            <div id="search-section">
                {{-- <form id="suggestion_form" name="gs" method="get" action="#"> --}}
              {{-- <div class="searchText">

                <input type="text" name="q" class="searchText" placeholder="Enter your domain here..." autocomplete="on">
                <ul>
                  <li><label><input type="checkbox" name="ext_com" value="1"><span>.com <em>($10/yr)</em></span></label></li>
                  <li><label><input type="checkbox" name="ext_net" value="1"><span>.net <em>($12/yr)</em></span></label></li>
                  <li><label><input type="checkbox" name="ext_org" value="1"><span>.org <em>($8/yr)</em></span></label></li>
                  <li><label><input type="checkbox" name="ext_in" value="1"><span>.in <em>($6/yr)</em></span></label></li>
                </ul>
              </div> --}}
                  {{-- <input type="submit" name="results" class="main-button" value="Search Now"> --}}
               {{-- </form> --}}
             <div class="advSearch_chkbox">
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="about-us">

    <div class="container">
        <div class="row">
            <div class="col">
                <div id="accordion">

                    @forelse ($faqs as $faq)
                        <div class="card mb-3">
                            <div class="card-header" style="background-color: #8566c7;" id="headingOne">
                                <h6>
                                    {{-- asdasd --}}
                                    <button class="btn btn-link float-left" style="color:white; text-decoration:none" data-toggle="collapse"  href="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapseOne">
                                        {{ucwords($faq->pertanyaan)}}
                                    </button>
                                    <button class="btn btn-link float-right" ><i class="tn btn-link fa fa-angle-down " data-toggle="collapse"  href="#collapse{{ $faq->id }}"aria-expanded="false" aria-controls="collapseOne" style="text-decoration:none; color:white"></i>
                                        {{-- Collapsible Group Item #1 --}}
                                    </button>
                                </h6>

                            </div>

                            <div id="collapse{{ $faq->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    {{$faq->jawaban}}
                                </div>
                            </div>
                        </div>
                    @empty
                        <h5 class="text-center">Data FAQ Belum Tersedia</h5>
                    @endforelse




                </div>
            </div>
        </div>
    </div>
</div>

@endsection
