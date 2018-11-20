/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'en';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = '/lib/ckfinder/ckfinder.html?type=Files';
    config.filebrowserUploadUrl= '/lib/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageBrowseUrl = '/lib/ckfinder/ckfinder.html?type=Images';
    config.filebrowserFlashBrowseUrl = '/lib/ckfinder/ckfinder.html?type=Flash';
    config.filebrowserWindowWidth= '1000';
    config.filebrowserWindowHeight= '700';
    config.extraPlugins = 'image';
    config.extraPlugins = 'ckawesome';
    config.fontawesomePath = '/fontawesome-free/css/all.min.css';
};
