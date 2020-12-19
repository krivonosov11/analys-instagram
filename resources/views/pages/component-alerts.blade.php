@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Alerts')
@section('content')
<section id="basic-alerts">
  <div class="row">
    <!-- Basic Alerts start -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Default</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              Alerts are available for any length of text. Add <code>.alert.alert-{color}</code> classes for alert with all theme
              colors.
            </p>
            <div class="alert alert-primary mb-2" role="alert">
              Good Morning! Start your day with some alerts.
            </div>
            <div class="alert alert-danger mb-2" role="alert">
              Good Morning! Start your day with some alerts.
            </div>
            <div class="alert alert-warning mb-2" role="alert">
              Good Morning! Start your day with some alerts.
            </div>
            <div class="alert alert-success mb-2" role="alert">
              Good Morning! Start your day with some alerts.
            </div>
            <div class="alert alert-info mb-2" role="alert">
              Good Morning! Start your day with some alerts.
            </div>
            <div class="alert alert-secondary mb-2" role="alert">
              Good Morning! Start your day with some alerts.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Basic Alerts end -->

    <!-- Alerts with Icons start -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Alerts with Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              Add a dismiss button, use <code>.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code>.close</code> button.
            </p>
            <div class="alert alert-primary alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-star"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-error"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert alert-warning alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-error-circle"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert alert-success alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-like"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert alert-info alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-heart"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert alert-secondary alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-edit"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Alerts with Icons Ends-->

    <!-- Alerts with Border start -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Alerts with Border</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              To Show Alert with different border color, use <code>.border-{colorName}</code> class.
            </p>
            <div class="alert border-primary alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-star"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
                </div>
            </div>
            <div class="alert border-danger alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-error"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert border-warning alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-error-circle"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert border-success alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-like"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert border-info alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-heart"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert border-secondary alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-edit"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Alerts with Border Ends-->

    <!-- Alerts with Light Background Color start -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Alerts with Light Background Color</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>
              Add <code>.bg-rgba-{colorName}</code> class alongwith <code>.alert</code> class, which adds Light Background Color.
            </p>
            <div class="alert bg-rgba-primary alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-star"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert bg-rgba-danger alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-error"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert bg-rgba-warning alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-error-circle"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert bg-rgba-success alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-like"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert bg-rgba-info alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-heart"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
            <div class="alert bg-rgba-secondary alert-dismissible mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div class="d-flex align-items-center">
                <i class="bx bx-star"></i>
                <span>
                  Good Morning! Start your day with some alerts.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Alerts with Light Background Color Ends-->
  </div>
</section>
@endsection
