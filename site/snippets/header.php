<header>
	<nav class="flex sm:px-8" role="navigation">
		<ul class="flex gap-2">
			<?php foreach ($site->pages()->listed() as $item) : ?>
				<li>
					<a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
				</li>
			<?php endforeach ?>
		</ul>
	</nav>
</header>