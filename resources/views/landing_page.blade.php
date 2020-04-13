@extends('layouts.app')
@section('content')
  <div class="container">
      <section>
          <div>
            <h1 class="name-bussiness from-down"><span class="helvetica"><span style="font-size:10vw;">J</span>UNO</span><span class="industry"> <span style="font-size:10vw;">S</span>tudio</span></h1>
            <h4 class="from-down slogan-icon">Design is thinking made visual</h4>
            <h6 class="from-up text-footer">Investigación  Innovación  Solución</h6>
          </div>
          <div class="white-back">

          </div>
          <div class="rotate dark-back">
            <img  class="icon-0" src="{!! url('assets/img/user-experience/png/046-question.png') !!}" alt="" />
            <img  class="icon-1" src="{!! url('assets/img/user-experience/png/049-interact.png') !!}" alt="" />
            <img  class="icon-2" src="{!! url('assets/img/user-experience/png/011-www.png') !!}" alt="" />
            <img  class="icon-3" src="{!! url('assets/img/user-experience/png/047-computer.png') !!}" alt="" />
          </div>


      </section>
      <section>
        <div class="icons-container">
          <img class="contact-icon from-up" src="{!! url('assets/img/user-experience/png/034-smartphone.png') !!}" alt="" />
        </div>
      </section>

  </div>
@endsection


@section('after_includes')
<script type="text/javascript">
$('img.contact-icon').hover(
  function() {
    $('img.contact-icon').addClass('pulsacion');
    $('h1.name-bussiness').addClass('slow');
  },
  function() {

    }
);


  $('body').flowtype({
     minimum   : 500,
     maximum   : 1200,
     minFont   : 12,
     maxFont   : 40,
     fontRatio : 30
  });
</script>
@endsection
