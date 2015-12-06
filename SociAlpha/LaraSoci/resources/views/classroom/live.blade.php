@extends('layout.main')


@section('content')
<iframe src="http://player.twitch.tv/?video=v28514680" frameborder="0" scrolling="no" height="500" width="940"></iframe><a href="http://www.twitch.tv/nicotugz?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px;text-decoration:underline;">Watch live video from nicotugz on www.twitch.tv</a>
<div style="border: 3px solid rgb(201, 0, 1); overflow: hidden; margin: 15px auto; max-width: 736px;">
	<iframe scrolling="no" src="{{url('chat')}}" style="border: 0px none; margin-left: -185px; height: 859px; margin-top: -533px; width: 926px;">
</iframe>
</div>
@stop