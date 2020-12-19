@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Block-UI')

@section('content')
<!-- block examples section start -->
<section id="block-examples">
  <div class="row match-height">
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block Element</h5>
              <p>Block content components.</p>
              <button class="btn btn-lg btn-block font-medium-1 btn-light-primary mb-1 block-element text-nowrap">
                Block Card
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block Layout Area</h5>
              <p>Block layout areas.</p>
              <button class="btn btn-lg btn-block font-medium-1 btn-light-primary mb-1 block-sidebar text-nowrap">
                Block Sidebar
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block Whole Page</h5>
              <p>Block Whole Page</p>
              <button class="btn btn-lg btn-block font-medium-1 btn-light-primary mb-1 block-page text-nowrap">Block
                Page</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // block examples section end -->

<!-- message options section start -->
<section id="message-options">
  <div class="row  match-height">
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block With Spinner Only</h5>
              <p>Block card with spinner only.</p>
              <button class="btn btn-lg btn-block font-medium-1 btn-light-success mb-1 block-spinner-only text-nowrap">
                Only Spinner
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block With Default Message</h5>
              <p>Block With Default Message.</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-success mb-1 block-default-message text-nowrap">
                Default Message
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block With Custom Message</h5>
              <p>Block With Custom Message.</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-success mb-1 block-custom-message text-nowrap">
                Custom Message
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row  match-height">
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Message Animation</h5>
              <p>Message Animation</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-danger mb-1 block-msg-animation text-nowrap">Animation</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Multiple Messages</h5>
              <p>Block layout areas.</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-danger mb-1 block-multiple-msgs text-nowrap">Multiple
                Messages</button>
              <div class="multiple-msgs">
                <div class="text-bold-600">
                  <span class="icon-spinner9 icon-spin text-left"></span>&nbsp; Loading ...
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Non centered Message</h5>
              <p>Non centered Message</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-danger mb-1 block-non-centered-msg text-nowrap">
                Non centered
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // message options section end -->

<!-- overlay options section start -->
<section id="overlay-options">
  <div class="row  match-height">
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Light overlay</h5>
              <p>Light overlay.</p>
              <button class="btn btn-lg btn-block font-medium-1 btn-light-warning mb-1 block-light-overlay text-nowrap">
                Light overlay
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Opaque Overlay</h5>
              <p>Opaque Overlay</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-warning mb-1 block-opaque-overlay text-nowrap">
                Opaque Overlay
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Custom Overlay</h5>
              <p>Custom Overlay</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-warning mb-1 block-custom-overlay text-nowrap">
                Custom Overlay
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // overlay options section end -->

<!-- callback options section start -->
<section id="callback-options">
  <div class="row match-height">
    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>OnBlock Callback</h5>
              <p>OnBlock Callback</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-info mb-1 onblock-callback text-nowrap">OnBlock</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>OnUnblock Callback</h5>
              <p>useful when using fadeOut option as it is invoked when all the blocking elements have been removed.</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-info mb-1 onunblock-callback text-nowrap">OnUnblock</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>OnOverlay Click Callback</h5>
              <p>OnOverlay Click Callback.</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-info mb-1 onoverlay-click-callback text-nowrap">OnOverlay
                Click
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // callback options section end -->

<!-- other options section start -->
<section id="other-options">
  <div class="row  match-height">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block Without Message</h5>
              <p>Block Wihtout Message.</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-primary mb-1 block-without-msg text-nowrap">Block
                Wihtout Message
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Block Without Overlay</h5>
              <p>Block Without Overlay.</p>
              <button
                class="btn btn-lg btn-block font-medium-1 btn-light-warning mb-1 block-without-overlay text-nowrap">
                Block Without Overlay
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Click Overlay To Unblock</h5>
              <p>Click Overlay To Unblock</p>
              <button class="btn btn-lg btn-block font-medium-1 btn-light-danger mb-1 overlay-unblock text-nowrap">
                Click Overlay To Unblock
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-content">
          <div class="card-body">
            <div class="form-group">
              <h5>Growl Notification</h5>
              <p>Growl Notification.</p>
              <button class="btn btn-lg btn-block font-medium-1 btn-light-success mb-1 growl-notification text-nowrap">
                Growl Notification</button>
              <div class="growl-notification-example">
                <i class="icon-checkmark22"></i> Growl Notification Example
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // other options section end -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/ui/blockUI.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/extensions/ext-component-block-ui.js')}}"></script>
@endsection