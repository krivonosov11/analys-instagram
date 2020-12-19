@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','i18n')

@section('content')
<!-- internationalization starts -->
<section id="internationalization">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Change Locale</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <!-- language options -->
            <div class="language-options ">
              <fieldset>
                <div class="radio mb-50">
                  <input type="radio" class="i18n-lang-option" name="i18n-lang-radios" id="radio1" checked=""
                    value="false" data-lng="en_p">
                  <label for="radio1">English</label>
                </div>
              </fieldset>
              <fieldset>
                <div class="radio mb-50">
                  <input type="radio" class="i18n-lang-option" name="i18n-lang-radios" id="radio2" value="false"
                    data-lng="fr_p">
                  <label for="radio2">French</label>
                </div>
              </fieldset>
              <fieldset>
                <div class="radio mb-50">
                  <input type="radio" class="i18n-lang-option" name="i18n-lang-radios" id="radio3" value="false"
                    data-lng="de_p">
                  <label for="radio3">German</label>
                </div>
              </fieldset>
              <fieldset>
                <div class="radio mb-50">
                  <input type="radio" class="i18n-lang-option" name="i18n-lang-radios" id="radio4" value="false"
                    data-lng="pt_p">
                  <label for="radio4">Portuguese</label>
                </div>
              </fieldset>
            </div>
            <!--/language options -->
            <div class="card border mt-3 card-localization">
              <div class="card-header">
                <h4 class="card-title">Card Title</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="card-text" data-i18n="key">
                    Cake sesame snaps cupcake gingerbread danish I love gingerbread. Apple pie pie jujubes chupa chups
                    muffin halvah lollipop. Chocolate cake oat cake tiramisu marzipan sugar plum. Donut sweet pie oat
                    cake dragée fruitcake cotton candy lemon drops.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- internationalization starts -->
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/extensions/i18n.js')}}"></script>
@endsection
