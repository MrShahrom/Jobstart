@extends('layout')

@section('title')
   Страница New-post
@endsection

@section('banner')
<div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
    <div class="container text-center">
        <h2 class="mb-0">Разместить вакансию</h2>
        <p class="mb-0 unit-6"><a href="/">Главная</a> <span class="sep">></span> <span>Разместить вакансию</span></p>
    </div>
</div>
@endsection

@section('content')
<div class="site-section bg-light">
    <div class="container">
      @if (session()->has('success'))
        <div class="alert alert-success">
          {{session()->get('success')}}
        </div>
      @endif
      <?php session()->forget('success'); ?>
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form action="{{ route('job.create') }}" method="post" class="p-5 bg-white">
                    @csrf

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Название</label>
                            <input type="text" name="title" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Компания</label>
                            <select name="company_id" id="Company" class="form-control">
                                @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12"><h3>Тип вакансии</h3></div>
                        @foreach($jobTypes as $jobType)
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input type="radio" name="type_id" id="type_id_{{ $jobType->id }}" value="{{ $jobType->id }}">
                            <label for="type_id_{{ $jobType->id }}">{{ $jobType->name }}</label>
                        </div>
                        @endforeach
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12"><h3>Местоположение</h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <select name="location_id" id="location_id" class="form-control">
                                @foreach($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12"><h3>Зарплата</h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input type="text" name="salary" class="form-control" placeholder="Зарплата(сомони)">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12"><h3>Описание</h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button type="submit" value="Post" class="btn btn-primary  py-2 px-5">Добавить
                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Контакная информация</h3>
              <p class="mb-0 font-weight-bold">Адрес</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Телефон</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Больше информации</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><a href="#" class="btn btn-primary  py-2 px-4">Узнать больше</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Часто задаваемые вопросы</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Как называется ваша компания<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Сколько платят за 3 месяца<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Нужно ли мне регистрироваться <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Почему я должен обращаться в службу поддержки.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>

    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-white h4 font-weihgt-normal mb-4">Подпишитесь на рассылку</h2>
          </div>
        </div>
        <form action="" class="row">
          <div class="col-md-9">
            <input type="text" class="form-control border-0 mb-3 mb-md-0" placeholder="Enter Your Email">
          </div>
          <div class="col-md-3">
            <input type="submit" value="Send" class="btn btn-dark btn-block" style="height: 45px;">  
          </div>
        </form>
      </div>
    </div>

@endsection