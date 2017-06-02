@extends('layouts.master')
@section('content')

<!DOCTYPE HTML>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<div class="header">
		<div class="header_top">
			<div class="container">
				<div class="logo">
					<a href="index.html">FASHION</a>
				</div>
				<ul class="shopping_grid">
				      <a href="#"><li>Join</li></a>
				      <a href="login.html"><li>Sign In</li></a>
				      <a href="#"><li><span class="m_1">Shopping Bag</span>&nbsp;&nbsp;(0) &nbsp;<img src="images/bag.png" alt=""/></li></a>
				      <div class="clearfix"> </div>
				</ul>
			    <div class="clearfix"> </div>
			</div>
		</div>		
		<div class="container">
			<a class="toggleMenu" href="#">Menu</a>					
	          	<ul id="nav">					
					<?php foreach ($categories as $category): ?>
						<?php if($category->parent_id == 0): ?>
							<li>
								<?php if(count($category->childs)): ?>	    							
									<a href="{{ url('/') }}?cat={{$category->id}}">{{$category->name}}<b class="caret"></b></a>
	    						<?php else: ?>
	    							<a href="{{ url('/') }}?cat={{$category->id}}">{{$category->name}}</b></a>
	    						<?php endif; ?>		    						
								<?php if(count($category->childs)): ?>
									@include('Admin.Category.manageChild',['childs' => $category->childs])
							    <?php endif; ?>							
	    					</li>
						<?php endif; ?>
					<?php endforeach ?>						    	
				</ul>				 
	      </div>
	</div>	
</body>
</html>		
@endSection