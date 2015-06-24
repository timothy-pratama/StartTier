@extends('header.master')

@section('navbar')
@include('navbar.index')
@stop

@section('content')
<div class="jumbotron">
  <h1>StartTier</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris hendrerit tristique velit pretium malesuada. Sed gravida lacus nec pretium egestas. Donec tincidunt fermentum purus non ultrices. Pellentesque at justo at magna facilisis tincidunt eget a lacus. Praesent ipsum dolor, aliquet et tincidunt ac, laoreet et augue. Pellentesque ultrices nisi id nunc faucibus, non bibendum augue sagittis. Integer non ante lacus. Quisque et dictum ante. Etiam ligula nisi, pellentesque at gravida ac, posuere id nisi. Curabitur sed rutrum elit, a finibus nulla. Praesent scelerisque dignissim velit ac vulputate. Nunc at ultrices lacus. In condimentum ac magna quis vulputate. Aliquam sem nunc, lacinia egestas aliquam quis, placerat vel nunc. Vivamus lacinia odio blandit nulla interdum luctus.</p>
</div>

<script>
    $('#menu_beranda').removeClass().addClass("active");
    $('#menu_investor').removeClass();
    $('#menu_startup').removeClass();
</script>
@stop