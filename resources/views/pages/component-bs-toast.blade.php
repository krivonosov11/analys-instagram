@extends('layouts.contentLayoutMaster')
{{-- titile --}}
@section('title','Toasts')

@section('content')
<!-- Start of Bootstrap Toasts -->
<section id="bootstrap-toasts">
  <!-- Translucent toast and basic toasts starts  -->
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Toast</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              Toasts are as flexible as you need and have very little required markup. At a minimum, we
              require a single element to contain your “toasted” content and strongly encourage a dismiss
              button. Also apply <code>.toast-title</code> class to a title text.
            </p>
            <div class="btn btn-outline-primary toast-toggler mb-1">Toast</div>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
              <div class=" toast-header">
                <i class="bx bx-bulb"></i>
                <span class="mr-auto toast-title">Bootstrap</span>
                <small>11 mins ago</small>
                <button type="button" class="close" data-dismiss="toast" aria-label="Close">
                  <i class="bx bx-x"></i>
                </button>
              </div>
              <div class="toast-body">
                The Luxury Of Traveling With Yacht Charter Companies
                Of Traveling With Yacht
              </div>
            </div>
            <p>
              Toasts light are also as flexible as you need and have very little required markup. At a minimum, we
              need to add a single <code>.toast-light</code> with <code>.toast</code> class.
            </p>
            <div class="btn btn-outline-primary toast-toggler">Toast Light</div>
            <div class="toast toast-light" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
              <div class="toast-header">
                <i class="bx bx-bulb"></i>
                <span class="mr-auto toast-title">Bootstrap</span>
                <small>11 mins ago</small>
                <button type="button" class="close" data-dismiss="toast" aria-label="Close">
                  <i class="bx bx-x"></i>
                </button>
              </div>
              <div class="toast-body">
                The Luxury Of Traveling With Yacht Charter Companies
                Of Traveling With Yacht
              </div>
            </div>
            <div class="toast-bs-container">
              <div class="toast-position"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Translucent</h4>
        </div>
        <div class="card-content ">
          <p class="ml-2">
            Toasts are slightly translucent, too, so they blend over whatever they might appear
            over. For browsers that support the backdrop-filter CSS property, we’ll also attempt to blur the
            elements under a toast.
          </p>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="toast toast-translucent mr-auto ml-auto" role="alert" aria-live="assertive"
                  aria-atomic="true">
                  <div class="toast-header">
                    <i class="bx bx-bell"></i>
                    <span class="mr-auto toast-title">Bootstrap</span>
                    <small class="d-sm-block d-none">11 mins ago</small>
                    <button type="button" class="close" data-dismiss="toast" aria-label="Close">
                      <i class="bx bx-x"></i>
                    </button>
                  </div>
                  <div class="toast-body">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="toast toast-light toast-translucent mr-auto ml-auto" role="alert" aria-live="assertive"
                  aria-atomic="true">
                  <div class="toast-header">
                    <i class="bx bx-bell"></i>
                    <span class="mr-auto toast-title">Bootstrap</span>
                    <small class="d-sm-block d-none">11 mins ago</small>
                    <button type="button" class=" close" data-dismiss="toast" aria-label="Close">
                      <i class="bx bx-x"></i>
                    </button>
                  </div>
                  <div class="toast-body">
                    Hello, world! This is a toast message.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Translucent toast and basic toasts starts  -->

  <!-- toast stacking and placement starts -->
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <h4 class="card-title">Stacking</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="mt-1 mb-0">
              When you have multiple toasts, we default to vertically stacking them in a readable
              manner.
            </p>
            <div class="btn btn-outline-primary toast-toggler mt-2 mr-1">Auto Hide Off</div>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
              <div class="toast-header">
                <i class="bx bx-bell"></i>
                <span class="mr-auto toast-title">Bootstrap</span>
                <small>just now</small>
                <button type="button" class=" close" data-dismiss="toast" aria-label="Close">
                  <i class="bx bx-x"></i>
                </button>
              </div>
              <div class="toast-body">
                See? Just like this.
              </div>
            </div>
            <div class="btn btn-outline-success toast-toggler mt-2 mr-1">Toast</div>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
              <div class="toast-header">
                <i class="bx bx-bell"></i>
                <span class="mr-auto toast-title">Bootstrap</span>
                <small>2 seconds ago</small>
                <button type="button" class=" close" data-dismiss="toast" aria-label="Close">
                  <i class="bx bx-x"></i>
                </button>
              </div>
              <div class="toast-body">
                Heads up, toasts will stack automatically
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <h4 class="card-title">Placement</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="mt-1 mb-0">
              You can place toasts with custom CSS as you need them, put the positioning styles
              right on the <code>.toast</code>. or You can also get fancy with flexbox utilities to align toasts
              horizontally and/or vertically.
            </p>
            <div class="btn btn-outline-info placement mt-2">Toast Placement</div>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
              <div class="toast-header">
                <i class="bx bx-bell"></i>
                <span class="mr-auto toast-title">Bootstrap</span>
                <small>2 seconds ago</small>
                <button type="button" class="close" data-dismiss="toast" aria-label="Close">
                  <i class="bx bx-x"></i>
                </button>
              </div>
              <div class="toast-body">
                Heads up, toasts will stack automatically
              </div>
            </div>
            <!-- Fixed Center Toast Starts -->

            <div aria-live="polite" aria-atomic="true"
              class="toast-placement d-flex justify-content-center align-items-center">
              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                <div class="toast-header">
                  <i class="bx bx-bell"></i>
                  <span class="mr-auto toast-title">Bootstrap</span>
                  <small>1 mins ago</small>
                  <button type="button" class="close" data-dismiss="toast" aria-label="Close">
                    <i class="bx bx-x"></i>
                  </button>
                </div>
                <div class="toast-body">
                  Hello, world! This is a toast message.
                </div>
              </div>
            </div>
            <!-- Fixed Center Toast ends -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- toast stacking and placement starts -->
</section>
<!-- End of Bootstrap Toasts -->
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/pages/bootstrap-toast.js')}}"></script>
@endsection