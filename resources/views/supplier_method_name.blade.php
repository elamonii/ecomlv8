<h1>welcome {{ $role }} {{ $index }}</h1>

@php

	print_r($data);

@endphp

<?php echo "ok"; ?>

@for($i=0;$i < 100;$i++)
	<h1>Hello world {{ $i }}</h1>
@endfor


@php $name = "<h1>mr korim</h1>"; @endphp

@if($name == "korim")
	{{ "if is ture" }}
@elseif($name == "mr korim")
	<h1>else if is true</h1>
@else
	{{ "hello from else" }}
@endif

@php
	
	if($name == "korim"){
	 echo "if is ture";
	}
	elseif($name == "mr korim"){
		echo "<h1>else if is true</h1>";
	}
	else{
		echo "hello from else";
	}
	
@endphp

@isset($name)
	name 1 found
@endisset


{!! $name !!}

@foreach($information as $info)

	Name is: {{ $info['name'] }} 
	Role is: {{ $info['role'] }} 
	Section is: {{ $info['section'] }} <br>

@endforeach


