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
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h6>
                                {{-- asdasd --}}
                                <button class="btn btn-link float-left" style="color:black; text-decoration:none" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Apa Itu Suistanable Income Project?
                                </button>
                                <button class="btn btn-link float-right" ><i class="tn btn-link fa fa-angle-down " data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="text-decoration:none"></i>
                                    {{-- Collapsible Group Item #1 --}}
                                </button>
                            </h6>

                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
