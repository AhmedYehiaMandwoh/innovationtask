@extends('backend.layouts.index')

@section('content')

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
      </div>
      <div class="content-body"><!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
          <div class="row match-height">
            

            <!-- Statistics Card -->
            <div class="col-xl-12 col-md-6 col-12">
              <div class="card card-statistics">
                <div class="card-header">
                  <h4 class="card-title">{{__('Statistics')}}</h4>
                  <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 me-25 mb-0">{{__('Updated 1 month ago')}}</p>
                  </div>
                </div>
                <div class="card-body statistics-body">
                  <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-primary me-2">
                          <div class="avatar-content">
                            <i data-feather="trending-up" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                          <h4 class="fw-bolder mb-0">230k</h4>
                          <p class="card-text font-small-3 mb-0">{{__('Sales')}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-info me-2">
                          <div class="avatar-content">
                            <i data-feather="user" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                          <h4 class="fw-bolder mb-0">8.549k</h4>
                          <p class="card-text font-small-3 mb-0">{{__('Customers')}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-danger me-2">
                          <div class="avatar-content">
                            <i data-feather="box" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                          <h4 class="fw-bolder mb-0">1.423k</h4>
                          <p class="card-text font-small-3 mb-0">{{__('Booking')}}</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                      <div class="d-flex flex-row">
                        <div class="avatar bg-light-success me-2">
                          <div class="avatar-content">
                            <i data-feather="dollar-sign" class="avatar-icon"></i>
                          </div>
                        </div>
                        <div class="my-auto">
                          <h4 class="fw-bolder mb-0">$9745</h4>
                          <p class="card-text font-small-3 mb-0">{{__('Revenue')}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Statistics Card -->
          </div>

          <div class="row match-height">
            <div class="col-lg-4 col-12">
              <div class="row match-height">
                <!-- Bar Chart - Orders -->
                <div class="col-lg-6 col-md-3 col-6">
                  <div class="card">
                    <div class="card-body pb-50">
                      <h6>{{__('Orders')}}</h6>
                      <h2 class="fw-bolder mb-1">2,76k</h2>
                      <div id="statistics-order-chart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Bar Chart - Orders -->

                <!-- Line Chart - Profit -->
                <div class="col-lg-6 col-md-3 col-6">
                  <div class="card card-tiny-line-stats">
                    <div class="card-body pb-50">
                      <h6>{{__('Profit')}}</h6>
                      <h2 class="fw-bolder mb-1">6,24k</h2>
                      <div id="statistics-profit-chart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Line Chart - Profit -->

                <!-- Earnings Card -->
                <div class="col-lg-12 col-md-6 col-12">
                  <div class="card earnings-card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <h4 class="card-title mb-1">{{__('Earnings')}}</h4>
                          <div class="font-small-2">{{__('This Month')}}</div>
                          <h5 class="mb-1">$4055.56</h5>
                          <p class="card-text text-muted font-small-2">
                            <span class="fw-bolder">68.2%</span><span> {{__('more earnings than last month')}}.</span>
                          </p>
                        </div>
                        <div class="col-6">
                          <div id="earnings-chart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Earnings Card -->
              </div>
            </div>

            <!-- Revenue Report Card -->
            <div class="col-lg-8 col-12">
              <div class="card card-revenue-budget">
                <div class="row mx-0">
                  <div class="col-md-8 col-12 revenue-report-wrapper">
                    <div class="d-sm-flex justify-content-between align-items-center mb-3">
                      <h4 class="card-title mb-50 mb-sm-0">{{__('Revenue Report')}}</h4>
                      <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center me-2">
                          <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                          <span>{{__('Earning')}}</span>
                        </div>
                        <div class="d-flex align-items-center ms-75">
                          <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                          <span>{{__('Expense')}}</span>
                        </div>
                      </div>
                    </div>
                    <div id="revenue-report-chart"></div>
                  </div>
                  <div class="col-md-4 col-12 budget-wrapper">
                    <div class="btn-group">
                      <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        2020
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">2020</a>
                        <a class="dropdown-item" href="#">2019</a>
                        <a class="dropdown-item" href="#">2018</a>
                      </div>
                    </div>
                    <h2 class="mb-25">$25,852</h2>
                    <div class="d-flex justify-content-center">
                      <span class="fw-bolder me-25">{{__('Budget')}}:</span>
                      <span>56,800</span>
                    </div>
                    <div id="budget-chart"></div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Revenue Report Card -->
          </div>

          <div class="row match-height">
            <!-- Company Table Card -->
            <div class="col-lg-8 col-12">
              <div class="card card-company-table">
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>{{__('My Company')}}</th>
                          <th>{{__('Views')}}</th>
                          <th>{{__('Revenue')}}</th>
                          <th>{{__('Flight Sales')}}</th>
                          <th>{{__('Hotel Sales')}}</th>
                          <th>{{__('Total Sales')}}</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar rounded">
                                <div class="avatar-content">
                                  <img src="/theme-back/app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                                </div>
                              </div>
                              <div>
                                <div class="fw-bolder">Dixons</div>
                                <div class="font-small-2 text-muted">meguc@ruj.io</div>
                              </div>
                            </div>
                          </td>
                       
                          <td class="text-nowrap">
                            <div class="d-flex flex-column">
                              <span class="fw-bolder mb-25">23.4k</span>
                            </div>
                          </td>
                          <td class="text-nowrap">
                            <div class="d-flex flex-column">
                              <span class="fw-bolder mb-25">23.4k</span>
                            </div>
                          </td>
                          <td class="text-nowrap">
                            <div class="d-flex flex-column">
                              <span class="fw-bolder mb-25">23.4k</span>
                            </div>
                          </td>
                          <td>$891.2</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <span class="fw-bolder me-1">68%</span>
                              <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                            </div>
                          </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Company Table Card -->

            <!-- Developer Meetup Card -->
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card card-developer-meetup">
                <div class="meetup-img-wrapper rounded-top text-center">
                  <img src="/theme-back/app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170" />
                </div>
                <div class="card-body">
                  <div class="meetup-header d-flex align-items-center">
                    <div class="meetup-day">
                      <h6 class="mb-0">THU</h6>
                      <h3 class="mb-0">24</h3>
                    </div>
                    <div class="my-auto">
                      <h4 class="card-title mb-25">{{__('Customer Satisfaction')}}</h4>
                    </div>
                  </div>
                  <div class="mt-0">
                    <div class="avatar float-start bg-light-primary rounded me-1">
                      <div class="avatar-content">
                        <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                      </div>
                    </div>
                    <div class="more-info">
                      <h6 class="mb-0">Sat, Mar 30, 2023</h6>
                      <small>10:AM</small>
                    </div>
                  </div>
                
                  <div class="avatar-group">
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                      title="Billy Hopkins" class="avatar pull-up">
                      <img src="/theme-back/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33"
                        height="33" />
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                      title="Amy Carson" class="avatar pull-up">
                      <img src="/theme-back/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33"
                        height="33" />
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                      title="Brandon Miles" class="avatar pull-up">
                      <img src="/theme-back/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33"
                        height="33" />
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                      title="Daisy Weber" class="avatar pull-up">
                      <img src="/theme-back/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33"
                        height="33" />
                    </div>
                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                      title="Jenny Looper" class="avatar pull-up">
                      <img src="/theme-back/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33"
                        height="33" />
                    </div>
                    <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Developer Meetup Card -->

       

            <!-- Goal Overview Card -->
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="card-title">{{__('Goal Overview')}}</h4>
                  <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                </div>
                <div class="card-body p-0">
                  <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                  <div class="row border-top text-center mx-0">
                   
                    <div class="col-6 py-1">
                      <p class="card-text text-muted mb-0">Total Sales</p>
                      <h3 class="fw-bolder mb-0">13,561</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Goal Overview Card -->

            <!-- Transaction Card -->
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card card-transaction">
                <div class="card-header">
                  <h4 class="card-title">{{__('Transactions')}}</h4>
                  <div class="dropdown chart-dropdown">
                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">{{__('Last Month')}}</a>
                      <a class="dropdown-item" href="#">{{__('Last Year')}}</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="transaction-item">
                    <div class="d-flex">
                      <div class="avatar bg-light-primary rounded float-start">
                        <div class="avatar-content">
                          <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                        </div>
                      </div>
                      <div class="transaction-percentage">
                        <h6 class="transaction-title">{{__('Flight Bookings')}}</h6>
                        <small>{{__('up to now')}}</small>
                      </div>
                    </div>
                    <div class="fw-bolder text-success">350</div>
                  </div>
                  <div class="transaction-item">
                    <div class="d-flex">
                      <div class="avatar bg-light-success rounded float-start">
                        <div class="avatar-content">
                          <i data-feather="check" class="avatar-icon font-medium-3"></i>
                        </div>
                      </div>
                      <div class="transaction-percentage">
                        <h6 class="transaction-title">{{__('Hotel Bookings')}}</h6>
                        <small>{{__('up to now')}}</small>
                      </div>
                    </div>
                    <div class="fw-bolder text-success">150</div>
                  </div>
              
                </div>
              </div>
            </div>
            <!--/ Transaction Card -->
          </div>
        </section>
        <!-- Dashboard Ecommerce ends -->

      </div>
    </div>
  </div>
  <!-- END: Content-->
@endsection