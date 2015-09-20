@extends('home.layout')

@section('content')
    <div class="ui sizer vertical segment">
        <div class="ui large header"><% $content->title %></div>
        <div class="ui divider"></div>
        <div>
            <?php echo $content->content; ?>
        </div>

        <div class="ui medium header">เอกสารอ้างอิง</div>
        <div class="ui divider"></div>
        <ul>
            <?php foreach ($content->bibliographies as $b): ?>
            <li><?php echo $b->short_text; ?></li>
            <?php endforeach;?>
        </ul>
        @if($eval == null)
            <div class="ui medium header">แบบสอบถามประเมินเนื้อหา</div>
            <div class="ui divider"></div>
            <div id="content_eval_app">
                <form class="ui fluid form" method="post" action="/api/content/<?php echo $content->id;?>/eval">

                    <input type="hidden" name="content['id']" value="<?php echo $content->id; ?>"/>

                    <div class="ui small header">ส่วนที่ 1 ข้อมูลทั่วไป</div>
                    @if(!Auth::user())
                        <div class="two fields">
                            <div class="field">
                                <label>ชื่อ</label>
                                <input type="text" name="firstname" placeholder="First Name">
                            </div>
                            <div class="field">
                                <label>นามสกุล</label>
                                <input type="text" name="lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>อายุ</label>
                                <input type="number" name="age" placeholder="Age">
                            </div>
                            <div class="field">
                                <label>เพศ</label>

                                <div class="sex ui radio checkbox">
                                    <input type="radio" name="sex" value="ชาย" tabindex="0" class="hidden">
                                    <label>ชาย</label>
                                </div>
                                <div class="sex ui radio checkbox">
                                    <input type="radio" name="sex" value="หญิง" tabindex="0" class="hidden">
                                    <label>หญิง</label>
                                </div>
                            </div>
                        </div>
                        <div class="two fields">

                            <div class="field">
                                <label>การศึกษา</label>
                                <select class="dropdown" name="graduation">
                                    <option>ประถม</option>
                                    <option>มัธยมต้น</option>
                                    <option>มัธยมปลาย</option>
                                    <option>ปวช</option>
                                    <option>ปวส</option>
                                    <option>อนุปริญญา</option>
                                    <option>ปริญญาตรี</option>
                                    <option>ปริญญาโท</option>
                                    <option>ปริญญาเอก</option>
                                </select>
                            </div>

                            <div class="field">
                                <label>อาชีพ</label>
                                <input type="text" name="job" placeholder="">
                            </div>
                        </div>

                        <div class="two fields">

                            <div class="field">
                                <label>ตำแหน่ง</label>
                                <input type="text" name="position">
                            </div>
                            <div class="field">
                                <label>หน่วยงาน</label>
                                <input type="text" name="department">
                            </div>
                        </div>
                    @else
                        @if(Auth::user()->logo)
                            <img class="ui avatar avatar-menu image"
                                 src="<%Auth::user()->logo->url%>?h=200">
                        @else
                            <img class="ui avatar avatar-menu image" src="/images/square-image.png">
                        @endif
                        @if(Auth::user())
                            <span><%Auth::user()->email%></span>
                        @endif
                    @endif

                    <div class="ui small header">ส่วนที่ 2 การประเมินความเหมาะสมของเนื้อหา</div>
                    <table class="ui celled structured table">
                        <thead>
                        <tr>
                            <th class="center aiigned" rowspan="2">รายการประเมิน</th>
                            <th class="center aligned" colspan="5">ระดับความเหมาะสม</th>
                        </tr>
                        <tr>
                            <th class="two wide center aligned">มากที่สุด</th>
                            <th class="two wide center aligned">มาก</th>
                            <th class="two wide center aligned">ปานกลาง</th>
                            <th class="two wide center aligned">น้อย</th>
                            <th class="two wide center aligned">น้อยที่สุด</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1. ความถูกต้องของเนื้อหา</td>
                            <td class="center aligned">
                                <div class="eval_1 ui radio checkbox">
                                    <input type="radio" name="eval_1" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_1 ui radio checkbox">
                                    <input type="radio" name="eval_1" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_1 ui radio checkbox">
                                    <input type="radio" name="eval_1" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_1 ui radio checkbox">
                                    <input type="radio" name="eval_1" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_1 ui radio checkbox">
                                    <input type="radio" name="eval_1" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2. ความทันสมัยของเนื้อหา</td>
                            <td class="center aligned">
                                <div class="eval_2 ui radio checkbox">
                                    <input type="radio" name="eval_2" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_2 ui radio checkbox">
                                    <input type="radio" name="eval_2" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_2 ui radio checkbox">
                                    <input type="radio" name="eval_2" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_2 ui radio checkbox">
                                    <input type="radio" name="eval_2" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_2 ui radio checkbox">
                                    <input type="radio" name="eval_2" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3. การแบ่งหมวดหมู่ของเนื้อหา</td>
                            <td class="center aligned">
                                <div class="eval_3 ui radio checkbox">
                                    <input type="radio" name="eval_3" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_3 ui radio checkbox">
                                    <input type="radio" name="eval_3" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_3 ui radio checkbox">
                                    <input type="radio" name="eval_3" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_3 ui radio checkbox">
                                    <input type="radio" name="eval_3" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_3 ui radio checkbox">
                                    <input type="radio" name="eval_3" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4. ความสมบูรณ์ของเนื้อหา</td>
                            <td class="center aligned">
                                <div class="eval_4 ui radio checkbox">
                                    <input type="radio" name="eval_4" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_4 ui radio checkbox">
                                    <input type="radio" name="eval_4" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_4 ui radio checkbox">
                                    <input type="radio" name="eval_4" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_4 ui radio checkbox">
                                    <input type="radio" name="eval_4" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_4 ui radio checkbox">
                                    <input type="radio" name="eval_4" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5. ความเหมาะสมในการจัดเรียงลำดับเนื้อหา</td>
                            <td class="center aligned">
                                <div class="eval_5 ui radio checkbox">
                                    <input type="radio" name="eval_5" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_5 ui radio checkbox">
                                    <input type="radio" name="eval_5" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_5 ui radio checkbox">
                                    <input type="radio" name="eval_5" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_5 ui radio checkbox">
                                    <input type="radio" name="eval_5" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_5 ui radio checkbox">
                                    <input type="radio" name="eval_5" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6. ความเหมาะสมของปริมาณเนื้อหา</td>
                            <td class="center aligned">
                                <div class="eval_6 ui radio checkbox">
                                    <input type="radio" name="eval_6" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_6 ui radio checkbox">
                                    <input type="radio" name="eval_6" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_6 ui radio checkbox">
                                    <input type="radio" name="eval_6" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_6 ui radio checkbox">
                                    <input type="radio" name="eval_6" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_6 ui radio checkbox">
                                    <input type="radio" name="eval_6" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7. ความเหมาะสมของภาษาที่ใช้</td>
                            <td class="center aligned">
                                <div class="eval_7 ui radio checkbox">
                                    <input type="radio" name="eval_7" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_7 ui radio checkbox">
                                    <input type="radio" name="eval_7" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_7 ui radio checkbox">
                                    <input type="radio" name="eval_7" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_7 ui radio checkbox">
                                    <input type="radio" name="eval_7" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_7 ui radio checkbox">
                                    <input type="radio" name="eval_7" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8. ภาพประกอบสื่อความหมายตรงกับเนื้อหา</td>
                            <td class="center aligned">
                                <div class="eval_8 ui radio checkbox">
                                    <input type="radio" name="eval_8" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_8 ui radio checkbox">
                                    <input type="radio" name="eval_8" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_8 ui radio checkbox">
                                    <input type="radio" name="eval_8" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_8 ui radio checkbox">
                                    <input type="radio" name="eval_8" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_8 ui radio checkbox">
                                    <input type="radio" name="eval_8" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9. เนื้อหาเหมาะสมกับกลุ่มเป้าหมาย</td>
                            <td class="center aligned">
                                <div class="eval_9 ui radio checkbox">
                                    <input type="radio" name="eval_9" value="5" tabindex="0" class="hidden">
                                    <label>5</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_9 ui radio checkbox">
                                    <input type="radio" name="eval_9" value="4" tabindex="0" class="hidden">
                                    <label>4</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_9 ui radio checkbox">
                                    <input type="radio" name="eval_9" checked="" value="3" tabindex="0" class="hidden">
                                    <label>3</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_9 ui radio checkbox">
                                    <input type="radio" name="eval_9" value="2" tabindex="0" class="hidden">
                                    <label>2</label>
                                </div>
                            </td>
                            <td class="center aligned">
                                <div class="eval_9 ui radio checkbox">
                                    <input type="radio" name="eval_9" value="1" tabindex="0" class="hidden">
                                    <label>1</label>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <button class="ui button" type="submit">Submit</button>

                </form>
            </div>
        @endif
    </div>

@endsection

@section('js')

    <script type="text/javascript">
        $('.ui.radio.checkbox')
                .checkbox()
        ;
        $('select.dropdown')
                .dropdown()
        ;

    </script>


@endsection