@extends('home.layout')

@section('content')
    <div class="ui grid">
        <div class="wide column">
            <div class="ui raised segment">
            <span class="ui massive ribbon label"
                  style="background-color: #009695;color:white;"><% $content->title %></span>
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

                <div class="ui medium header">เนื้อหาที่เกี่ยวข้อง</div>
                <div class="ui divider"></div>
                <ul>
                    <?php foreach ($relateContent as $rc): ?>
                    <li>
                        <a href="/content/<% $rc->id %>">
                            <% $rc->title %>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
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