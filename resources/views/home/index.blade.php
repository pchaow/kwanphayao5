@extends('home.layout')

@section('content')

    <div class="ui three column divided grid">
        <div class="two column stretched row">
            <?php
            $i = 0;
            $size = count($contents);
            ?>
            <?php while ($i < $size) : ?>
            <div class="column">
                <div id="mainSegment" class="ui segment">
                    @if(isset($contents[$i]->cover_url))
                        <img class="ui centered image" style="margin-bottom: 7px;"
                             src="<% $contents[$i]->cover_url %>?h=300">
                    @else
                        <img class="ui centered medium image" src="/images/square-image.png"/>
                    @endif


                    <div class="content">
                        <a class="header" href="/content/<%$contents[$i]->id%>"><% $contents[$i]->title %></a>

                        <div class="meta"><% $contents[$i]->updated_at->diffForHumans() %></div>
                        <div class="description">
                            <%  str_limit(preg_replace('/(<.*?>)|(&.*?;)/', '', $contents[$i]->content),300) %>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>

            <div class="column">

                <div class="ui six column grid">

                    <?php while ($i < $size) : ?>

                    <div class="row">
                        <div class="column" style="padding-right: 0px;">
                            @if(isset($contents[$i]->cover_url))
                                <img class="ui image" src="<% $contents[$i]->cover_url %>?w=100&h=100&fit=crop">
                            @else
                                <img class="ui image" src="/images/square-image.png"/>
                            @endif
                        </div>
                        <div class="thirteen wide column">
                            <h3 style="margin-bottom: 0px;"><a
                                        href="/content/<% $contents[$i]->id %>"><% $contents[$i]->title %></a></h3>

                            <div>
                                <%  str_limit(preg_replace('/(<.*?>)|(&.*?;)/', '', $contents[$i]->content),150) %>
                            </div>
                        </div>

                    </div>
                    <div class="ui divider" style="margin-top:0px; margin-bottom: 0px;"></div>
                    <?php $i++; ?>
                    <?php endwhile;?>

                </div>
                <h5><a href="/contents">บทความเก่า</a></h5>

            </div>
            <?php endwhile; ?>
        </div>
    </div>
@endsection