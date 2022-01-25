@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
     <!-- Schedule Section Start -->
     <section id="schedules" class="schedule section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Schedules</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor</p>
              </div>
            </div>
          </div>
          <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
            <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
              <div class="table-responsive">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-expanded="true">
                      <div class="item-text">
                        <h4>Monday</h4>
                        <h5>14 February</h5>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday">
                      <div class="item-text">
                        <h4>Tuesday</h4>
                        <h5>15 February</h5>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday">
                      <div class="item-text">
                        <h4>Wednesday</h4>
                        <h5>16 February</h5>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                      <div class="item-text">
                        <h4>Thursday</h4>
                        <h5>17 February</h5>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                  <div id="accordion">
                    <div class="card">
                      <div id="headingOne">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>15 Free Productive Design Tools</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Getting Started With SketchApp</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                  <div id="accordion2">
                    <div class="card">
                      <div id="headingOne1">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion2">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo2">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion2">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                  <div id="accordion3">
                    <div class="card">
                      <div id="headingOne3">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion3">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo3">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordion3">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree3">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                  <div id="accordion4">
                    <div class="card">
                      <div id="headingOne">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion4">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion4">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree4">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion4">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                  <div id="accordion">
                    <div class="card">
                      <div id="headingOne">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
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
      <!-- Schedule Section End -->
@endsection
