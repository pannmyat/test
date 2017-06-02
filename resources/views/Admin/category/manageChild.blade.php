<ul>
	<?php foreach($childs as $child): ?>
		<li class="subitem">
			<?php if(count($child->childs)): ?>		
				<a href="{{ url('/') }}?cat={{$child->id}}">{{$child->name}}<b class="caret"></b></a>
			<?php else: ?>
				<a href="{{ url('/') }}?cat={{$child->id}}">{{$child->name}}</b></a>
			<?php endif; ?>	
			<?php if(count($child->childs)): ?>
	            @include('Admin.Category.manageChild',['childs' => $child->childs])
	    	<?php endif; ?>		
		</li>
	<?php endforeach ?>
</ul>

