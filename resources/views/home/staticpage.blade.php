@extends('home.layout')

@section('content')
    <div class="ui sizer vertical segment">
        <div class="ui large header"><% $content->title %></div>
        <div class="ui divider"></div>
        <div>
            <?php echo $content->content; ?>
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