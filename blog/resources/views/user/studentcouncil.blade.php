@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection


@section('content')

<style>
  text {
      color: #478bca;
      text-align: center;
  }
  tabs{
    tab-size:4;
  }
</style>

<div class="triangle"></div>
  <div class="section secondary-section" id="document">
      <div class="container">
      <div class="title">

          <h1>Student Council</h1>

      </div>
      <text><h4><tabs>สภานักศึกษา คือ องค์กรหนึ่งของนักศึกษา ที่ถูกแต่งตั้งขึ้นโดยมหาวิทยาลัยเพื่อที่จะดูแลการดำเนินกิจกรรมต่างๆของนักศึกษาให้เป็นไปตามระเบียบของมหาวิทยาลัย…..องค์กรนักศึกษาเพื่อการศึกษานั่นเอง บทบาทหน้าที่ ควบคุมดูแลการทำงานขององค์การบริหารองค์การนักศึกษา ชมรมต่างๆรวมถึงสโมสรนักศึกษาคณะต่างๆ ในมหาวิทยาลัย พิทักษ์สิทธิ์ต่างๆของนักศึกษา พิจารณาจัดสรรงบประมาณ ในการจัดกิจกรรมต่างๆของนักศึกษา</h4></text><br><br>
      <text><h2>Student Council Chart</h2></text>
      <img src="fontend/images/pic_studentunion/studentcouncil_chart.png">
  </div>
</div>

<text><div class="container">
    <div class="span9 center contact-info">

        <h4>องค์การบริหาร สภานักนักศึกษา มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต </h4>
        <h4>80 หมู่ 1 ถ.วิชิตสงคราม อ.กะทู้ จ.ภูเก็ต 83120</h4>
        <h4>Phone: 0-7627-1234</h4>
        <h4>Student_council@gmail.com</h4>
        <div class="title">
            <h3>We Are Social</h3>
        </div>
    </div>
        <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div></text>


@endsection
