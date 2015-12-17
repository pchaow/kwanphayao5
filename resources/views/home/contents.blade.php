@extends('home.layout')

@section('content')

    <?php
    $i = 0;
    $size = count($contents);
    ?>



    <div class="ui grid">
        <?php while ($i < $size) : ?>
        <div class="row">
            <div class="column" style="padding-right: 0px;">
                @if(isset($contents[$i]->cover_url))
                    <img class="ui small image" src="<% $contents[$i]->cover_url %>?w=100&h=100&fit=crop">
                @else
                    <img class="ui small image" src="/images/square-image.png"/>
                @endif
            </div>
            <div class="thirteen wide column">
                <h3 style="margin-bottom: 0px;">
                    <a href="/content/<% $contents[$i]->id %>">
                        <% $contents[$i]->title%>
                    </a>
                </h3>

                <div>
                    <% str_limit(preg_replace('/(<.*?>)|(&.*?;)/', '', $contents[$i]->content),150) %>
                </div>
            </div>

        </div>
        <div class="ui divider" style="margin-top:0px; margin-bottom: 0px;"></div>
        <?php $i++; ?>
        <?php endwhile; ?>
        <div class="two column row">
            <div class="column">
                <?php if($contents->currentPage() != 1): ?>
                <a href="<?php echo $contents->previousPageUrl() ?>" class="ui labeled icon button">
                    <i class="left chevron icon"></i>
                    Back
                </a>
                <?php endif;?>
            </div>
            <div class="right aligned column">
                <?php if($contents->currentPage() != $contents->lastPage()): ?>
                <a href="<?php echo $contents->nextPageUrl() ?>" class="ui right labeled icon button">
                    <i class="right arrow icon"></i>
                    Next
                </a>
                <?php endif;?>
            </div>
        </div>
    </div>



@endsection