<?php

	echo PerchUtil::subnav($CurrentUser, array(
		array('page'=>array(
						'core/apps/content',
						'core/apps/content/page',
						'core/apps/content/page/add',
						'core/apps/content/page/edit',
						'core/apps/content/page/delete',
						'core/apps/content/edit',
						'core/apps/content/options',
						'core/apps/content/delete',
						'core/apps/content/denied',
						'core/apps/content/reorder',
						'core/apps/content/reorder/region'
						), 
				'label'=>'Add/Edit'),
		array('page'=>array(
						'core/apps/content/page/templates',
						'core/apps/content/page/templates/edit',
						'core/apps/content/page/templates/delete'), 
				'label'=>'Master pages', 'priv'=>'content.pages.configure')
	));

?>