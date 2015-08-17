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
                    <img class="ui centered medium image" src="<% $contents[$i]->cover_url %>">
                    <div class="content">
                        <div class="header"><a href="/content/<%$contents[$i]->id%>"><% $contents[$i]->title %></a></div>
                        <div class="meta"><% $contents[$i]->updated_at->diffForHumans() %></div>
                        <div class="description">
                            <%  str_limit(preg_replace('/(<.*?>)|(&.*?;)/', '', $contents[$i]->content),150) %>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>

            <div class="column">

                <?php while ($i < $size) : ?>
                    <h2 class="ui header">
                        <img class="ui image" src="<% $contents[$i]->cover_url %>">
                        <div class="content">
                            <% $contents[$i]->title %>
                        </div>
                    </h2>

                <?php $i++; ?>
                <?php endwhile;?>
            </div>
            <?php endwhile; ?>


        </div>

    </div>

@endsection