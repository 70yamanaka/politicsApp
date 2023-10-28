@extends('layouts.app')
@section('content')
  <!-- VISION -->
  <section id="sec01">
    <header>
      <h2>TOP</h2>
    </header>
    <div class="vision">
      <div>
        <p>独自の政党支持率</p>
        <canvas id="graph-area" height="450" width="600"></canvas>
      </div>
      @if ($users->isNotEmpty())
        @foreach ($users as $user)
          <p>{{ $user->name }}</p>
          <p>{{ $user->sex }}</p>
          <p>{{ $user->year }}</p>
          <p>{{ $user->month }}</p>
          <p>{{ $user->day }}</p>
          <p>{{ $user->support }}</p>
        @endforeach
      @endif
      <a href="{{ url('users/create') }}">新規作成</a>
    </div>
  </section>
  <!-- // VISION -->
  <!-- MESSAGE -->
  <section id="sec02">
    <div class="wrap">
      <p class="bg"><img src="images/sec02_01.jpg" alt=""></p>
      <div class="txt">
        <div class="vMid">
          <h2>MESSAGE</h2>
          <p>ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </div>
      </div>
    </div>
    <div id="sec02_02" class="wrap">
      <p class="bg"><img src="images/sec02_02.jpg" alt=""></p>
      <div class="txt">
        <div class="vMid">
          <h2>MESSAGE</h2>
          <p>日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </div>
      </div>
    </div>
  </section>
  <!-- // MESSAGE -->
  <!-- SERVICE -->
  <section id="sec03">
    <div class="inner">
      <ul class="col3">
        <li>
          <h2>SERVICE</h2>
          <img src="images/circleImg01.png" width="288" height="288" alt="">
          <p>科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </li>
        <li>
          <h2>MESSAGE</h2>
          <img src="images/circleImg02.png" width="288" height="288" alt="">
          <p>日本歴史の科学的研究ということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば意義であるならば。</p>
        </li>
        <li>
          <h2>STORY</h2>
          <img src="images/circleImg03.png" width="288" height="288" alt="">
          <p>科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいう。</p>
        </li>
      </ul>
    </div>
  </section>
  <!-- // SERVICE -->
  <!-- STORY -->
  <section id="sec04">
    <div class="inner">
      <ul class="col2">
        <li>
          <h2>STORY</h2>
          <p>科学的研究というのが近代史学の学問的方法によるちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれている。研究という意義であるならば、研究という意義であるならばこれは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。</p>
        </li>
        <li>
          <h2>SUCCESS</h2>
          <p>ちかごろ世間で日本歴史の科学的研究ということがしきりに叫ばれているということがしきりに叫ばれている。科学的研究というのが近代史学の学問的方法による研究という意義であるならば、これは史学の学徒の間においては一般に行われていることであるから、今さらこと新しくいうには及ばないはずである。</p>
        </li>
      </ul>
    </div>
  </section>
  <!-- // STORY -->
  <!-- PROFILE -->
  <section id="sec05">
    <header>
      <h2>PROFILE</h2>
    </header>
    <div class="inner">
      <ul class="col2">
        <li>
          <dl>
            <dt>社名</dt>
            <dd>Sample Company</dd>
            <dt>代表取締役</dt>
            <dd>見本 太郎</dd>
            <dt>住所</dt>
            <dd>見本県見本市仮区見本町1-3-5</dd>
            <dt>電話番号</dt>
            <dd>01234-567-8901</dd>
            <dt>設立</dt>
            <dd>20XX年5月5日</dd>
            <dt>資本金</dt>
            <dd>1,000,000円</dd>
            <dt>主な取引先</dt>
            <dd><p><a href="#" target="_blank">見本商事株式会社</a></p><p><a href="#" target="_blank">株式会社年中無休商事</a></p><p><a href="#" target="_blank">株式会社仮称</a></p></dd>
          </dl>
        </li>
        <li>
          <div id="map">
            <!-- GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.5937927089367!2d136.92980931491988!3d36.70829797996758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff781ec5af4ca3f%3A0x2ade3e8e4c2801b8!2z56aP5bKh6aeF!5e0!3m2!1sja!2sus!4v1478313402186" allowfullscreen></iframe>
            <!-- // GOOGLE MAP -->
          </div>
        </li>
      </ul>
    </div>
  </section>
@endsection

@section('script')
  <script type="text/javascript">

    // ▼グラフの中身
    var pieData = [
      {
          value: 240,            // 値
          color:"#F7464A",       // 色
          highlight: "#FF5A5E",  // マウスが載った際の色
          label: "自由民主党"        // ラベル
      },
      {
          value: 50,
          color: "#41C44E",
          highlight: "#6CD173",
          label: "立憲民主党"
      },
      {
          value: 100,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "日本維新の会"
      },
      {
          value: 65,
          color: "#AA49B8",
          highlight: "#C583CF",
          label: "公明党"
      },
      {
          value: 75,
          color: "#4D5360",
          highlight: "#616774",
          label: "日本共産党"
      }

    ];

    // ▼上記のグラフを描画するための記述
    window.onload = function(){
      var ctx = document.getElementById("graph-area").getContext("2d");
      window.myPie = new Chart(ctx).Pie(pieData);
    };

  </script>
@endsection