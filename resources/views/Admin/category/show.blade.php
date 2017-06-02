<!DOCTYPE html>
<html>
<head>
	<title>Show Category</title>
</head>
<body>
	<div class="container">
		<ul>
			<?php foreach ($categories as $category): ?> 
				<?php if($category->parent_id == 0): ?>
					<li>					
						{{ $category->name }}					
						<?php if(count($category->childs)): ?>
							@include('Admin.Category.manageChild',['childs' => $category->childs])
					    <?php endif; ?>					
					</li>
				<?php endif; ?>
			<?php endforeach ?>
		</ul>
	</div>
</body>
</html>