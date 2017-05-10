@extends('layouts.theme')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')

<style>
  text {
      color: #478bca
  }
</style>

<div class="triangle"></div>
  <div class="section secondary-section" id="document">
      <div class="container">
      <div class="title">
          <h1>Documents</h1>
      </div>
  </div>
</div>


    <body>
    <!-- table of activity for student -->
    <div class="container">
      <text><h2>คำขอร้องทั่วไป</h2><br>
      <!-- The .table-condensed class makes a table more compact by cutting cell padding in half: -->
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>ลำดับ</th>
            <th>หัวข้อ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><a href="http://bit.ly/2r09aiK" target="_blank">ใบสำคัญรับเงิน</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="http://bit.ly/2qPZ3Qw" target="_blank">ใบสำคัญรับเงินทุนทำงานเเลกเปลี่ยน</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="http://bit.ly/2pxhDsM" target="_blank">ใบสำคัญรับเงินทุนทำงานทั่วไป</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="http://bit.ly/2qPZ3Qw" target="_blank">ตารางทำงานทุนทำงานแลกเปลี่ยน</a></td>
          </tr>
          <tr>
            <td>5</td>
            <td><a href="http://bit.ly/2piI3T1" target="_blank">ใบสมัครขอรับทุนการศึกษา</a></td>
          </tr>
          <tr>
            <td>ุ6</td>
            <td><a href="http://bit.ly/2qYj5o4" target="_blank">ขอใช้รถยนต์ของมหาวิทยาลัย</a></td>
          </tr>
          <tr>
            <td>7</td>
            <td><a href="http://bit.ly/2r0crhW" target="_blank">ขออนุญาตหยุดเรียนเพื่อเข้าร่วมกิจกรรม</a></td>
          </tr>
          <tr>
            <td>8</td>
            <td><a href="http://bit.ly/2q4wdcj" target="_blank">ขอยืมพัสดุทุกชนิด</a></td>
          </tr>
          <tr>
            <td>9</td>
            <td><a href="http://bit.ly/2qpO9AS" target="_blank">แบบฟอร์มจองห้องเรียนเพื่อทำกิจกรรม</a></td>
          </tr>
          <tr>
            <td>10</td>
            <td><a href="http://bit.ly/2r08OIU" target="_blank">ใบรับรองแทนใบเสร็จรับเงิน</a></td>
          </tr>
          <tr>
            <td>11</td>
            <td><a href="http://bit.ly/2r0csCM" target="_blank">แบบฟอร์มการขอแจ้งย้ายทะเบียนบ้าน</a></td>
          </tr>
          <tr>
            <td>12</td>
            <td><a href="http://bit.ly/2qpMVpj" target="_blank">คำร้องขอผ่อนผันการตรวจเลือกเข้ารับราชการทหารกองประจำการ</a></td>
          </tr>
          <tr>
            <td>13</td>
            <td><a href="http://bit.ly/2qYi2Vr" target="_blank">แบบฟอร์มขอใช้สถานที่ภายในวิทยาเขตภูเก็ต</a></td>
          </tr>
          <tr>
            <td>14</td>
            <td><a href="http://bit.ly/2q4QcHT" target="_blank">แบบฟอร์มขอเบิกยา</a></td>
          </tr>

        </tbody>
      </table></text>
    </div>

    <!-- table for account -->
    <div class="container">
      <text><h2>งานกิจกรรม</h2><br>
      <!-- The .table-condensed class makes a table more compact by cutting cell padding in half: -->
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>ลำดับ</th>
            <th>หัวข้อ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><a href="http://bit.ly/2q1Xdeo" target="_blank">แบบคำร้องทั่วไป</a></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="http://bit.ly/2pivRkV" target="_blank">แบบฟอร์มแจ้งชั่วโมงกิจกรรมตกหล่น</a></td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="http://bit.ly/2pieNvH" target="_blank">แบบคำร้องเเจ้งทำกิจกรรมไม่ครบตามโครงสร้าง</a></td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="http://bit.ly/2qY3TaH" target="_blank">ใบคำร้องขอใบรับรองการทำกิจกรรมนักศึกษา</a></td>
          </tr>
          <tr>
            <td>5</td>
            <!-- link failed -->
            <td><a href="http://bit.ly/2q23sP8" target="_blank">แบบฟอร์มจัดหาพัสดุ 002</a></td>
          </tr>
          <tr>
            <td>6</td>
            <td><a href="http://bit.ly/2qYeuCs" target="_blank">แบบฟอร์มขออนุมัติบันทึก ชม.กิจกรรม (สำหรับคณะ-หน่วยงาน)</a></td>
          </tr>
          <tr>
            <td>7</td>
            <td><a href="http://bit.ly/2q1SGZl" target="_blank">แบบฟอร์มขออนุมัติจัดกิจกรรมนักศึกษา (สำหรับองค์การ-สภา-ชมรม-กลุ่มกิจกรรม)</a></td>
          </tr>
          <tr>
            <td>8</td>
            <td><a href="http://bit.ly/2q4BQaf" target="_blank">แบบรายงานประเมินผลโครงการกิจกรรมนักศึกษา</a></td>
          </tr>
          <tr>
            <td>9</td>
            <td><a href="http://bit.ly/2q0SwRr" target="_blank">แบบฟอร์มคำร้องขอหนังสือติดต่อหน่วยงานภายนอก</a></td>
          </tr>
          <tr>
            <td>10</td>
            <td><a href="http://bit.ly/2q124fn" target="_blank">แบบฟอร์มขออนุมัติเบิกจ่ายกิจกรรมโครงการ</a></td>
          </tr>
          <tr>
            <td>11</td>
            <td><a href="http://bit.ly/2pxQd60" target="_blank">แบบฟอร์มบันทึกรายชื่อกิจกรรมนักศึกษา</a></td>
          </tr>
          <tr>
            <td>12</td>
            <td><a href="http://bit.ly/2pizxTV" target="_blank">แบบฟอร์มขอจัดตั้งชมรมใหม่ ปี 2560</a></td>
          </tr>
          <tr>
            <td>13</td>
            <td><a href="http://bit.ly/2q16m6B" target="_blank">แบบฟอร์มการเขียนโครงการสำหรับองค์กรกิจกรรม</a></td>
          </tr>
          <tr>
            <td>14</td>
            <td><a href="http://bit.ly/2qPW5LS" target="_blank">แบบฟอร์มขอจัดตั้งชมรมปี 2560</a></td>
          </tr>
          <tr>
            <td>15</td>
            <td><a href="http://bit.ly/2q207jr" target="_blank">แบบฟอร์มทะเบียนคุมพัสดุ/ครุภัณฑ์</a></td>
          </tr>
        </tbody>
      </table></text>
    </div>


    </body>
    </html>


@endsection
