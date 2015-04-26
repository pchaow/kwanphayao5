@extends('home.layout')

@section('content')
<div class="ui grid">
    <div class="sixteen wide mobile eleven wide tablet twelve wide computer colum">
        <div class="ui raised segment">
            <a id="main-category-header" class="ui teal small ribbon labell">
                <h4 class="ui inverted header">ข้อมูลทั่วไปกว๊านพะเยา</h4>
            </a>
            <h5>หน่วยงานที่เกี่ยวข้องกับกว๊านพะเยา</h5>
            <h6 class="mediumgray supermarket-font">หนังสือ กว๊านพะเยา บทเรียนและความทรงจำ : ชัยวัฒน์ จันธิมา<br>18 กุมภาพันธ์ 2558</h6>
            <div class="ui divider"></div>
            <div class="ui grid">
                <div class="low">
                    <div class="sixteen wide mobile eight wide tablet ten wide computer colum">
                <p>ในการจัดการกว๊านพะเยามีหน่วยงานราชการหลายองค์กรที่ได้มีบทบาทเกี่ยวกับการอนุรักษ์และพัฒนากว๊านพะเยา โดยแต่ละองค์กรจะมีบทบาทที่แตกต่างกันตามนโยบายและภารกิจของหน่วยงาน รายละเอียดของบทบาทหน้าที่ขององค์กรต่างๆ มีดังนี้</p>
                <p>1. สำนักงานธนารักษ์จังหวัดพะเยา</p>
                <p>มีบทบาทหน้าที่ในการปกครอง ดูแล บำรุงรักษา จัดให้ใช้และจัดหาประโยชน์ในที่ราชพัสดุให้เป็นไปอย่างประหยัดและเกิดประโยชน์สูงสุด โดยการดำเนินการและประสานงานเกี่ยวกับที่ราชพัสดุในจังหวัด เช่น การเวนคืนที่ดิน การอนุญาตให้หน่วยงานราชการใช้ประโยชน์ในที่ดิน เป็นต้น โดยในส่วนของกว๊านพะเยาซึ่งเป็นที่ดินราชพัสดุแปลงหมายเลขทะเบียนที่ พย.7 (กว๊านพะเยา) มีเนื้อที่ 12,831-1-26-60 ไร่ เอกสารสิทธิ์ นสล. เลขที่ พย.0149<br><br></p>
                    </div>

                    <div class="sixteen wide mobile eight wide tablet six wide computer colum"">
                        <div class="">
                            <img class="ui rounded centered image" src="/app/home/images/sample.png">
                            <div class="ui attached header">
                                คำอธิบาย:<br>
                                ที่มา:<br>
                                วันที่:
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sixteen wide mobile five wide tablet four wide computer colum">
        {{--<h5 id="relate-content-header" class="ui top attached center aligned labell">หน่วยงานที่เกี่ยวข้องกับกว๊านพะเยา</h5>--}}
        <div id="relate-content" class="ui raised segment">
            <div id="relate-content-header" class="ui top attached labell">
                <h5 class="ui center aligned inverted header">
                    เนื้อหาที่เกี่ยวข้อง
                </h5>
            </div>

            <div class="ui divided list">
                <div class="item">
                    <img class="ui avatar image" src="/app/home/images/sample.png">
                    <div class="content">
                        <a href="" ><h4 class="ui header">ผลิตภัณฑ์ OTOP จ.พะเยา</h4></a>
                        <div class="description supermarket-font">โครงการพัฒนาศักยภาพ..</div>
                    </div>
                </div>
                <div class="item">
                    <img class="ui avatar image" src="/app/home/images/sample.png">
                    <div class="content">
                        <a href=""><h4 class="ui header">ข้อมูลจำเพาะกว๊านพะเยา</h4></a>
                        <div class="description supermarket-font">สร้างทำนบกั้นน้ำ พ.ศ.2482..</div>
                    </div>
                </div>
                <div class="item">
                    <img class="ui avatar image" src="/app/home/images/sample.png">
                    <div class="content">
                        <a href=""><h4 class="ui header">แหล่งต้นน้ำกว๊านพะเยา</h4></a>
                        <div class="description supermarket-font">น้ำที่ไหลลงสู่กว๊านพะเยา..</div>
                    </div>
                </div>
                <div class="item">
                    <img class="ui avatar image" src="/app/home/images/sample.png">
                    <div class="content">
                        <a href=""><h4 class="ui header">สถานภาพกว๊านพะเยาในปัจจุบัน</h4></a>
                        <div class="description supermarket-font">กว๊านพะเยา อยู่ในเขตอำเภอ..</div>
                    </div>
                </div>
                <div class="item">
                    <img class="ui avatar image" src="/app/home/images/sample.png">
                    <div class="content">
                        <a href=""><h4 class="ui header">การใช้ประโยชน์จากกว๊าน..</h4></a>
                        <div class="description supermarket-font">ภายหลังปี พ.ศ.2484 เมือง..</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('javascript')

@stop