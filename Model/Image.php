<?php
App::uses('ImageManagerAppModel', 'ImageManager.Model');
/**
 * Image Model
 *
 */
class Image extends ImageManagerAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'path';
	
	public $actsAs = array(
        'Upload.Upload' => array(
            'path' => array(
                'thumbnailSizes' => array(
                    'xxvga' => '1920x1080',
                    'xvga' => '1280x720',
                    'vga' => '640x480',
                    'thumb' => '80x80'
                )
			)
        )
    );

}
