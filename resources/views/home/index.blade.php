@extends('home.layout')


@section('css')
    <link href="/components/semantic-ui/dist/components/card.min.css" rel="stylesheet" type="text/css">

    <%--<link href="/app/home/css/semantic/card2.css" rel="stylesheet" type="text/css">--%>
@stop

@section('jsTop')
    <script src="/components/masonry/dist/masonry.pkgd.min.js"></script>
    <script type="text/javascript">

        $(window).load(function() {
            $(function(){
                $('.masonr').masonry({
                    itemSelector: '.brick',
                    isAnimated: false,
                    gutter: 12,
                    isFitWidth: true,
//                    columnWidth: function ( containerWidth ) {
//                        return containerWidth / 2;
//                    }
                    columnWidth: 292
                    // columnWidth: 271 // no margin
                });
            });
        });

    </script>
@stop

@section('content')
    <%--<div class="ui fluid red card">--%>
        <%--<div class="dimmable image">--%>
            <%--<div class="ui dimmer dawning">--%>
                <%--<div class="content">--%>
                    <%--<div class="rt-conner-card">--%>
                        <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                            <%--<div class="hidden content">--%>
                                <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                            <%--</div>--%>
                            <%--<div class="visible content">--%>
                                <%--<i class="share alternate icon"></i>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
            <%--<img src="/app/home/images/naka.jpg">--%>
        <%--</div>--%>
        <%--<div class="ui fitted divider"></div>--%>

        <%--<div class="content">--%>
            <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
            <%--<div class="meta">--%>
                <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="extra content dark-border">--%>
            <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
            <%--<div class="right aligned"><a href="#">--%>
                    <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
            <%--<div class="left aligned">--%>
                <%--<i class="black horizontally flipped tag icon"></i>--%>
                <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
            <%--</div>--%>
        <%--</div>--%>
    <%--</div>--%>

    <%--div.ui.equa--%>


        <div class="ui three colum grid">
            <div class="colum">
                <div class="ui fluid red card">
                    <div class="dimmable image">
                        <div class="ui dimmer dawning">
                            <div class="content">
                                <div class="rt-conner-card">
                                    <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                        <div class="hidden content">
                                            <span class="supermarket-font big-font">แบ่งปัน</span>
                                        </div>
                                        <div class="visible content">
                                            <i class="share alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/app/home/images/naka.jpg">
                    </div>
                    <div class="ui fitted divider"></div>

                    <div class="content">
                        <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                        <div class="meta">
                            <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                            <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                        </div>
                    </div>
                    <div class="extra content dark-border">
                        <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                        <div class="right aligned"><a href="#">
                                <span class="red-font underline-font">อ่านต่อ</span></a></div>
                        <div class="left aligned">
                            <i class="black horizontally flipped tag icon"></i>
                            <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colum">
                <div class="ui fluid red card">
                    <div class="dimmable image">
                        <div class="ui dimmer dawning">
                            <div class="content">
                                <div class="rt-conner-card">
                                    <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                        <div class="hidden content">
                                            <span class="supermarket-font big-font">แบ่งปัน</span>
                                        </div>
                                        <div class="visible content">
                                            <i class="share alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/app/home/images/dance.jpg">
                    </div>
                    <div class="ui fitted divider"></div>

                    <div class="content">
                        <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                        <div class="meta">
                            <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                            <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                        </div>
                    </div>
                    <div class="extra content dark-border">
                        <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                        <div class="right aligned"><a href="#">
                                <span class="red-font underline-font">อ่านต่อ</span></a></div>
                        <div class="left aligned">
                            <i class="black horizontally flipped tag icon"></i>
                            <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colum">
                <div class="ui fluid red card">
                    <div class="dimmable image">
                        <div class="ui dimmer dawning">
                            <div class="content">
                                <div class="rt-conner-card">
                                    <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                        <div class="hidden content">
                                            <span class="supermarket-font big-font">แบ่งปัน</span>
                                        </div>
                                        <div class="visible content">
                                            <i class="share alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/app/home/images/naka.jpg">
                    </div>
                    <div class="ui fitted divider"></div>

                    <div class="content">
                        <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                        <div class="meta">
                            <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                            <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                        </div>
                    </div>
                    <div class="extra content dark-border">
                        <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                        <div class="right aligned"><a href="#">
                                <span class="red-font underline-font">อ่านต่อ</span></a></div>
                        <div class="left aligned">
                            <i class="black horizontally flipped tag icon"></i>
                            <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colum">
                <div class="ui fluid red card">
                    <div class="dimmable image">
                        <div class="ui dimmer dawning">
                            <div class="content">
                                <div class="rt-conner-card">
                                    <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                        <div class="hidden content">
                                            <span class="supermarket-font big-font">แบ่งปัน</span>
                                        </div>
                                        <div class="visible content">
                                            <i class="share alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/app/home/images/dance.jpg">
                    </div>
                    <div class="ui fitted divider"></div>

                    <div class="content">
                        <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                        <div class="meta">
                            <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                            <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                        </div>
                    </div>
                    <div class="extra content dark-border">
                        <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                        <div class="right aligned"><a href="#">
                                <span class="red-font underline-font">อ่านต่อ</span></a></div>
                        <div class="left aligned">
                            <i class="black horizontally flipped tag icon"></i>
                            <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colum">
                <div class="ui fluid red card">
                    <div class="dimmable image">
                        <div class="ui dimmer dawning">
                            <div class="content">
                                <div class="rt-conner-card">
                                    <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                        <div class="hidden content">
                                            <span class="supermarket-font big-font">แบ่งปัน</span>
                                        </div>
                                        <div class="visible content">
                                            <i class="share alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/app/home/images/naka.jpg">
                    </div>
                    <div class="ui fitted divider"></div>

                    <div class="content">
                        <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                        <div class="meta">
                            <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                            <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                        </div>
                    </div>
                    <div class="extra content dark-border">
                        <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                        <div class="right aligned"><a href="#">
                                <span class="red-font underline-font">อ่านต่อ</span></a></div>
                        <div class="left aligned">
                            <i class="black horizontally flipped tag icon"></i>
                            <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colum">
                <div class="ui fluid red card">
                    <div class="dimmable image">
                        <div class="ui dimmer dawning">
                            <div class="content">
                                <div class="rt-conner-card">
                                    <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                        <div class="hidden content">
                                            <span class="supermarket-font big-font">แบ่งปัน</span>
                                        </div>
                                        <div class="visible content">
                                            <i class="share alternate icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/app/home/images/dance.jpg">
                    </div>
                    <div class="ui fitted divider"></div>

                    <div class="content">
                        <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                        <div class="meta">
                            <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                            <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                        </div>
                    </div>
                    <div class="extra content dark-border">
                        <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                        <div class="right aligned"><a href="#">
                                <span class="red-font underline-font">อ่านต่อ</span></a></div>
                        <div class="left aligned">
                            <i class="black horizontally flipped tag icon"></i>
                            <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <%--<div class="infinite masonry js-masonry" data-masonry-options='{ "columnWidth": 200, "itemSelector": "bric" }'>--%>
    <div class="infinite masonr zen">
        <div class="brick">
            <div class="ui fluid red card">
                <div class="dimmable image">
                    <div class="ui dimmer dawning">
                        <div class="content">
                            <div class="rt-conner-card">
                                <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                    <div class="hidden content">
                                        <span class="supermarket-font big-font">แบ่งปัน</span>
                                    </div>
                                    <div class="visible content">
                                        <i class="share alternate icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="/app/home/images/naka.jpg">
                </div>
                <div class="ui fitted divider"></div>

                <div class="content">
                    <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                    <div class="meta">
                        <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                        <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                    </div>
                </div>
                <div class="extra content dark-border">
                    <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                    <div class="right aligned"><a href="#">
                            <span class="red-font underline-font">อ่านต่อ</span></a></div>
                    <div class="left aligned">
                        <i class="black horizontally flipped tag icon"></i>
                        <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="brick">
            <div class="ui red card">
                <div class="dimmable image">
                    <div class="ui dimmer dawning">
                        <div class="content">
                            <div class="rt-conner-card">
                                <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                    <div class="hidden content">
                                        <span class="supermarket-font big-font">แบ่งปัน</span>
                                    </div>
                                    <div class="visible content">
                                        <i class="share alternate icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="/app/home/images/dance.jpg">
                </div>
                <div class="ui fitted divider"></div>

                <div class="content">
                    <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                    <div class="meta">
                        <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                        <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                    </div>
                </div>
                <div class="extra content dark-border">
                    <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                    <div class="right aligned"><a href="#">
                            <span class="red-font underline-font">อ่านต่อ</span></a></div>
                    <div class="left aligned">
                        <i class="black horizontally flipped tag icon"></i>
                        <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="brick">
            <div class="ui red card">
                <div class="dimmable image">
                    <div class="ui dimmer dawning">
                        <div class="content">
                            <div class="rt-conner-card">
                                <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                    <div class="hidden content">
                                        <span class="supermarket-font big-font">แบ่งปัน</span>
                                    </div>
                                    <div class="visible content">
                                        <i class="share alternate icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="/app/home/images/naka.jpg">
                </div>
                <div class="ui fitted divider"></div>

                <div class="content">
                    <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                    <div class="meta">
                        <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                        <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                    </div>
                </div>
                <div class="extra content dark-border">
                    <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                    <div class="right aligned"><a href="#">
                            <span class="red-font underline-font">อ่านต่อ</span></a></div>
                    <div class="left aligned">
                        <i class="black horizontally flipped tag icon"></i>
                        <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="brick">
            <div class="ui red card">
                <div class="dimmable image">
                    <div class="ui dimmer dawning">
                        <div class="content">
                            <div class="rt-conner-card">
                                <div class="ui small black verydarkgray-bg-bt animated fade buttun">
                                    <div class="hidden content">
                                        <span class="supermarket-font big-font">แบ่งปัน</span>
                                    </div>
                                    <div class="visible content">
                                        <i class="share alternate icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="/app/home/images/dance.jpg">
                </div>
                <div class="ui fitted divider"></div>

                <div class="content">
                    <a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>
                    <div class="meta">
                        <a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>
                        <a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>
                    </div>
                </div>
                <div class="extra content dark-border">
                    <span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>
                    <div class="right aligned"><a href="#">
                            <span class="red-font underline-font">อ่านต่อ</span></a></div>
                    <div class="left aligned">
                        <i class="black horizontally flipped tag icon"></i>
                        <span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="brick">
            <div class="ui segment">5</div>
        </div>
        <div class="brick">
            <div class="ui segment">6</div>
        </div>
        <div class="brick">
            <div class="ui segment">7</div>
        </div>
        <div class="brick">
            <div class="ui segment">8</div>
        </div>
        <div class="brick">
            <div class="ui segment">9</div>
        </div>
        <div class="brick">
            <div class="ui segment">10</div>
        </div>
        <div class="brick">
            <div class="ui segment">11</div>
        </div>
        <div class="brick">
            <div class="ui segment">12</div>
        </div>
        <div class="brick">
            <div class="ui segment">13</div>
        </div>
        <div class="brick">
            <div class="ui segment">14</div>
        </div>
        <div class="brick">
            <div class="ui segment">15</div>
        </div>
        <div class="brick">
            <div class="ui segment">16</div>
        </div>
    </div>



    <%--<div class="masonry">--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/naka.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/dance.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/naka.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/dance.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/naka.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/dance.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/naka.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/dance.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/naka.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/dance.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/naka.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="brick">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/dance.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
    <%--</div>--%>



<%--<div class="ui equal width grid">--%>
    <%--<div class="low">--%>
        <%--<div class="colum">--%>
            <%--<div class="ui fluid red card">--%>
                <%--<div class="dimmable image">--%>
                    <%--<div class="ui dimmer dawning">--%>
                        <%--<div class="content">--%>
                            <%--<div class="rt-conner-card">--%>
                                <%--<div class="ui small black verydarkgray-bg-bt animated fade buttun">--%>
                                    <%--<div class="hidden content">--%>
                                        <%--<span class="supermarket-font big-font">แบ่งปัน</span>--%>
                                    <%--</div>--%>
                                    <%--<div class="visible content">--%>
                                        <%--<i class="share alternate icon"></i>--%>
                                    <%--</div>--%>
                                <%--</div>--%>
                            <%--</div>--%>
                        <%--</div>--%>
                    <%--</div>--%>
                    <%--<img src="/app/home/images/naka.jpg">--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header supermarket-font bigger-font">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="" class="supermarket-font big-font">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="" class="supermarket-font big-font">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content dark-border">--%>
                    <%--<span class="black-font supermarket-font large-font">คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned"><a href="#">--%>
                            <%--<span class="red-font underline-font">อ่านต่อ</span></a></div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="black horizontally flipped tag icon"></i>--%>
                        <%--<span class="black-font supermarket-font big-font">หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="colum">--%>
            <%--<div class="ui red card">--%>
                <%--<div class="image">--%>
                    <%--<div class="ui fluid rounded image">--%>
                        <%--<a href="" class="ui corner labell pin-share">--%>
                            <%--<i class="teal share alternate icon pin-icon"></i>--%>
                        <%--</a>--%>
                        <%--<img src="/app/home/images/sample.png">--%>
                        <%--<img src="/app/home/images/white.png">--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content">--%>
                    <%--<span>คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned">อ่านต่อ</div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="horizontally flipped tag icon"></i>--%>
                        <%--<span>หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
        <%--<div class="colum">--%>
            <%--<div class="ui red card">--%>
                <%--<div class="image">--%>
                    <%--<div class="ui fluid rounded image">--%>
                        <%--<a href="" class="ui corner labell pin-share">--%>
                            <%--<i class="teal share alternate icon pin-icon"></i>--%>
                        <%--</a>--%>
                        <%--<img src="/app/home/images/sample.png">--%>
                        <%--<img src="/app/home/images/white.png">--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="ui fitted divider"></div>--%>

                <%--<div class="content">--%>
                    <%--<a href="" class="header">ความหมายคำว่า กว๊าน</a>--%>
                    <%--<div class="meta">--%>
                        <%--<a href="">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                        <%--<a href="">15 มีนาคม 2558</a>--%>
                    <%--</div>--%>
                <%--</div>--%>
                <%--<div class="extra content">--%>
                    <%--<span>คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                    <%--<div class="right aligned">อ่านต่อ</div>--%>
                    <%--<div class="left aligned">--%>
                        <%--<i class="horizontally flipped tag icon"></i>--%>
                        <%--<span>หมวดข้อมูลทั่วไป</span>--%>
                    <%--</div>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
    <%--</div>--%>
<%--</div>--%>

<%--<div class="ui grid">--%>
    <%--<div class="eight wide colum">--%>
        <%--<div class="ui red card">--%>
            <%--<div class="image">--%>
                <%--<div class="ui fluid rounded image">--%>
                    <%--<a href="" class="ui corner labell pin-share">--%>
                        <%--<i class="teal share alternate icon pin-icon"></i>--%>
                    <%--</a>--%>
                    <%--<img src="/app/home/images/sample.png">--%>
                    <%--<img src="/app/home/images/white.png">--%>
                <%--</div>--%>
            <%--</div>--%>
            <%--<div class="ui fitted divider"></div>--%>

            <%--<div class="content">--%>
                <%--<a href="" class="header">ความหมายคำว่า กว๊าน</a>--%>
                <%--<div class="meta">--%>
                    <%--<a href="">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                    <%--<a href="">15 มีนาคม 2558</a>--%>
                <%--</div>--%>
            <%--</div>--%>
            <%--<div class="extra content">--%>
                <%--<span>คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                <%--<div class="right aligned">อ่านต่อ</div>--%>
                <%--<div class="left aligned">--%>
                    <%--<i class="horizontally flipped tag icon"></i>--%>
                    <%--<span>หมวดข้อมูลทั่วไป</span>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
    <%--</div>--%>
    <%--<div class="eight wide colum">--%>
        <%--<div class="ui red card">--%>
            <%--<div class="image">--%>
                <%--<div class="ui fluid rounded image">--%>
                    <%--<a href="" class="ui corner labell pin-share">--%>
                        <%--<i class="teal share alternate icon pin-icon"></i>--%>
                    <%--</a>--%>
                    <%--<img src="/app/home/images/sample.png">--%>
                    <%--<img src="/app/home/images/white.png">--%>
                <%--</div>--%>
            <%--</div>--%>
            <%--<div class="ui fitted divider"></div>--%>

            <%--<div class="content">--%>
                <%--<a href="" class="header">ความหมายคำว่า กว๊าน</a>--%>
                <%--<div class="meta">--%>
                    <%--<a href="">หนังสือบันทึกกว๊านพะเยา</a><br/>--%>
                    <%--<a href="">15 มีนาคม 2558</a>--%>
                <%--</div>--%>
            <%--</div>--%>
            <%--<div class="extra content">--%>
                <%--<span>คำว่า กว๊าน เป็นคำในบ้านพื้นเมืองโบราณที่ใช้เรียก บึงน้ำขนาดใหญ่</span>--%>
                <%--<div class="right aligned">อ่านต่อ</div>--%>
                <%--<div class="left aligned">--%>
                    <%--<i class="horizontally flipped tag icon"></i>--%>
                    <%--<span>หมวดข้อมูลทั่วไป</span>--%>
                <%--</div>--%>
            <%--</div>--%>
        <%--</div>--%>
    <%--</div>--%>
<%--</div>--%>
@stop

@section('javascript')
<%--<script type="text/javascript" src="/app/home/js/app.js"></script>--%>
<script>
    $('.ui.card .image').dimmer({
        on: 'hover'
    });
</script>
<script src="/components/semantic-ui/dist/components/visibility.js"></script>
<script>
    $('.infinite .masonry')
            .visibility({
                once: false,
                // update size when new content loads
                observeChanges: true,
                // load content on bottom edge visible
                onBottomVisible: function() {
                    // loads a max of 5 times
                    window.loadFakeContent();
                }
            })
    ;
</script>
<script src="/components/angular/angular.js"></script>

<!--[if lte IE 9]><![endif]-->
<%--<script src="/components/masonry/dist/masonry.pkgd.min.js"></script>--%>
<%--<script src="/components/masonry/dist/masonry.pkgd.min.js"></script>--%>
<script>
    // var container = document.querySelector('.masonry');
    // var msnry = new Masonry( masonry, {
    //     // options
    //     columnWidth: 200,
    //     itemSelector: '.brick'
    // });


</script>

@stop